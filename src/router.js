import Vue from 'vue'
import VueRouter from 'vue-router'
import Login from './pages/login.vue'
import Home from './pages/home.vue'
import About from './pages/about.vue'
import Contact from './pages/Contact.vue'
import Destination from './pages/destination.vue'
import Chitkul from './pages/Destination/Chitkul.vue'
import BhawaValley from './pages/Destination/Bhawa-Valley.vue'
import Kalpa from './pages/Destination/Kalpa.vue'
import Kamru from './pages/Destination/Kamru.vue'
import Nako from './pages/Destination/Nako.vue'
import SanglaValley from './pages/Destination/Sangla-Valley.vue'
Vue.use(VueRouter);
Vue.config.productionTip = false
const routes = [
  {path:'/login',component:Login },
  {path:'/',component:Home },
  {path:'/about',component:About },
  {path:'/destination',component:Destination },
  {path:'/Chitkul',component:Chitkul },
  {path:'/Bhawa-Valley',component:BhawaValley },
  {path:'/Kalpa',component:Kalpa },
  {path:'/Kamru',component:Kamru },
  {path:'/Nako',component:Nako },
  {path:'/Sangla-Valley',component:SanglaValley },
  {path:'/contact-us',component:Contact }
];
const router = new VueRouter({
  routes,
  mode : 'history'
})
export default router;