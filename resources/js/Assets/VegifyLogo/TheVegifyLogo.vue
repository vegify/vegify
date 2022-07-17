<script setup>
import { computed } from 'vue';
import VegifyLogoOrigBGDark from './VegifyLogoBGDark.svg';
import VegifyLogoOrigBGLight from './VegifyLogoBGLight.svg';
import VegifyLogoGreenWhite from './VegifyLogoGreenWhite.svg';
import VegifyLogoGreen from './VegifyLogoGreen.svg';
import VegifyLogoWhite from './VegifyLogoWhite.svg';
import VegifyIconOrigBGDark from './VegifyIconBGDark.svg';
import VegifyIconOrigBGLight from './VegifyIconBGLight.svg';
import VegifyIconGreenWhite from './VegifyIconGreenWhite.svg';
import VegifyIconGreen from './VegifyIconGreen.svg';
import VegifyIconWhite from './VegifyIconWhite.svg';
import { usePreferredColorScheme } from '@vueuse/core';

const preferredColorScheme = usePreferredColorScheme();

const props = defineProps({
    color: String,
    type: String,
});

const VegifyLogo = computed(() =>
    props.type == 'icon'
        ? props.color == 'white'
            ? VegifyIconWhite
            : props.color == 'green'
                ? VegifyIconGreen
                : props.color == 'greenwhite'
                    ? VegifyIconGreenWhite
                    : preferredColorScheme.value == 'dark'
                        ? VegifyIconOrigBGDark
                        : VegifyIconOrigBGLight
        : props.color == 'white'
            ? VegifyLogoWhite
            : props.color == 'green'
                ? VegifyLogoGreen
                : props.color == 'greenwhite'
                    ? VegifyLogoGreenWhite
                    : preferredColorScheme.value == 'dark'
                        ? VegifyLogoOrigBGDark
                        : VegifyLogoOrigBGLight
);
</script>

<template>
    <VegifyLogo />
</template>
