import IndexField from './components/IndexField'
import DetailField from './components/DetailField'
import FormField from './components/FormField'

Nova.booting((app, store) => {
  app.component('index-inspheric-email-field', IndexField)
  app.component('detail-inspheric-email-field', DetailField)
  app.component('form-inspheric-email-field', FormField)
})
