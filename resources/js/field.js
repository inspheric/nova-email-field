Nova.booting((Vue, router) => {
    Vue.component('index-email-field', require('./components/IndexField'));
    Vue.component('detail-email-field', require('./components/DetailField'));
    Vue.component('form-email-field', require('./components/FormField'));
})
