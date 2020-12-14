require('./bootstrap');
window.Vue = require('vue');

import store from './store/index'

Vue.component('searchbar', require('./components/Searchbar').default);
Vue.component('tweet', require('./components/Tweet').default);
Vue.component('tweets', require('./components/Tweets').default);

new Vue({
    el: '#app',
    store
});
