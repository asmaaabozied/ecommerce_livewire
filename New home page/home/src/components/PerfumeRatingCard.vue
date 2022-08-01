<template>
<div class="product-incfhny mt-4 perfume-card" style="height:100%,maxHeight:100%">
    <div class="product-grid2 transmitv">
        <div class="product-image2" style="width:100%;height:100%">
            <a href="#">
                <img class="pic-2 img-fluid" src="https://images.ulta.com/is/image/Ulta/2588402" alt="not show">
            </a>
                <font-awesome-icon icon="fas fa-heart" :style="{color:changeColor}" @click="clickIcon" />
                <!-- <img class="img-fluid" :src="heartSrc" > -->
              
        </div>
        <div class="product-content product-content-with-rating" style="display:flex;flex-direction:column;align-items: center">
        
            <h3 class="title"><a href="#">Women Maroon Top </a></h3>
            <star-rating v-bind:read-only=true v-bind:rating="3" v-bind:rtl="true" 
                v-bind:show-rating="false" v-bind:star-size="18" active-color="#FDE172" inactive-color="#E4E4E4" class="rate" />
            <div>
                <font-awesome-icon icon="fas fa-shopping-cart" style="color:#c49346" @click="clickIcon" />
                <span class="price">SAR 975.00</span>
            </div>
        </div>
    </div>
</div>
</template>
<script>
import heartSrc from "../assets/images/heart12.png"
import StarRating from 'vue-star-rating'

let flag =false
/* let changeColor ='black' */
export default{
    name:'PerfumeRatingCard',
    components:{
        StarRating

    },
    computed(){

    },
   /*  */
    data(){
        return{
            heartSrc,flag,
            changeColor:'#e4e4e4'
        }
    },
    methods:{
        clickIcon(){
            if(this.changeColor ==='#e4e4e4'){
                this.changeColor = 'red'
            }
            else{
                this.changeColor = '#e4e4e4'
            }
            console.log(this.changeColor)
        }
    }
}
</script>
