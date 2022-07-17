<template>
    <Transition
        name="slide-fade"
        mode="out-in"
        appear
    >
        <slot />
    </Transition>
</template>

<style scoped>
.slide-fade-enter-active,
.slide-fade-leave-active {
    transition: all 0.135s ease-out;
}

.slide-fade-enter-from {
    opacity: 0;
}

.slide-fade-leave-to {
    opacity: 0;
}
</style>