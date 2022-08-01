<template>
    <div class="container-xl reviews">
        <p>آراء العملاء</p>
        <div class="reviews-container row">
            <div v-for="item in customers" :key="item" class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-5 col-5" >
            <ReviewsCard :data="item"/>
        </div>
        </div>
    </div>    
</template>

<script>
import ReviewsCard from './ReviewsCard.vue'

const customers =[
    {name:"أبو عبدالله",review:"أفضل ورد طايفي جربته"},
    {name:"Eman",review:"خدمة رائعة وتعامل راقي وتم التوصيل في الوقت"},
    {name:"mona",review:"فواح مرررة و حلو تستخدمه مع بخور العود"},
]
export default{
    name: "CustomerReviews",
    data() {
        return {
            customers
        };
    },
    components: { ReviewsCard }
}

</script>
<style scoped>
.reviews{
    position:relative;
  /*   margin-bottom: 2rem; */
    min-height:350px;
    height:auto;
    position:relative;
    top:50px;
    padding-bottom: 3rem;

}
.reviews >p{
    text-align: right;
    font: normal normal 600 19px/28px Cairo;
    letter-spacing: 1.61px;
    color: #575757;
    opacity: 0.6;
    margin-bottom: 0;
}

.reviews-container{
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    margin-top:1rem
}
.reviews-container >div:not(:last-of-type){
    margin-right:1rem
}
.reviews-container >div{
    flex:1;
    min-width:250px;
    margin-bottom: 2rem;
}
@media (max-width:515px){
    .reviews-container >div:not(:last-of-type){
    margin-bottom:2rem
}
.reviews-container >div:not(:last-of-type){
    margin-right:0
}

}

</style>