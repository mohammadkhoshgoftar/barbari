import { createApp } from 'vue';
import router from './admin/router';
import UserIndex from './admin/views/UserIndex.vue';
import UserCreate from './admin/views/UserCreate.vue';

createApp(UserIndex).use(router).mount('#app');
createApp(UserCreate).use(router).mount('#app');


