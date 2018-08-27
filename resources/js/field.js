Nova.booting((Vue, router) => {
    Vue.component('index-email', require('./components/IndexField'));
    Vue.component('detail-email', require('./components/DetailField'));
    Vue.component('form-email', require('./components/FormField'));
})
