<template>
<div class="bannerhny-content cartban">

            <!--/banner-slider-->
            <div class=" cart-header">
                <h1>{{t('Cart.cart')}}</h1>  
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#c49346" class="bi bi-bag" viewBox="0 0 16 16">
                <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z"/>
                </svg>
            </div>
        <div class="content-baner-inf">
        <div class="container shop_cart">
            <div class="row custom-right">
                <div class="shopping-cart col-lg-8">

                    <div class="column-labels col-md-12 product-table">
                        <div class=" cart-child row">
                            <label class="product-image col-md-3">{{t('Cart.product')}}</label>
                            <label class="product-details col-md-2">{{t('Cart.product-name')}}</label>
                            <label class="product-price col-md-2">{{t('Cart.price')}}</label>
                            <label class="product-line-price col-md-2">{{t('Cart.total')}}</label>
                            <label class="product-quantity right col-md-2">{{t('Cart.quantity')}}</label>
                            </div>
                    </div>
                    <Card/>
                    <Card/>
                    <Card/>
                    
                            
                    </div>
                   
                    <div class="col-lg-4">
                        <div class="row">
                            <div class="cart_shop col-lg-12">
                                <div class="totals">
                                    <div class="card1 col-lg-12 mt-3">
                                        <div class="card-body">
                                            <form>
                                                <div class="form-group">
                                                    <div class="sign"><label>{{t('Cart.promo-text')}}</label></div> 
                                                    <div class="input-group">
                                                        <input type="text" class="form-control coupon" name="" > 
                                                        <span class="input-group-append">
                                                        <button class="btn btn-primary btn-apply coupon">{{t('Cart.apply')}}</button> 
                                                        </span> 
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        
                               
                                    
                                        <div class="totals-item">
                                           <!--  <h4>Cart Total</h4> -->
                                            <label>{{t('Cart.shopping-cost')}}</label>
                                            <div class="totals-value" id="cart-subtotal">$71.97</div>
                                        </div>
                                        <div class="totals-item">
                                           <!--  <h4>Cart Total</h4> -->
                                            <label>{{t('Cart.discount')}}</label>
                                            <div class="totals-value" id="cart-subtotal">-$20</div>
                                        </div>
                                        <div class="totals-item">
                                           <!--  <h4>Cart Total</h4> -->
                                            <label>{{t('Cart.tax')}}</label>
                                            <div class="totals-value" id="cart-subtotal">5%</div>
                                        </div>
                                        <div class="totals-item">
                                           <!--  <h4>Cart Total</h4> -->
                                            <label class="estimated-total">{{t('Cart.estimated-total')}}</label>
                                            <div class="totals-value" id="cart-subtotal">$100.9</div>
                                        </div>

                                        <!--  -->
                                        <div class="totals-item semi-head">
                                            <h5>{{t('Cart.shipping-options')}}</h5>
                                            <label><u>{{t('Cart.calculations')}}</u></label>
                                        </div>
                                        
                                        <div class="totals-item totals-item-total">
                                            <label>{{t('Cart.total')}}</label>
                                            <div class="totals-value" id="cart-total">90.57</div>
                                        </div>
                                    </div>
                                <!-- AHoh -->
                            </div>
                            <button class="checkout col-12 col-lg-12">{{t('Cart.checkout')}}</button>
                        </div>
                    </div>

                </div>
                
        </div>
	</div>
        </div>
</div>
    
</template>
<script>
import { defineComponent } from 'vue'
import { useI18n } from 'vue-i18n'
import Card from '../components/CheckoutCard.vue'

export default defineComponent({
    name:"CartPage",
    components:{
        Card
    },
    setup() {
    const { t } = useI18n({
      inheritLocale: true,
      useScope: 'local'
    })
    return { t }
  }
})
</script>
<style>
</style>