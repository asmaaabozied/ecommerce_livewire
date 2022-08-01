<template>
<div>
    <div class="acc-detail-title">
        <div>
            <font-awesome-icon icon="fas fa-angle-double-right" />
            <h4>{{t('account-setting.list.tickets')}}</h4>
        </div>                 
    </div>

    <div class="column-labels product-table">
        <div class="cart-child row">
            <label class="product-image col-md-2">{{t('tickets.order-number')}}</label>
            <label class="product-details col-md-2">{{t('tickets.history')}}</label>
            <label class="product-price col-md-2">{{t('tickets.subject')}}</label>
            <label class="product-line-price checkout-total col-md-2">{{t('tickets.address')}}</label>
            <label class="product-quantity col-md-2">{{t('tickets.type')}}</label>
            <label class="product-quantity col-md-2"></label>

        </div>
    </div>
    <div class="product col-md-12 cart-child" v-for="item in tickets" :key="item.orderNumber">
        <div class="row custom" > 
            <div class="product-image product-image-notes col-md-2 col-12 col-sm-12 ">
                <span>{{t('tickets.order-number')}}</span>
                <p>{{item.orderNumber}}</p>
             </div>
            <div class="hamada hamada-notes col-md-10">
                <div class="product-details col-md-2 col-12 col-sm-12">
                <div class="product-title title-notes"><span>{{t('tickets.history')}}</span>{{item.history}}</div>
            </div>
            <div class="product-price price-notes diff-notes col-md-2 col-12 col-sm-12" ><span>{{t('tickets.subject')}}</span>{{item.subject}}</div>  
            <div class="col-5 none">
                </div>
            <div class="product-line-price diff-notes col-md-2 col-12 col-sm-12" ><span>{{t('tickets.address')}}</span>{{item.address}}</div>
            <div class="product-quantity diff-notes col-md-2 col-12 col-sm-12">
                <div class="counter counter-notes">
                    <span>{{t('tickets.type')}}</span><p>{{item.type}}</p>
                </div>
            </div>
            <button class="col-md-2 col-sm-6" @click="showDetails">عرض التفاصيل</button>
            </div>            
        </div>
    </div>
    <!-- Details Form -->
    <div class="col-12 col-sm-12 col-md-8 col-lg-8 note-details-form">
        <div class="acc-detail-mid">
            <div class="acc-details-form" style="overflow:scroll">
                <a class="col-12 add-tag close-tag"  @click="closeNoteForm">X</a>
                
                <div class="details-form-title">
                    <p>{{t('tickets.support-request')}}</p> <!-- <i class="fas fa-edit"></i> -->
                    <p>{{t('tickets.order-number')}}<span>20838</span></p>
                </div>
                <p class="note-details-history">20-05-2020</p>
                <form action="">
                    <label for="address">{{t('tickets.request-type')}}
                        <input type="text" id="address" >
                    </label>
                    <label for="city">{{t('tickets.request-address')}}
                        <input type="text" id="city" >
                    </label>
                    <label for="region">{{t('tickets.request-subject')}}
<!--                         <input type="text-area" id="region" >
 -->                <textarea v-model="text" class="note-textarea"></textarea>    
                    </label>
                    <button class="col-12 done-btn">{{t('footer.send')}}</button>
                </form>
            </div>
        </div>
    </div>
</div>

</template>
<script >
import { defineComponent } from 'vue'
import { useI18n } from 'vue-i18n'

const tickets = [
    {
        orderNumber:20838,
        history:"20-05-2020",
        subject:"شكوى",
        address:"محتوى النص",
        type:"مالي"
    },
    {
        orderNumber:20838,
        history:"20-05-2020",
        subject:"شكوى",
        address:"محتوي النص",
        type:"مالي"
    }
]
export default defineComponent({
    name:"AccountNotes",
     methods:{
        showDetails(){
        document.querySelector('.note-details-form').style.maxHeight="550px"
        document.querySelector('.overlay-div').style.display="block"
        console.log("show details") 
        },
        closeNoteForm(){  
        document.querySelector('.note-details-form').style.maxHeight="0"
        document.querySelector('.overlay-div').style.display="none"
        },
     },
    data(){
        return{
            tickets
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