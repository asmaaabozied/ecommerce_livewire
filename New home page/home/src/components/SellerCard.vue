<template>
<!-- <router-link to=""> -->
    <div class="seller-card">
    <div class="seller-card-top">
        <img :src="data"/>      
    </div>
    <div class="seller-info">
        <div>
            <p>{{t('sellers.unfollow')}}</p>
            <p>فهد آل راجح</p>
        </div>
        <p>المملكة العربية السعودية</p>
    </div>
</div>

<!-- </router-link> -->

</template>
<script>
import { defineComponent } from 'vue'
import { useI18n } from 'vue-i18n'
export default defineComponent({
    name:"SellerCard",
    props:['data'],
    setup() {
    const { t } = useI18n({
      inheritLocale: true,
      useScope: 'local'
    })
    return { t }
  }
});
</script>
<style scoped >
.seller-card-top{
    background: url('../assets/images/BG-card1.png');

}
</style>