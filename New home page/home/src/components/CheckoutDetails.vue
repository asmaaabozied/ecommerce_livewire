<template>
   <div class="checkout-form-section row">
        <h3>{{t('checkout.checkout-details')}}</h3>
        <div class="checkout-form">
        <form method="POST" action=""  class="partner-form col-12">
        
            <div class="form-group col-12 col-lg-6">
                <label for="first-name">{{t('register.first-name')}}</label>
                <input type="name" name="first-name" id="first-name" placeholder="">   
            </div>

            <div class="form-group col-12 col-lg-6">
                <label for="last-name">{{t('register.last-name')}}</label>
                <input type="name" name="last" id="last-name" placeholder="">   
            </div>

            <div class="form-group col-12 col-lg-6">                         
                <label  for="company">{{t('checkout.company-name')}}</label>   
                <input type="text" name="company" id="company" placeholder="">                          
            </div>

            <div class="form-group col-12 col-lg-6">                         
                <label  for="country">{{t('checkout.place')}}</label>   
                <select name="country" id="country">
                <option value="Saudi Arabia">{{t('checkout.saudi-arabia')}}</option>
                <option value="country1">country1</option>
                <option value="country2">country2</option>
                <option value="country3">country3</option>
                <option value="country4">country4</option>
                </select>                          
            </div>

            <div class="form-group col-12 col-lg-6"> 
            <label  for="shipping-address">{{t('checkout.shipping-address')}}</label> 
            <div class="address"> 
                <input type="radio" name="shipping-address" id="same-address" value="ship to your address">
                <label  for="same-address">{{t('checkout.ship-to-address')}}</label>  
            </div>   
            <div class="address">
                <input type="radio" name="shipping-address" id="store-address" value="ship to merchant's store ">
                <label  for="store-address">{{t('checkout.ship-to-store')}}</label>
            </div>
            </div>   
            
            <div class="form-group col-12 col-lg-6"> 
            <label  for="different-address">{{t('checkout.choose-different-address')}}</label>
            <div class="address">
                <input type="checkbox" name="change-address" id="change-address" value="ship to your address"> 
            <label  for="change-address">{{t('checkout.ship-to-different-address')}}</label> 
                
            </div>
            </div>

            <div class="form-group col-12 col-lg-6">
                <label for="street-address">{{t('account-address.street-address')}}</label>
                <input type="text" name="street-address" id="street-address" placeholder="">
                
            </div>

            <div class="form-group col-12 col-lg-6">
                
                <label for="apartment-no">{{t('checkout.apartment-number')}}</label>
                <input type="text" name="street-address" id="apartment-no" >   
            </div>
                                    
            <div class="form-group col-12 col-lg-6">
                <label for="city">{{t('account-address.city')}}</label>
                <input type="text" name="city" id="city" placeholder="">       
            </div>

            <div class="form-group col-12 col-lg-6">
                <label for="region">{{t('account-address.region')}}</label>
                <input type="text" name="region" id="region" placeholder="">       
            </div>

            <div class="form-group col-12 col-lg-6">                         
                <label  for="mobile">{{t('register.phone')}}</label>   
                <input type="text" name="mobile" id="mobile" placeholder="">                          
            </div>

            <div class="form-group col-12 col-lg-6">                         
                <label  for="email">{{t('register.email')}}</label>   
                <input type="email" name="email" id="email" placeholder="">                          
            </div>
         
            <div class="form-group col-12 col-lg-6"> 
            <label  for="shipping-address">{{t('footer.payment-method')}}</label> 
            <div class="payments"> 
                <input type="radio" name="payment-method" id="e-payments" value="E-payments">
                <label  for="e-payments">
                <div >
                    <h3>{{t('checkout.e-Payment')}}</h3>
                    <p>{{t('checkout.Gateways')}}</p>
                    <div class="pay-icons">
                        <img v-for="item in payMethods" :key="item" :src="item"/>
                    </div>
                </div>
                </label>  
            </div>   
            <div class="payments ">
                <input type="radio" name="payment-method" id="bank-transfer" value="ship to merchant's store ">
                <label  for="bank-transfer">{{t('checkout.bank-transfer')}}</label>
            </div>
            </div>  

            

            <div class="form-group col-12 col-lg-6">                         
                <label  for="other-notes">{{t('checkout.other-notes')}}</label>   
                <textarea  rows="5"   id="other-notes" placeholder="other notes">   </textarea>                       
            </div>
        
            <div class="form-group col-12 col-lg-6 ">
                <button class="checkout col-lg-12">{{t('Cart.checkout')}}</button>
          </div>
                
                
        </form>
        </div>
    </div>
</template>
<script>
import { defineComponent } from 'vue'
import { useI18n } from 'vue-i18n'
import amazon from "../assets/images/Amazon-2.png"
import master from "../assets/images/Master-Card-2.png"
import visa from "../assets/images/Visa-2.png"

const payMethods=[amazon,master,visa]

export default defineComponent({
    name:"CheckoutDetails",
    data(){
        return{
            payMethods
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