<script setup>
defineProps({
    type: {
        type: String,
        default: 'submit',
    },
});
</script>

<template>
    <button :type="type"
        class="
            inline-flex items-center px-4 py-2 
            bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs 
            text-white dark:text-black uppercase tracking-widest 
            hover:bg-gray-700 dark:hover:bg-gray-300 active:bg-gray-900 dark:active:bg-gray-500
            focus:outline-none focus:border-gray-900 focus:shadow-outline-gray transition ease-in-out duration-150
            ">
        <slot />
    </button>
</template>
