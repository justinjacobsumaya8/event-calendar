<template>
    <div>
        <Navbar/>
        <div class="container py-3">
            <Calendar/>
        </div>
    </div>
</template>

<script>

import Calendar from './Calendar';
import Navbar from './Navbar';

export default {
    name: 'App',
    components: {
        Calendar,
        Navbar
    }
}
</script>

<style>
    body {
        background-color: #f5f5f5 !important;
    }
</style>