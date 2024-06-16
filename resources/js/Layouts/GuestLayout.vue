<script setup>
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import { Link } from '@inertiajs/vue3';
</script>

<template>
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-purple-700">
        <div>
            <img src="/logops2.png" alt="Costum Logo" class="w-56 h-56" >
        </div>

        <div
            class="w-full sm:max-w-md mt-6 px-6 py-4 bg-purple-100 shadow-md overflow-hidden sm:rounded-lg"
        >
            <slot />
        </div>
    </div>  
</template>
