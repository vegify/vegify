<script setup>
import CardThumbnail from '@/Components/EmptyState/CardThumbnail.svg';
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
