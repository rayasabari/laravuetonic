
// custom select2
// $('#kt_datatable_search_status').select2();
// $('#kt_datatable_search_type').select2();

window.Vue = require('vue');

Vue.component('test', require('./components/test.vue').default);

const app = new Vue({
  el: '#app'
});

