<template>
    <div>
        <form @submit.prevent="submitForm" method="POST">
            <div class="form-group">
                <label for="input-event">Event</label>
                <input type="text" class="form-control" v-model="name" id="input-event">
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-6">
                        <label for="input-date-from">From</label>
                        <b-form-datepicker v-model="date_from" :min="minDate" :max="maxDate" class="mb-2"></b-form-datepicker>
                    </div>
                    <div class="col-md-6">
                        <label for="input-date-to">To</label>
                        <!-- <input type="date" class="form-control" v-model="date_to" id="input-date-to"> -->
                        <b-form-datepicker v-model="date_to" :min="minDate" :max="maxDate" class="mb-2"></b-form-datepicker>
                    </div>
                </div>
            </div>
            <div class="form-group d-flex justify-content-around margin">
                <label class="d-flex align-items-center" for="check-1">
                    <input type="checkbox" v-model="monday" value="1" id="check-1">
                    <span>Mon</span>
                </label>
                <label class="d-flex align-items-center" for="check-2">
                    <input type="checkbox" v-model="tuesday" value="1" id="check-2">
                    <span>Tue</span>
                </label>
                <label class="d-flex align-items-center" for="check-3">
                    <input type="checkbox" v-model="wednesday" value="1" id="check-3">
                    <span>Wed</span>
                </label>
                <label class="d-flex align-items-center" for="check-4">
                    <input type="checkbox" v-model="thursday" value="1" id="check-4">
                    <span>Thu</span>
                </label>
                <label class="d-flex align-items-center" for="check-5">
                    <input type="checkbox" v-model="friday" value="1" id="check-5">
                    <span>Fri</span>
                </label>
                <label class="d-flex align-items-center" for="check-6">
                    <input type="checkbox" v-model="saturday" value="1" id="check-6">
                    <span>Sat</span>
                </label>
                <label class="d-flex align-items-center" for="check-7">
                    <input type="checkbox" v-model="sunday" value="1" id="check-7">
                    <span>Sun</span>
                </label>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
</template>

<script>

import bus from '../../bus'

export default {
    name: 'LeftCard',
    data() {
        return {
            name: '',
            date_from: '',
            date_to: '',
            monday: '',
            tuesday: '',
            wednesday: '',
            thursday: '',
            friday: '',
            saturday: '',
            sunday: '',
            minDate: '',
            maxDate: ''
        }
    },
    methods: {
        submitForm() {
            if(this.name == '') {
                this.$toast.open({
                    message: 'Please fill up Event Name',
                    type: 'warning',
                    position: 'top-right'
                }); 
                return;
            }

            if(this.date_from == '') {
                this.$toast.open({
                    message: 'Please fill up Date From',
                    type: 'warning',
                    position: 'top-right'
                }); 
                return;
            }

            if(this.date_to == '') {
                this.$toast.open({
                    message: 'Please fill up Date To',
                    type: 'warning',
                    position: 'top-right'
                }); 
                return;
            }

            if((this.monday == '' || this.monday == false) 
                && (this.tuesday == '' || this.tuesday == false)
                && (this.wednesday == '' || this.wednesday == false)
                && (this.thursday == '' || this.thursday == false)
                && (this.friday == '' || this.friday == false)
                && (this.saturday == '' || this.saturday == false)
                && (this.sunday == '' || this.sunday == false)
            ) 
            {
                this.$toast.open({
                    message: 'Please select a day',
                    type: 'warning',
                    position: 'top-right'
                }); 
                return;
            }

            axios.post('api/calendar/store', {
                name: this.name,
                date_from: this.date_from,
                date_to: this.date_to,
                monday: this.monday,
                tuesday: this.tuesday,
                wednesday: this.wednesday,
                thursday: this.thursday,
                friday: this.friday,
                saturday: this.saturday,
                sunday: this.sunday
            })
            .then(response => {
                if (response.status == 200) 
                {
                    this.$toast.open({
                        message: response.data.message,
                        type: response.data.type,
                        position: 'top-right'
                    }); 
                    
                    bus.$emit('saved');
                }
            })
            .catch(error => {
                console.log()
                this.$toast.open({
                    message: error.response.data.message,
                    type: 'warning',
                    position: 'top-right'
                });
            })
        },
        getData() {
            bus.$on('events', (data) => {

                this.name = data[0]['events'][0]['name'];
                this.date_from = data[0]['events'][0]['date_from'];
                this.date_to = data[0]['events'][0]['date_to'];
                
                var monday = data.filter(item => {
                    return item.monday == 1 
                });

                var tuesday = data.filter(item => {
                    return item.tuesday == 1 
                });

                var wednesday = data.filter(item => {
                    return item.wednesday == 1 
                });

                var thursday = data.filter(item => {
                    return item.thursday == 1 
                });

                var friday = data.filter(item => {
                    return item.friday == 1 
                });

                var saturday = data.filter(item => {
                    return item.saturday == 1 
                });

                var sunday = data.filter(item => {
                    return item.sunday == 1 
                });

                if (monday.length > 0) 
                {
                    this.monday = 1;
                }

                if (tuesday.length > 0) 
                {
                    this.tuesday = 1;
                }

                if (wednesday.length > 0) 
                {
                    this.wednesday = 1;
                }

                if (thursday.length > 0) 
                {
                    this.thursday = 1;
                }

                if (friday.length > 0) 
                {
                    this.friday = 1;
                }

                if (saturday.length > 0) 
                {
                    this.saturday = 1;
                }

                if (sunday.length > 0) 
                {
                    this.sunday = 1;
                }
            });
        },
        setupDate() {
            const now = new Date()
            const today = new Date(now.getFullYear(), now.getMonth(), now.getDate())

            const minDate = new Date(today)
            minDate.setMonth(minDate.getMonth())
            minDate.setDate(1)

            const maxDate = new Date(today)
            maxDate.setMonth(maxDate.getMonth())
            maxDate.setDate(30)

            this.minDate = minDate;
            this.maxDate = maxDate;
        }
    },
    created() {
        this.getData();
        this.setupDate();
    },
}
</script>

<style scoped>
    label {
        font-size: 14px;
    }

    .margin span {
        margin-left: 4px;
    }
</style>