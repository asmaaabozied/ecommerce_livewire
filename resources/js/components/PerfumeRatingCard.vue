<template>
<div class="col-xl-3 col-md-6 col-12 product-incfhny mt-4 perfume-card">
    <div class="product-grid2 transmitv">
        <div class="product-image2">
            <a href="#">
                <img class="pic-2 img-fluid" src="https://images.ulta.com/is/image/Ulta/2588402" alt="not show">
            </a>
            <a class="link-wishlist" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Wishlist"><img class="img-fluid" :src="heartSrc" ></a>
        </div>
        <div class="product-content product-content-with-rating">
        
            <h3 class="title"><a href="#">Women Maroon Top </a></h3>
            <star-rating v-bind:read-only=true v-bind:rating="3" v-bind:rtl="true" 
                v-bind:show-rating="false" v-bind:star-size="18" active-color="#FDE172" inactive-color="#E4E4E4" class="rate" />
            <div>
                <a class="link-compare" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to cart"><i class="fa fa-shopping-cart"></i></a>
                <span class="price">SAR 975.00</span>
            </div>
        </div>
    </div>
</div>
</template>
<script>
import heartSrc from "../assets/images/heart12.png"

import StarRating from 'vue-star-rating'
export default{
    name:'PerfumeRatingCard',
    components:{
        StarRating

    },
    data(){
        return{
            heartSrc
        }
    }
}
</script>
