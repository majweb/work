/**
 * Krótki dwutonowy sygnał nowej wiadomości, generowany w przeglądarce (bez pliku audio).
 *
 * Przeglądarki pozwalają grać dźwięk dopiero po pierwszym kliknięciu albo klawiszu na stronie,
 * dlatego kontekst audio odblokowujemy przy pierwszej interakcji. Do tego czasu sygnał jest pomijany.
 */

// Ikona w menu i otwarta rozmowa mogą zauważyć tę samą wiadomość w odstępie kilku sekund
// (osobne odpytywania) - w tym oknie gramy jeden sygnał.
const MIN_GAP_MS = 6000;

let audioContext = null;
let lastPlayedAt = 0;
let unlockListenersAdded = false;

function getAudioContext() {
    if (audioContext) {
        return audioContext;
    }

    const AudioContextClass = window.AudioContext ?? window.webkitAudioContext;
    if (!AudioContextClass) {
        return null;
    }

    audioContext = new AudioContextClass();

    return audioContext;
}

export function primeMessengerSound() {
    if (unlockListenersAdded || typeof window === 'undefined') {
        return;
    }
    unlockListenersAdded = true;

    const unlock = () => {
        getAudioContext()?.resume();
        window.removeEventListener('pointerdown', unlock);
        window.removeEventListener('keydown', unlock);
    };

    window.addEventListener('pointerdown', unlock);
    window.addEventListener('keydown', unlock);
}

function playTone(context, frequency, startsAt, duration) {
    const oscillator = context.createOscillator();
    const gain = context.createGain();

    oscillator.type = 'sine';
    oscillator.frequency.setValueAtTime(frequency, startsAt);
    gain.gain.setValueAtTime(0.0001, startsAt);
    gain.gain.exponentialRampToValueAtTime(0.18, startsAt + 0.02);
    gain.gain.exponentialRampToValueAtTime(0.0001, startsAt + duration);

    oscillator.connect(gain).connect(context.destination);
    oscillator.start(startsAt);
    oscillator.stop(startsAt + duration + 0.05);
}

/**
 * Gra sygnał nowej wiadomości. Kilka wiadomości w ciągu kilku sekund daje jeden sygnał.
 */
export function playNewMessageSound() {
    const now = Date.now();
    if (now - lastPlayedAt < MIN_GAP_MS) {
        return;
    }

    const context = getAudioContext();
    if (!context || context.state !== 'running') {
        return;
    }

    lastPlayedAt = now;
    const startsAt = context.currentTime;
    playTone(context, 880, startsAt, 0.18);
    playTone(context, 1318.5, startsAt + 0.12, 0.3);
}
