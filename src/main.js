import Vue from 'vue'
import App from './App.vue'
import router from './router.js'
import { BootstrapVue, IconsPlugin } from 'bootstrap-vue'
import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'
Vue.use(BootstrapVue);
Vue.use(IconsPlugin);
new Vue({
  router,
  type   : 'loop',
	perPage: 3,
	perMove: 1,
  render: h => h(App),
}).$mount('#app')
