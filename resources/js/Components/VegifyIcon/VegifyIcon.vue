<script setup>
import { computed } from 'vue';
import VegifyIconOrigBGLight from './VegifyIconOrigBGLight.vue';
import VegifyIconOrigBGDark from './VegifyIconOrigBGDark.vue';
import VegifyIconWhite from './VegifyIconWhite.vue';
import { usePreferredColorScheme } from '@vueuse/core';
import { propsToAttrMap } from '@vue/shared';
const preferredColorScheme = usePreferredColorScheme();

const props = defineProps({
    color: String,
});

const Icon = computed(() =>
    props.color == 'white'
        ? VegifyIconWhite
        : preferredColorScheme.value == 'dark'
        ? VegifyIconOrigBGDark
        : VegifyIconOrigBGLight
);
</script>

<template>
    <Icon />
</template>
