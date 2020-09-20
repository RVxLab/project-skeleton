import {App} from 'vue';
import HelloWorld from './HelloWorld.vue';

export default {
    install(Vue: App): void {
        Vue.component('HelloWorld', HelloWorld);
    },
}
