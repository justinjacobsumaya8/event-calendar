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
                        <input type="date" class="form-control" v-model="date_from" id="input-date-from">
                    </div>
                    <div class="col-md-6">
                        <label for="input-date-to">To</label>
                        <input type="date" class="form-control" v-model="date_to" id="input-date-to">
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
            sunday: ''
        }
    },
    methods: {
        submitForm() {
            if(this.name == '') {
                alert('what');
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
                        type: 'success',
                        position: 'top-right'
                    }); 
                    
                    bus.$emit('saved');
                }
            })
            .catch(error => {
                console.log(error);
            })
        }   
    }
}
</script>

<style scoped>
    label {
        font-size: 14px;
    }

    .margin span {
        margin-left: 2px;
    }
</style>