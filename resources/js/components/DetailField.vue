<template>
  <PanelItem :index="index" :field="field">
    <template #value>
      <EmailField :field="field" :clickable="field.clickable" />
    </template>
  </PanelItem>
</template>

<script>
import EmailField from './EmailField'

export default {
  props: ['index', 'resource', 'resourceName', 'resourceId', 'field'],

  components: {
    EmailField
  }
}
</script>
