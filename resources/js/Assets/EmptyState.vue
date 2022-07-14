<script setup>
import CardThumbnail from '@/Assets/Icons/CardThumbnail.svg';
import { computed } from 'vue';

const props = defineProps({
    type: String,
});

const EmptyState = computed(() =>
    props.type == 'thumbnail' ? CardThumbnail : CardThumbnail
);
</script>

<template>
    <EmptyState />
</template>
