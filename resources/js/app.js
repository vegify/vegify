import './bootstrap';
import '../css/app.css';

import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/inertia-vue3';
import { InertiaProgress } from '@inertiajs/progress';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { ZiggyVue } from '../../vendor/tightenco/ziggy/dist/vue.m';
import clickOutside from '@/directives/clickOutside';

const appName = window.document.getElementsByTagName('title')[0]?.innerText || 'Vegify';

createInertiaApp({
    title: (title) => `${title} \| ${appName}`, // eslint-disable-line no-useless-escape
    resolve: (name) =>
        resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue')),
    setup({ el, app, props, plugin }) {
        return createApp({ render: () => h(app, props) })
            .directive('clickOutside', clickOutside)
            .use(plugin)
            .use(ZiggyVue, Ziggy) // eslint-disable-line no-undef
            .mount(el);
    },
});

InertiaProgress.init({ color: '#4B5563' });
