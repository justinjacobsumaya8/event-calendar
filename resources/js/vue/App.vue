<template>
    <div>
        <div class="container my-5">
            <Calendar/>
        </div>
    </div>
</template>

<script>

import Calendar from './Calendar';

export default {
    name: 'App',
    components: {
        Calendar
    }
}
</script>

<style>
    body {
        background-color: #efefef !important;
    }
</style>