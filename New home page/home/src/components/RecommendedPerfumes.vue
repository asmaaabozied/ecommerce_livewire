<template>

    <div class="container-xl recommendation">
    <div class="slider-container" id="newR-products">
          <div class="head">  
         <div > <button type="button" class="slider-arrow-next">></button> <p>العطور الأكثر طلبا</p></div>
           <button type="button" class="slider-arrow-prev" >&lt;</button>

        </div>
         <div class="perfumes-container">
             <div class="slides-container">
                <ul class="slider-list">
                    <li class="slider-item" v-for="item in perfumes" :key="item">
                        <PerfumeCard :data="item"/>
                    </li>
                </ul>  
            </div>
         </div>
    </div>
</div> 

   
</template>

<script>
import PerfumeCard from "./PerfumeCard.vue"
import perfumeSrc from "../assets/images/Mask Group 5.png"
import perfumeSrc2 from "../assets/images/Mask Group 4.png"

import {Slider} from "../assets/slider"
import axios from "axios"
 

const perfumes =[
    {
        title:"دهن عود السيوفي",
        rateNo:3,
        image:perfumeSrc,
        price:975,
        id:645893
    },{
        title:"مسك غالي الأثمان",
        rateNo:4,
        image:perfumeSrc2,
        price:600,
        id:4535
    },{
        title:"مروكي ملكي أصقون",
        rateNo:5,
        image:perfumeSrc,
        price:500,
        id:98799,
      
    },
    {
        title:"مسك غالي الأثمان",
        rate:4,
        rateNumbers:24,
        image:perfumeSrc2,
        price:975,
        id:4535,
        limitPeriod:true
    },
     {
        title:"دهن عود السيوفي",
        rateNo:3,
        image:perfumeSrc,
        price:975,
        id:645893
    },{
        title:"مسك غالي الأثمان",
        rateNo:4,
        image:perfumeSrc2,
        price:600,
        id:4535
    },{
        title:"مروكي ملكي أصقون",
        rateNo:5,
        image:perfumeSrc,
        price:500,
        id:98799,
      
    },
    {
        title:"مسك غالي الأثمان",
        rate:4,
        rateNumbers:24,
        image:perfumeSrc2,
        price:975,
        id:4535,
        limitPeriod:true
    }
   
    ]

export default{
    name:"RecommendedPerfumes",
    components:{PerfumeCard},
    data(){
        return{
            perfumes,
        }    
    },mounted(){
        axios.get('/api/get-most-wanted-perfumes').then(res=>console.log(res))
        new Slider("newR-products", [576, 992]).run()  
    }
}

</script>
<style scoped >
.recommendation{
    position:relative;
    margin-top:5rem
}
/****************************************************************************************************/
/* Basic styles */

/* Slider styles */

.slider-container {
  padding: 10px 0;
  margin: auto;
  overflow: hidden;
  max-height: 100%;
  position :static
}

.slides-container {
  padding: 0 10px;
}

.slider-list {
  list-style-type: none;
  margin: 0;
  padding: 0;
  display: flex;
  overflow: hidden;
  transition: 1s;
  max-height: calc(100% - 80px);
/* min-height:568px */
}

.slider-item {
/*   background-color: #bdbdbd;
 */ /*  margin: 0 16px -4px 0; */
  min-height: 150px;
   /*   padding-right:2rem; */
    /*  padding-left:2rem */
}
.slider-item:not(:last-of-type){
    border-right: 2px solid #F0F0F0;

}

.slider-item img {
  width: 100%;
}

.slider-arrows {
  display: flex;
  justify-content: space-between;
  height: 30px;
  padding: 0 10px;
  margin-top: 10px;
}

.slider-arrow-prev,
.slider-arrow-next {
    position: relative;
    top:-5px;
   /*  top:-350px; */
  border: none;
  background-color: #ffffff;
   color:#575757;
    opacity: 0.3;
  font-size: 24px;
  border-radius: 4px;
  cursor: pointer;
}
@media (max-width:658px){
    .slider-item{
        padding-right: 1rem;
    }
    
}
@media (max-width:376px){
    .slider-item{
        padding-right: 0.5rem;
    }
    
}

/* ************************************************************************************************* */

.head {
    display:flex;
    justify-content: space-between;
    margin-bottom: 2rem;
    flex-direction: row-reverse;
}
.head>div{
    display:flex;
    width:50%;
    justify-content: flex-end;
    position:relative;
   /*  right:4vw; */
 
    font-size:24px
}

.head .arrow{
    width: 12px;
    height: 24px;
}
.head .arrow:hover{
    cursor: pointer;
}
.head >div>p{
    font: normal normal 500 19px/21px Cairo;
    letter-spacing: 1.61px;
    color: #575757;
    opacity: 0.6;
    width:auto;
    margin-left:1rem
}
.perfumes-container{
    /* box-shadow: 6px 6px 6px #0000000F; */
    padding-top:1.5rem;
    padding-bottom: 1.5rem;
    position:relative;
    /* border-right:6px solid #0000000F; */
    border:3px solid #0000000F

}

@media (max-width:572px){
    .slider-item{
        border:none
    }
}

</style>