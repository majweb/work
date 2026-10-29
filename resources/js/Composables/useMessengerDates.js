import { usePage } from '@inertiajs/vue3';

/**
 * Daty w wiadomościach w języku strony (Intl - bez dodatkowych bibliotek).
 */
export function useMessengerDates() {
    const locale = () => usePage().props.language || 'pl';

    const formatDateTime = (value) => value
        ? new Date(value).toLocaleString(locale(), { dateStyle: 'short', timeStyle: 'short' })
        : '';

    // Na liście rozmów: dziś - godzina, wcześniej - data
    const formatShort = (value) => {
        if (!value) return '';
        const date = new Date(value);
        const isToday = date.toDateString() === new Date().toDateString();

        return isToday
            ? date.toLocaleTimeString(locale(), { hour: '2-digit', minute: '2-digit' })
            : date.toLocaleDateString(locale(), { day: 'numeric', month: 'short' });
    };

    const formatRelative = (value) => {
        if (!value) return '';
        const seconds = Math.round((new Date(value).getTime() - Date.now()) / 1000);
        const rtf = new Intl.RelativeTimeFormat(locale(), { numeric: 'auto' });
        const units = [['day', 86400], ['hour', 3600], ['minute', 60]];

        for (const [unit, size] of units) {
            if (Math.abs(seconds) >= size) {
                return rtf.format(Math.round(seconds / size), unit);
            }
        }

        return rtf.format(0, 'minute');
    };

    return { formatDateTime, formatShort, formatRelative };
}
