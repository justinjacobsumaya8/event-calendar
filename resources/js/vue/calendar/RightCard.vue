<template>
    <div>
        <table class="table">  
            <thead>
                <tr>
                    <th colspan="2"><h3>{{ header_date }}</h3></th>
                </tr>
            </thead>
            <tbody v-if="dates.length > 0">
                <tr v-for="(date, index) in dates" :key="index" :class="{ 'tr-success' : date.events.length > 0 }">
                    <td class="w-30">{{ format_date(date.date) }}</td>
                    <td >
                        <span v-for="(event, index) in date.events" :key="index">
                            {{ event.name }}
                        </span>
                    </td>
                </tr>
            </tbody>
            <tfoot v-else>
                <tr>
                    <td>No data available.</td>
                </tr>
            </tfoot>
        </table>
    </div>
</template>

<script>

import moment from 'moment'
import bus from '../../bus'

export default {
    name: 'RightCard',
    data() {
        return {
            dates: [],
            header_date: ''
        }
    },
    methods: {
        fetchCalendarDates() {
            axios.get('api/calendar')
            .then(response => {
                this.dates = response.data;
                this.header_date = moment(String(response.data[0]['date'])).format('MMM YYYY');
                
                var newArray = response.data.filter(item => {
                    return item.events.length > 0 
                });
                
                if (newArray.length > 0) 
                {
                    bus.$emit('events', newArray);   
                }
            })
            .catch(error => {
                console.log(error);
            })
        },
        format_date(value){
            if (value) {
                return moment(String(value)).format('D ddd')
            }
        },
    },
    created() {
        this.fetchCalendarDates();

        bus.$on('saved', (data) => {
            this.fetchCalendarDates();
        });
    }
}
</script>

<style scoped>
    table th {
        border-top: none;
    }

    .w-30 {
        width: 30%;
    }

    .tr-success {
        background-color: #e0fbde;
    }
</style>