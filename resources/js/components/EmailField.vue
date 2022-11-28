<template>
    <div class="flex items-center" @click.stop>
        <a :href="`mailto:${field.value}`" v-if="clickable && field.value"
            class="link-default flex items-center" target="_blank">
            <svg xmlns="http://www.w3.org/2000/svg" class="fill-current mr-2" width="16" height="16" viewBox="0 0 24 24"
                role="presentation">
                <path
                    d="M4 4h16a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6c0-1.1.9-2 2-2zm16 3.38V6H4v1.38l8 4 8-4zm0 2.24l-7.55 3.77a1 1 0 0 1-.9 0L4 9.62V18h16V9.62z" />
            </svg>

            <span>
                {{ field.value }}
            </span>
        </a>

        <span v-else-if="shouldDisplayAsHtml && field.label" class="block" v-html="field.label"></span>

        <span v-else-if="field.value" class="block truncate">{{ field.value }}</span>

        <span v-else>&mdash;</span>

        <button v-if="field.value && field.copyable" @click.prevent="copy" type="button"
            class="flex items-center hover:bg-gray-50 dark:hover:bg-gray-900 text-gray-500 dark:text-gray-400 hover:text-gray-500 active:text-gray-600 rounded-lg px-2 ml-1"
            v-tooltip="__('Copy to clipboard')">
            <Icon class="text-gray-500 dark:text-gray-400" :solid="true" type="clipboard" width="14" />
        </button>
    </div>
</template>

<script>
import { CopiesToClipboard } from 'laravel-nova'

export default {
    mixins: [CopiesToClipboard],
    props: ['resource', 'resourceName', 'resourceId', 'field', 'clickable'],

    methods: {
        copy() {
            this.copyValueToClipboard(this.field.value)
        },
    },

    computed: {
        hasCustomHtml() {
            return !!this.field.customHtml
        },
        shouldDisplayAsHtml() {
            return this.field.asHtml
        }
    }
}
</script>
