import { usePage } from '@inertiajs/vue3';
import __ from "@/lang.js";

export function useProjectHelpers() {
    const page = usePage();

    const getPositionTitle = (project) => {
        if (!project) return __('translate.noPosition');

        // Jeśli backend już przetransformował position na string (np. w kontrolerze index)
        if (typeof project.position === 'string') {
            return project.position;
        }

        const language = page.props.language;

        // Próba pobrania ze stanowiska (position_data lub position)
        const position = project.position_data || project.position;
        if (position?.allTranslations?.title?.[language]) {
            return position.allTranslations.title[language];
        }

        // Próba pobrania z zawodu (profession_data lub profession)
        const profession = project.profession_data || project.profession;
        if (profession?.allTranslations?.title?.[language]) {
            return profession.allTranslations.title[language];
        }

        // Próba pobrania z ręcznego tytułu (title)
        if (project.title?.[language]) {
            return project.title[language];
        }

        return __('translate.noPosition');
    };

    const getInitials = (name) => {
        if (!name) return '?';
        const parts = name.split(' ');
        if (parts.length > 1) {
            return (parts[0].charAt(0) + parts[1].charAt(0)).toUpperCase();
        }
        return name.charAt(0).toUpperCase();
    };

    return {
        getPositionTitle,
        getInitials
    };
}
