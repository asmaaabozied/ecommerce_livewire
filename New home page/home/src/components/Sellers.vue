<template>

  <div class="acc-detail-title">
    <div>
        <font-awesome-icon icon="fas fa-angle-double-right" />
        <h4>{{t('account-setting.list.sellers')}}</h4>
    </div>                      


</div>

<div class="cards-container">
  <div v-for="item in data" :key="item">
    <Card :data="src"/>
  </div>
  

</div>
</template>
<script>
import src from "../assets/images/images.png"
import axios from 'axios';
import { defineComponent } from 'vue'
import { useI18n } from 'vue-i18n'
import Card from "./SellerCard.vue"
export default defineComponent({
    name:"SellersComponent",
    components:{
      Card

    },
    data(){
      return{
        src,
        data:[1,1]
      }
    },
    mounted(){
      axios.get('/api/ListOfSellers').then(res=>console.log(res))
    
        /* axios.get('/api/ListOfSellers').then(res=>this.data=res.data) */
    },
    setup() {
    const { t } = useI18n({
      inheritLocale: true,
      useScope: 'local'
    })
    return { t }
  }
});
</script>