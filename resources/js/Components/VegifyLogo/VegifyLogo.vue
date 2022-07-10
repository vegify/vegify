<script setup>
import { computed } from 'vue';
import VegifyLogoOrigBGLight from './VegifyLogoOrigBGLight.vue';
import VegifyLogoOrigBGDark from './VegifyLogoOrigBGDark.vue';
import VegifyLogoWhite from './VegifyLogoWhite.vue';
import { usePreferredColorScheme } from '@vueuse/core';
import { propsToAttrMap } from '@vue/shared';
const preferredColorScheme = usePreferredColorScheme();

const props = defineProps({
    color: String,
});

const Logo = computed(() =>
    props.color == 'white'
        ? VegifyLogoWhite
        : preferredColorScheme.value == 'dark'
        ? VegifyLogoOrigBGDark
        : VegifyLogoOrigBGLight
);
</script>

<template>
    <Logo />
</template>
