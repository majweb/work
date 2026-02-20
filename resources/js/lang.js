import { usePage } from '@inertiajs/vue3'

export default function __ (key, replacements = {}) {
    if (!key) return '';

    let translation = usePage().props.translations[key] || key

    Object.keys(replacements).forEach(replacement => {
        translation = translation.replace(`:${replacement}`, replacements[replacement])
    })

    // Obsługa fallbacku dla starych powiadomień typu translate.keyID
    if (translation === key && key.startsWith('translate.')) {
        const baseKey = key.split(/\d+/)[0]; // np. translate.newAplication
        const id = key.match(/\d+/)?.[0];    // np. 258

        if (id && usePage().props.translations[baseKey]) {
            let baseTranslation = usePage().props.translations[baseKey];
            return baseTranslation.includes(':id')
                ? baseTranslation.replace(':id', id)
                : baseTranslation + ' ' + id;
        }
    }

    return translation
}
