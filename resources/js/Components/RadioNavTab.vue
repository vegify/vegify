<script setup>
defineProps({
    modelValue: String,
    value: String,
    label: String,
    side: {
        type: String,
        default: 'c'
    }
})
defineEmits([
    'update:modelValue'
])
</script>

<template>
    <div
        class="flex-none  grow p-2 justify-items-center hover:bg-green"
        @click="$emit('update:modelValue', value)"
        :class="{
            'bg-yellow-orange': modelValue === value,
            'rounded-l-md': side === 'l',
            'rounded-r-md': side === 'r'
        }"
    >
        <label
            :for="value"
            class="ml-[9px]"
        >{{ label }}</label>
    </div>
</template>
