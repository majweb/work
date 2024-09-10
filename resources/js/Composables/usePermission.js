import {usePage} from "@inertiajs/vue3";

export function usePermission(){
    const hasRole = (name) =>usePage().props.roles.includes(name);
    const hasPermission = (name) =>usePage().props.permissions.includes(name);

    return {hasRole,hasPermission}
}
