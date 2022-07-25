<template>
    <p>Hello World</p>
</template>
<script>
import moment from "moment";
export default{
    data(){
        return{
            currentDate: moment(),
        };
    },
    methods: {
        getStartDate() {
            let date = moment(this.currentDate);
            date.startOf("month");
            const youbiNum = date.day();
            return date.subtract(youbiNum, "days");
        },
        getEndDate(){
            let date = moment(this.currentDate);
            date.endOf("month");
            const youbiNum = date.day();
            return date.add(6 - youbiNum, "days");
        }
    },
    mounted(){
        console.log(this.getStartDate());
        console.log(this.getEndDate());
    }
}
</script>