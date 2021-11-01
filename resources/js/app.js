require('./bootstrap');

window.Vue = require("vue").default;

Vue.component('spiral', require('./components/Spiral.vue').default);

Vue.prototype.$eventHub = new Vue();

const app = new Vue({
    el: '#app',
});
