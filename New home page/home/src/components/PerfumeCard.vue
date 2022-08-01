<template>
    <div class="Perfume-card">
        <h3>{{data.title}}</h3>
        <div class="rate-container">
            <span>(24)</span>
            <star-rating v-bind:read-only=true v-bind:rating="3" v-bind:rtl="true" 
            v-bind:show-rating="false" v-bind:star-size="15" active-color="#FDE172" inactive-color="#E4E4E4" class="rate" />   
        </div>
        <p v-if="data.stoke" class="stoke">
            متبقي {{data.stoke}} فقط
        </p>
        <div class="flag" v-if="data.limitPeriod">
        <p>لفترة محدودة</p>
            
        </div>
        <div class="image-container">
            <img :src="data.image" alt="perfume image"/>
        </div>
        <div class="perfume-card-footer">
            <div>
                <img :src="cartIcon"  alt="cart icon" />
                <img :src="heartIcon" alt="heart icon" />              
            </div>
            <p class="price">{{data.price}} <sub>SAR</sub></p>
        </div>
    </div>
</template>
<script>
import StarRating from 'vue-star-rating'

import perfumeSrc from "../assets/images/Mask Group 5.png"

import cartIcon from "../assets/icons/Group 117.svg"
import heartIcon from "../assets/icons/Group 115.svg"

export default{
    name:"PerfumeCard",
    components:{
        StarRating,
    },
    data(){
        return{
           srcImage: perfumeSrc,
           cartIcon,heartIcon
        }
    },
    props:{data:Object}
}

</script>

<style scoped>
.Perfume-card{  
    border-right:#575757;
    position: relative;
    
}


.Perfume-card >h3 {
    text-align:right;
    font: normal normal 600 17px/21px Cairo;
    letter-spacing: 1.4px;
    color: #575757;
    opacity: 0.6;
    margin-right:1.5rem;
}
.rate{
    width:100px;
    display: inline-block;
}
.Perfume-card span{
   /*  margin-right:0.5rem; */
    font: normal normal 600 18px/22px Cairo;
    letter-spacing: 1.26px;
    color: #E4E4E4;
    opacity: 1;
    display: inline-block;
}
.image-container{
    position:relative;
    height:150px;
    margin-top:5rem;
    width:100%;
    display: flex;
    justify-content: center;
    justify-items: center;
}
.image-container >img:hover{
    transform: scale(1.2,1.2);
}
.Perfume-card img{  
    height:100%
}
.rate-container {
  float:right;
  display:block;
  position:relative;
  margin-right: 1rem;
}
.perfume-card-footer{
     position:relative;
    /* top:78.5px; */
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-right:1rem;
    margin-left:0.5rem
   /*  margin-top: 1rem; */
}
.perfume-card-footer img{
    margin-right:0.5rem;
    width:35px;
    height:35px
}
.perfume-card-footer img:hover{
    transform: scale(1.2,1.2);
}
.price {
    color:#849CAA;
    font: normal normal 600 19px/27px Cairo;
    letter-spacing: 0px;
    color: #849CAA;
    opacity: 1;
    margin-bottom: 0;
}
.flag {
    width: 105px;
    height: 0;
    border-bottom: 14px solid #F50000;
    border-top: 14px solid #F50000;
    border-left: 14px solid transparent;
    float: right;
    font-size: 17px;
    font-weight: 700;
    margin-top:1rem;
    position: absolute;
    top:40px;
    right:20px
}
.flag >p {
   position:relative;
   top:-12px;
   color:white;
   font: normal normal 600 14px/22px Cairo;
    letter-spacing: 0.54px;
    color: #FFFFFF;
    opacity: 1;
}
.stoke {
    position:absolute;
    top:60px;
    right:20px;
    width:100%;
   
    text-align: right;
   /*  margin-right:3rem; */
    font: normal normal 700 15px/22px Cairo;
    letter-spacing: 0.54px;
    color: #F50000;
    opacity: 1;
    margin-bottom: 0;
}
@media (max-width:588px){
    /* .Perfume-card >h3{
    font-size: 1rem;
    } */
} 
@media (max-width:572px){
    .Perfume-card{
    border-right: none;
}
}

@media (max-width:376px){
    /* .image-container{
        height:100px;
        margin-bottom:2rem
    } */
   /*  .Perfume-card>h3{
        font-size: 0.9rem;
        margin-right:00.5rem
    } */
    
   /*  .Perfume-card span {
        margin-right:0.5rem
    }
    .price{
        margin-bottom: 0.5rem;
    }
    .perfume-card-footer  {
        flex-direction: column-reverse;
    }
    .image-container{
        margin-top: 6rem;
    } */
}

    
</style>
