import axios from 'axios';
import components from './components';
import {createApp} from 'vue';

axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

const app = createApp({});

app.use(components);

app.mount('#app');
