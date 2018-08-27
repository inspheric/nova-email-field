<template>
    <email-field :field="field" :clickable="field.clickableOnIndex"></email-field>
</template>

<script>
import Email from './Email'

export default {
    props: ['resourceName', 'field'],

    components: {
        'email-field': Email
    }
}
</script>
