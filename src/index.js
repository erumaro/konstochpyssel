// SASS -> CSS
import style from '../sass/style.scss';

// Vue
import Vue from 'vue';
import App from './App.vue';

Vue.config.devtools = true;

new Vue({
    render: h => h(App)
}).$mount('#app');