<script setup>
import { computed } from 'vue';
import emptystate from '@/Assets/EmptyState.vue';
defineProps({
    recipe: Object,
});
</script>

<template>
    <div
        class="dark:bg-gray border-black dark:border-gray-light border-solid border-[1px] rounded-sm m-4 flex divide-x dark:hover:border-white hover:shadow-lg transition ease-in-out delay-15 hover:-translate-y-1 hover:scale-110 duration-2ß00"
    >
        <div
            class="h-auto w-[275px] sm:w-[175px] lg:w-[180px] bg-gray-light dark:text-gray text-center"
        >
            <emptystate type="thumbnail" class="" />
        </div>
        <div class="p-2 w-full bg-white dark:bg-gray-dark">
            <div class="font-bold text-3xl dark:text-white">
                {{ recipe.as_ingredient.name }}
            </div>
            <div class="font capitalize font-serif text-sm leading-6">
                {{ recipe.subtitle }}
            </div>
            <div class="font-[300] text-2xl tracking-widest">000</div>
            <div class="font-light font-serif tracking-wide text-xs">
                Calories Per Serving
            </div>
        </div>
    </div>
</template>
