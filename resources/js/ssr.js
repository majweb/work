import {createInertiaApp} from '@inertiajs/vue3'
import createServer from '@inertiajs/vue3/server'
import {renderToString} from '@vue/server-renderer'
import {createSSRApp, h} from 'vue'
import {ZiggyVue} from '../../vendor/tightenco/ziggy';
import __ from "@/lang.js";
import VueApexCharts from "vue3-apexcharts";

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
                .use(VueApexCharts)
            app.use(ZiggyVue, {
                ...page.props.ziggy,
                location: new URL(page.props.ziggy.location),
            });
            return app;

        },
    })
)
