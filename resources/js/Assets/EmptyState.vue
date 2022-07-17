<script setup>
import CardThumbnail from '@/Assets/Icons/CardThumbnail.svg';
import RecipeImage from '@/Assets/Icons/RecipeImage.svg'
import { computed } from 'vue';

const props = defineProps({
    type: String,
});

const EmptyState = computed(() =>
    props.type == 'thumbnail' ? CardThumbnail : props.type == 'recipeImage' ? RecipeImage : CardThumbnail
);
</script>

<template>
    <EmptyState />
</template>
