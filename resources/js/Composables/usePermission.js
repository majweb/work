import {usePage} from "@inertiajs/vue3";

export function usePermission(){
    const hasRole = (name) =>usePage().props.roles.includes(name);
    const noRole = (name) =>!usePage().props.roles.includes(name);
    // const hasPermission = (name) =>usePage().props.permissionsRecruit.includes(name);
    return {hasRole, noRole}
}
