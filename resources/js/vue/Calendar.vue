<template>
    <div>
        <div class="card">
            <div class="card-header">
                <h5>Calendar</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-5">
                        <LeftCard/>
                    </div>
                    <div class="col-md-7">
                        <RightCard/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

import LeftCard from './calendar/LeftCard';
import RightCard from './calendar/RightCard';

export default {
    name: 'Calendar',
    components: {
        LeftCard,
        RightCard
    }
}
</script>

<style scoped>
    .card {
        box-shadow: 0 0 30px rgba(0,0,0,0.1) !important;
        border: 0 !important;
    }

    .card-header {
        background-color: #fff !important;
    }
</style>