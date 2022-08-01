<template>
<div class="product col-md-12 cart-child">
    <div class="row custom">
        
        <div class="product-image col-md-3 col-12 col-sm-12 ">
            <img src="https://c1.wallpaperflare.com/preview/127/63/589/perfume-fragrance-luxury-glass-thumbnail.jpg" alt="" title=""  />
        </div>
        <div class="hamada col-md-9">
            <div class="product-details col-md-3 col-12 col-sm-12">
            <div class="product-title">Office workshop</div>
        </div>
        <div class="product-price diff col-md-3 col-12 col-sm-12" ><span></span>12.99 SAR</div>
        
        <div class="col-5 none">
            </div>
        <div class="product-line-price diff col-md-3 col-12 col-sm-12" ><span></span>625.9,30</div>
        <div class="product-quantity diff col-md-3 col-12 col-sm-12">
            <div class="counter">
                <span class="down" onClick='decreaseCount(event, this)'>-</span>
                <input type="text" value="1">
                <span class="up"  onClick='increaseCount(event, this)'>+</span>
            </div>
        </div>
        </div>
        
        

    </div>
    <div class="product-removal col-md-1 col-1">
        <button class="remove-product">
            <font-awesome-icon icon="fa-solid fa-trash-alt" />
        </button>
    </div>
</div>
    
</template>
<script>
export default {
    name:"CheckoutCard",
    props:['data'],
    
}
</script>
<style>
</style>