<template>
<section class="profile-main-section">
    <section class="account-details-overview">
        <div class="overlay-div"></div>
        <div class="container">     
            <div class="row">
                <div class="col-md-12 col-lg-3 ">
                    <AccountMenu :getCurrentComponent="getComponent"/>
                </div>

                <div class="col-md-12 col-lg-9">
                    <component :is="component"/>
                    <!-- <AccountAddress/> -->
                </div>
            </div>
        </div>
    </section>
</section>
</template>
<script>
import AccountMenu from '@/components/AccountMenu.vue'
import AccountAddress from '../components/AccountAddress.vue'
import AccountDetails from '@/components/AccountDetails.vue'
import AccountTickets from "@/components/AccountTickets.vue"
import AccountOrders from "../components/AccountOrders.vue"
import OrderDetails from "../components/OrderDetails.vue"
import AccountDownloads from '@/components/AccountDownloads.vue'
import DownloadDetails from '../components/DownloadDetails.vue'
import Sellers from "../components/Sellers.vue"
import SellerDetails from "../components/SellerDetails.vue"

export default{
    name:"AccountSetting",
    data(){
        return{
            component:AccountDetails
        }
    },
    components:{
        AccountMenu,
        AccountAddress,
        AccountDetails,
        AccountTickets,
        AccountOrders,
        OrderDetails,
        AccountDownloads,
        DownloadDetails,
        Sellers,
        SellerDetails
    },
    methods:{
        getComponent(currentComponent){
            console.log("passed")
            console.log(currentComponent)
            this.component= currentComponent
        }
    }
    
}

</script>
<style>
</style>