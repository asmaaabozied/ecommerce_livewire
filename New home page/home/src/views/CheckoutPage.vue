<template>
<div class="bannerhny-content cartban">
              <!--/banner-slider-->
    <div class="content-baner-inf" style="margin-top:3rem">
      <div class="container">
            <div class="row testt">
              <div class=" col-lg-9 col-md-12">
                <div class="shopping-cart">
                  <div class="column-labels product-table">
                    <div class="cart-child row">
                          <label class="product-image col-md-3">{{t('Cart.product')}}</label>
                          <label class="product-details col-md-2">{{t('Cart.product-name')}}</label>
                          <label class="product-price col-md-2">{{t('Cart.price')}}</label>
                          <label class="product-line-price checkout-total col-md-2">{{t('Cart.total')}}</label>
                          <label class="product-quantity col-md-2">{{t('Cart.quantity')}}</label>

                      </div>
                  </div>
                    <!-- Start Looping -->
                    <div v-for="item, in perfumes" :key="item">
                        <Card :data="item"/>
                    </div>
                    <!-- Finish Looping -->
                </div>
                <CheckoutDetails/>
                <!-- Checkout Details -->
              </div>

              <div class="col-lg-3 col-md-12">
                <div class="row">
                    <div class="cart_shop col-lg-12">
                        <div class="totals">
                            <div class="totals-item">
                                <h4>{{t('checkout.cart-total')}}</h4>
                                <div style="height: auto;display :flex">
                                  <label>{{t('checkout.sub-total')}}</label>
                                <div class="totals-value" id="cart-subtotal">71.97</div>
                                </div>
        
                            </div>
                            <div class="totals-item">
                                <h5>{{t('Cart.shipping-options')}}</h5>
                                <label><u>{{t('Cart.calculations')}}</u></label>
                            </div>
                            
                            <div class="totals-item totals-item-total">
                                <label>{{t('Cart.total')}}</label>
                                <div class="totals-value" id="cart-total">90.57</div>
                            </div>
                        </div>
                            
                    </div>
                    <button class="checkout col-lg-12">{{t('Cart.checkout')}}</button>

                    <div class="card1 col-lg-12 mt-3">
                        <div class="card-body">
                            <form>
                                <div class="form-group"> <label>{{t('checkout.discount coupon')}}</label>
                                    <div class="input-group"> <input type="text" class="form-control coupon" name="" > <span class="input-group-append"> <button class="btn btn-primary btn-apply coupon">{{t('Cart.apply')}}</button> </span> </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

      </div>
                
    </div>
  </div>
</div>
</template>

<script>
import Card from "../components/CheckoutCard.vue"
import CheckoutDetails from "../components/CheckoutDetails.vue"
import { defineComponent } from 'vue'
import { useI18n } from 'vue-i18n'

const perfumes =[
    {
        name:"Office workshop",
        price:45.99,
        quantity:1,
        total:45.99
    },
    {
        name:"Office workshop",
        price:45.99,
        quantity:1,
        total:45.99
    }
]
export default defineComponent({
    name:"CheckoutPage",
    components:{
        Card,CheckoutDetails
    },
    data(){
        return{
            perfumes
        }
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
