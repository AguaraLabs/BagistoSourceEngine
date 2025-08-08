/**
 * This will track all the images and fonts for publishing.
 */
import.meta.glob(["../images/**", "../fonts/**"]);

/**
 * Main vue bundler.
 */
import { createApp } from "vue/dist/vue.esm-bundler";

/**
 * Main root application registry.
 */
window.app = createApp({
    data() {
        return {};
    },

    methods: {
        onSubmit() {}
    },
});

import Axios from "./plugins/axios";
import VeeValidate from "./plugins/vee-validate";
[
    Axios,
    VeeValidate
].forEach((plugin) => app.use(plugin));


export default app;
