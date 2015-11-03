var Vue=require('vue');
var vueRouter=require('vue-router');
var vueResource=require('vue-resource');
 
 // import users from './components/user.vue'
var About=require('./components/About.vue');
  import Contact from './components/Contact.vue'


Vue.use(vueRouter);
Vue.use(vueResource);

var router=new vueRouter();

router.map({
	'/about':{
		component:About
		
	},
	'/contact':{
		component:Contact
		
	},
});

var App=Vue.extend({});

router.start(App,'#app')