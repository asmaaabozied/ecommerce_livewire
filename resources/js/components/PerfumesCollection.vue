<template>
<div class="container-xl">
    
    <div class="slider-container" id="newC-products">
          <div class="head">  
         <div > <button type="button" class="slider-arrow-next">></button> <p>مجموعات العطور</p></div>
           <button type="button" class="slider-arrow-prev" >&lt;</button>

        </div>
         <div class="perfumes-container">
             <div class="slides-container">
                <ul class="slider-list">
                    <li style="flex:1" class="slider-item" v-for="item in perfumes" :key="item">
                        <PerfumeCard :data="item"/>
                    </li>
                </ul>  
            </div>
         </div>
    </div>
</div>

</template>

<script>
import axios from 'axios';
import PerfumeCard from "./PerfumeCard.vue"
import {Slider} from "../assets/slider"




export default{
    name:"PerfumesCollection",
   components:{PerfumeCard },
    data(){
        return{
            perfumes:[1,1,1,1,1,1],
        }
        
    },mounted(){
        // i don't know his root
         axios.get('/api/get-most-wanted-perfumes')
        .then(res=> this.perfumes=[...res.data,...res.data,...res.data])
        new Slider("newC-products", [576, 992]).run()
    }
}



</script>
<style scoped >
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
@media (max-width:572px){
    .slider-item{
        border:none
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
/* @media (max-width:340px){
    .perfumes-container{
        border-right:none;
        border-left:0
    }
}
 */
</style>