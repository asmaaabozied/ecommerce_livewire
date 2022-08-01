<template>
<div class="container-xl">
    <p class="title">{{t('home.new-brands')}}</p>
    <div class="brands-container">
        <img v-for="item in brandLogos" :key="item" :src="item" class="brand-logo"/>
    </div>   
</div>  
</template>
<script>
/* import brandSrc from "@/assets/images/brand.jpg" */
import brandSrc2 from "../assets/images/brand2.jpg"
import brandSrc3 from "../assets/images/brand3.png"
import brandSrc4 from "../assets/images/brand4.jpg"
import brandSrc5 from "../assets/images/brand5.jpg"
import brandSrc6 from "../assets/images/brand6.jpg"

import { defineComponent } from 'vue'
import { useI18n } from 'vue-i18n'


const brandLogos =[brandSrc5 ,brandSrc2,brandSrc3,brandSrc4,brandSrc6]
export default defineComponent({
    name:"NewBrands",
    data(){
        return{
            brandLogos
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
<style scoped>
.brand-logo{
    width: 251px;
    height: 137px;
}
.title{
    text-align: left;
    font: normal normal 600 21px Cairo;
    letter-spacing: 1.61px;
    color: #575757;
    margin-bottom: 2rem;
}

</style>