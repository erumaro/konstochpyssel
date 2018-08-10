// SASS -> CSS
import style from '../sass/style.scss';

// Vue
import Vue from 'vue';
import App from './App.vue';

new Vue({
    render: h => h(App)
}).$mount('#app');