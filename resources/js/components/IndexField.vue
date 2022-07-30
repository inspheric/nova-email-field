<template>
  <EmailField :field="field" :clickable="field.clickable" />
</template>

<script>
import EmailField from './EmailField'

export default {
  props: ['resourceName', 'field'],

  components: {
    EmailField
  }
}
</script>
