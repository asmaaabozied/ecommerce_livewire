<template>
<div>
   <!--  <PerfumeRatingCard/> -->
    <!-- <div class=" newsletter col-lg-4 col-md-4 col-sm-3 top-search">
            <input name="test" type="text"  placeholder="" class="col-md-11 col-sm-11" > 
            <label for="test" class="col-2 col-md-1 col-sm-1" ><font-awesome-icon icon="fas fa-search" style="color:#E4E4E4;transform:rotate(90deg)"/></label>          
        </div> -->
    <div class="acc-detail-title">
    <div>
        <font-awesome-icon icon="fas fa-angle-double-right" />
        <h4>{{t('account-setting.list.sellers')}}</h4>
    </div>                      
</div>

</div>
<div class="container-seller-profile-top">
    <div class="seller-profile-top">
       <img :src="src"/>
    </div>
    <div class="seller-contact">
        <div>
            <font-awesome-icon icon="fas fa-share-nodes"  />
            <img :src="chat"/>
        </div>
        <div>
            <p>المملكة العربية السعودية</p>
            <font-awesome-icon icon="fas fa-map-marker-alt" style="width:15px;height:15px" />
        </div>
        
    </div>
</div>
<div class="seller-profile-bottom" style="margin-bottom:2rem">
    <div>
        <p>منتجات</p>
        <p>مراجعات</p>
    </div>
    <div class="test">
        <PerfumeRatingCard/>
    </div>

    </div>
</template>
<script>
import { defineComponent } from 'vue'
import { useI18n } from 'vue-i18n'
import src from "../assets/images/images.png"
import chat from "../assets/icons/comment.svg"
/* import PerfumeRatingCard from './components/PerfumeRatingCard.vue' */
import PerfumeRatingCard from './PerfumeRatingCard.vue'

export default defineComponent({
    name:"SellerDetails",
    components:{
        PerfumeRatingCard

    },
    data(){
        return{
            src,chat
        }
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
<style scoped>
.seller-profile-top{
    background-image: url('../assets/images/BG-card1.png');
    background-repeat: no-repeat;
    background-size:cover;
    position:relative;
}
.test{
    margin-bottom: 2rem;
    width:212px;
}
.test img{
    
   /*  height:100px */

}
</style>