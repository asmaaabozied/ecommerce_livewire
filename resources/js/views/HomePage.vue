<template>
  <div>
    <SecondNav/>
  <HomeBanner/>
  <RecommendedPerfumes/>
  <SecondBanner/>
  <LatestOffers/>
   <SecondBanner/>
   <PerfumesCollection/>
  <MerchantPackages/>
  
  <CustomerReviews/>
  <NewBrands/>
  </div>


</template>
<script>
import SecondBanner from '../components/SecondBanner.vue'

import LatestOffers from '../components/LatestOffers.vue'
import PerfumesCollection from '../components/PerfumesCollection.vue'
import SecondNav from "../components/SecondNavbar.vue"
import RecommendedPerfumes from '../components/RecommendedPerfumes.vue'
import CustomerReviews from '../components/CustomerReviews.vue'
import MerchantPackages from '../components/MerchantPackages.vue'
import NewBrands from '../components/NewBrands.vue'
import HomeBanner from '../components/HomeBanner.vue'


export default{
    name:"HomePage",
    components:{
        SecondBanner,
        PerfumesCollection,
        SecondNav,
        RecommendedPerfumes,
        LatestOffers,
        NewBrands,
        CustomerReviews,
        MerchantPackages,
        HomeBanner,
    }
}
</script>