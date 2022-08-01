<template>
<div class="acc-detail-title">
    <div>
        <font-awesome-icon icon="fas fa-angle-double-right" />
        <h4>{{t('order-details.order-details')}}</h4>
    </div>                 
</div>
<div >
<div class="attach-title">
    <p>{{t('order-details.attach-receipt')}}</p>
    <img :src="attach"/>
</div>
<div class="attach-send">
    <p>{{t('order-details.attach-text')}}</p>
    <button class="col-md-2 col-sm-6" @click="showDetails">{{t('order-details.attach-receipt')}}</button>
</div>
<hr class="break"/>
<!-- ORDER DETAILS -->
<div class="order-details">
    <p>{{t('order-details.order-details')}}</p>
    <div style="border:1px solid #F5F5F5;">
    <div class="column-labels product-table">
        <div class="cart-child row">
            <label class="product-image col-md-2">{{t('Cart.product')}}</label>
            <label class="product-details col-md-2">{{t('order-details.total')}}</label>
            <label class="product-price col-md-2">{{t('checkout.sub-total')}}</label>
            <label class="product-line-price checkout-total col-md-2">{{t('order-details.payment-method')}}</label>
            <label class="product-quantity col-md-2">{{t('order-details.total')}}</label>

        </div>
    </div>
    <div class=" col-md-12 cart-child order-details-product" v-for="item in tickets" :key="item.orderNumber">
        <div class="row custom" > 
            <div class="product-image product-image-notes col-md-2 col-12 col-sm-12 order-details">
                <span>{{t('Cart.product')}}</span>
                <p>{{item.orderNumber}}</p>
             </div>
            <div class="hamada hamada-notes col-md-10">
                <div class="product-details col-md-2 col-12 col-sm-12">
                    <div class="product-title title-notes"><span>{{t('order-details.total')}}</span>
                        {{item.history}}
                    </div>
                </div>
            <div class="product-price price-notes diff-notes col-md-2 col-12 col-sm-12" ><span>{{t('checkout.sub-total')}}</span>{{item.subject}}</div>  
            <div class="product-line-price diff-notes order-details-line-price col-md-2 col-12 col-sm-12" ><span>{{t('order-details.payment-method')}}</span>{{item.address}}</div>
            <div class="product-quantity diff-notes col-md-2 col-12 col-sm-12">
                <div class="counter counter-notes order-details-counter" style="display:flex;flex-direction:column">
                    <span>{{t('order-details.total')}}</span><p>{{item.type}}</p>
                    <p class="tax-text">{{t('order-details.tax-text')}}</p>
                </div>
            </div>
            <div class="col-md-2"></div>
            </div>            
        </div>
    </div>

    </div>

</div>
<!-- FINISH ORDER DETAILS -->
<hr class="break"/>
<!-- PAYMENT SUMMERY -->
<div class="order-details">
    <p>{{t('order-details.payment-summary')}}</p>
    <div style="border:1px solid #F5F5F5;">
    <div class="column-labels product-table">
        <div class="cart-child row">
            <label class="product-image col-md-2">{{t('order-details.batch')}}</label>
            <label class="product-details col-md-2">{{t('order-details.batch-id')}}</label>
            <label class="product-price col-md-2">{{t('checkout.status')}}</label>
            <label class="product-line-price checkout-total col-md-2">{{t('order-details.cash')}}</label>

        </div>
    </div>
    <div class=" col-md-12 cart-child order-details-product" v-for="item in batches" :key="item.orderNumber">
        <div class="row custom" > 
            <div class="product-image product-image-notes col-md-2 col-12 col-sm-12 order-details" >
                <span>{{t('order-details.batch')}}</span>
                <p>{{item.orderNumber}}</p>
             </div>
            <div class="hamada hamada-notes col-md-6">
                <div class="product-details col-md-3 col-12 col-sm-12">
                    <div  class="product-title title-notes"><span>{{t('order-details.batch-id')}}</span>
                        {{item.history}}
                    </div>
                </div>
            <div class="product-price price-notes diff-notes col-md-4 col-12 col-sm-12" ><span>{{t('checkout.status')}}</span>{{item.subject}}</div>  
            <div class="product-line-price diff-notes order-details-line-price col-md-3 col-12 col-sm-12" style="text-align:center" ><span>{{t('order-details.cash')}}</span>{{item.address}}</div>
           
            </div>            
        </div>
    </div>

    </div>

</div>
<!-- FINISH PAYMENT SUMMERY -->
<hr class="break"/>
<div class="order-details-bill">
    <!-- Extra fields -->
    <p>{{t('order-details.bill')}}</p>
    <div>
        <div>
            <p>{{t('order-details.billing-access-address')}}</p>
            <p>{{t('order-details.billing-text')}}</p>
        </div>
        <div>
            <p>{{t('order-details.shipping-address')}}</p>
            <p>{{t('order-details.shipping-text')}}</p>
        </div>
    </div>
</div>

</div>




</template>
<script>
import { defineComponent } from 'vue'
import { useI18n } from 'vue-i18n'
import attach from "../assets/images/Group 13.png";
const tickets = [
    {
        orderNumber:"ورد طائفي",
        history:"188.60 SR",
        subject:"188.60 SR",
        address:"حوالة مصرفية مباشرة",
        type:"188.60 SR"
    },
    {
        orderNumber:"ورد طائفي",
        history:"188.60 SR",
        subject:"188.60 SR",
        address:"حوالة مصرفية مباشرة",
        type:"188.60 SR"
    }
]
const batches = [
    {
        orderNumber:"الدفعة الأولي",
        history:"18928-1",
        subject:"Awaiting Receipt Upload",
        address:"مُكتمل",
        type:"4,034.18 SR"
    },
    {
        orderNumber:"الدفعة الأولي",
        history:"18928-1",
        subject:"Awaiting Receipt Upload",
        address:"مُكتمل",
        type:"4,034.18 SR"
    }
]
export default defineComponent({
    name:"OrderDetails",
    data(){
        return{
            attach,tickets,batches
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