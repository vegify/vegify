
<script setup>
import { watch, ref, computed } from 'vue';
import { Link } from '@inertiajs/inertia-vue3';
import { usePage } from '@inertiajs/inertia-vue3'
import RecipeCard from '@/Components/RecipeCard.vue';
import SearchIcon from '@/Assets/Icons/Search.svg?url';
import XIcon from '@/Assets/Icons/XIcon.svg?url';

const props = defineProps({
    isSubPage: {
        type: Boolean,
        default: false,
        optional: true
    }
})

const searchTerm = ref('');
const searchResults = ref([]);

const recipes = computed(() => usePage().props.value.recipes)

watch(searchTerm, async (newSearch) => {
    searchResults.value = [];
    if (newSearch.length > 0)
        try {
            const res = await fetch(`/search/${newSearch}/`, {
                method: 'get',
            });
            searchResults.value = await res.json();
        } catch (error) {
            searchResults.value = [];
        }
});
</script>

<template>
    <div
        class="dark:text-white"
        :class="{ 'relative': props.isSubPage }"
    >
        <div class="relative mx-auto w-4/5 md:w-3/4 lg:w-2/3">
            <input
                type="text"
                id="search"
                placeholder="Search..."
                v-model="searchTerm"
                autofocus
                class="static text-black text-xl px-[19px] p-2 w-full rounded-full"
            />
            <img
                v-if="searchTerm.length > 0"
                class="absolute h-9 w-9 right-[.25rem] top-[.35rem] cursor-pointer"
                :src="XIcon"
                @click="searchTerm = ''"
            />
            <img
                v-else
                class="absolute h-9 w-9 right-[.25rem] top-[.35rem]"
                :src="SearchIcon"
            />
        </div>
        <div :class="{ 'bg-gray-300 dark:bg-gray-600 ml-[10%] rounded-md m-5 absolute': props.isSubPage }">
            <div
                v-if="searchTerm.length > 0"
                class="mx-auto text-center text-lg"
            >
                <strong data-testid="search-result-count">{{ searchResults.length }}</strong> search
                result{{ searchResults.length === 1 ? '' : 's' }} for
                "{{ searchTerm }}"
            </div>
            <Link
                v-for="recipe in searchResults"
                :key="recipe.id"
                :href="route('recipe.show', recipe.id)"
                scroll-region
            >
            <RecipeCard :recipe="recipe" />
            </Link>
        </div>
        <div
            v-show="searchTerm.length < 1"
            v-if="!isSubPage"
        >
            <Link
                v-for="recipe in recipes"
                :key="recipe.id"
                :href="route('recipe.show', recipe.id)"
                scroll-region
            >
            <RecipeCard :recipe="recipe" />
            </Link>
        </div>
    </div>
</template>
