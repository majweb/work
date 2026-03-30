import { usePage } from '@inertiajs/vue3'

export default function __ (key, replacements = {}) {
    if (!key) return '';

    let translation = usePage().props.translations[key] || key

    if (translation === key) {
        // Spróbuj znaleźć jako obiekt/tablicę, jeśli klucz kończy się kropką lub jest bazą dla zagnieżdżonych kluczy
        const translations = usePage().props.translations;
        const prefix = key + '.';
        const filtered = Object.keys(translations)
            .filter(k => k.startsWith(prefix))
            .reduce((obj, k) => {
                const path = k.replace(prefix, '').split('.');
                let current = obj;
                for (let i = 0; i < path.length; i++) {
                    const part = path[i];
                    if (i === path.length - 1) {
                        current[part] = translations[k];
                    } else {
                        current[part] = current[part] || {};
                        current = current[part];
                    }
                }
                return obj;
            }, {});

        if (Object.keys(filtered).length > 0) {
            // Spróbuj skonwertować obiekt z kluczami numerycznymi na tablicę
            const keys = Object.keys(filtered);
            const isArray = keys.length > 0 && keys.every(key => !isNaN(key));
            if (isArray) {
                translation = Object.values(filtered);
            } else {
                translation = filtered;
            }
        }
    }

    if (typeof translation === 'string') {
        Object.keys(replacements).forEach(replacement => {
            translation = translation.replace(`:${replacement}`, replacements[replacement])
        })
    }

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
