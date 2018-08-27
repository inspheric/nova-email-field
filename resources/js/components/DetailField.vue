<template>
    <panel-item :field="field">
        <template slot="value">
            <email-field :field="field" :clickable="field.clickable"></email-field>
        </template>
    </panel-item>
</template>

<script>
import Email from './Email'

export default {
    props: ['resource', 'resourceName', 'resourceId', 'field'],

    components: {
        'email-field': Email
    }
}
</script>
