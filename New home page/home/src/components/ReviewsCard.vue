<template>
    <img :src="personIcon" class="person-icon"/>
    <div class="box">
        <p>{{data.name}}</p>
        <p>{{data.review}}</p>
    </div>
    
</template>
<script>
import personIcon from "../assets/images/Group 125.png"
export default{
    name:"ReviewsCard",
    props:["data"],
    data(){
        return{
            personIcon
        }
        
    }
}
</script>
<style>
.box{

min-height: 100px;
height:auto;

box-shadow: 0px 3px 6px #849CAA29;
opacity: 1;
padding-top: 1rem;
padding-bottom: 1rem;
}
.person-icon{
    width: 80px;
    height: 80px;
}
.box p{
    font: normal normal 600 18px/24px Cairo;
letter-spacing: 0px;
color: #707070;
opacity: 0.7;
}
</style>