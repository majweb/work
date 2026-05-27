import {createInertiaApp} from '@inertiajs/vue3'
import createServer from '@inertiajs/vue3/server'
import {renderToString} from '@vue/server-renderer'
import {createSSRApp, h} from 'vue'
import {ZiggyVue, route} from '../../vendor/tightenco/ziggy';
import __ from "@/lang.js";
import VueDatePicker from '@vuepic/vue-datepicker';
import '@vuepic/vue-datepicker/dist/main.css'
const appName = import.meta.env.VITE_APP_NAME || 'Laravel';

createServer(page =>
    createInertiaApp({
        page,
        render: renderToString,
        title: (title) => `${title} - ${appName}`,
        resolve: name => {
            const pages = import.meta.glob('./Pages/**/*.vue', {eager: true})
            return pages[`./Pages/${name}.vue`]
        },
        setup({App, props, plugin}) {
            let app = createSSRApp({
                render: () => h(App, props),
            });
            app.config.globalProperties.__ = __;
            app.use(plugin)
            app.component('VueDatePicker', VueDatePicker)
            app.component('file-pond', { template: '<div></div>' })
            app.use(ZiggyVue, {
                ...page.props.ziggy,
                location: new URL(page.props.ziggy.location),
            });

            // Ensure route is globally available in SSR
            if (typeof global !== 'undefined') {
                global.Ziggy = page.props.ziggy;
                global.route = (name, params, absolute, config = page.props.ziggy) => {
                    return route(name, params, absolute, config);
                };
            }

            return app;

        },
    })
)
