require('./bootstrap');

window.Vue = require("vue");

Vue.component("spiral", require("./components/Spiral"));

Vue.prototype.$eventHub = new Vue();

const app = new Vue({
  el: "#app"
});
