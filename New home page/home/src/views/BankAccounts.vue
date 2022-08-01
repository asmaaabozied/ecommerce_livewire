<template>
    <section class="bank-accounts">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3>{{t('bank-accounts.bank-accounts')}}</h3>
            </div>
        </div>
        <div class="bank-account-section">
            <div v-for="item in accounts" :key="item">
            <BankAccountsCard/>

            </div>
            
            <!-- <div class="bank-account">
                <div class="bank-account-info">
                    <div class="bank-logo">
                        <img :src="argon_src" class="img-fluid" alt="">
                    </div>
                    <div class="bank-details">
                        <ul>
                            <li>Account Name: TEstt test </li>
                            <li>Account Number: 0215315345645</li>
                            <li>IBAN: ASq2r1421021322525151</li>
                        </ul>
                    </div>
                </div>
                <div class="bank-form">
                    <h3>{{t('bank-accounts.upload-receipt')}}</h3>
                    <form method="POST" action="" style="text-align:left">                                
                        <div class="form-group row">
                            <label class=" col-12 col-form-label">{{t('register.email')}}</label>
                            <div class="col-12">
                                <input type="email" name="email" placeholder="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class=" col-12 col-form-label">{{t('register.first-name')}}</label>
                            <div class="col-12">
                                <input type="name" name="name" placeholder="">
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label class="col-12 col-form-label">{{t('bank-accounts.please-upload-receipt')}}</label>
                            <div class="col-12">
                                <input type="file" name="name" placeholder="">
                            </div>
                        </div>
                        
                    
                        <div class="form-group row">
                        <div class="col-12 text-center">
                            <button style=" color:white" class="btn">{{t('merchant.register')}}</button>
                        </div>
                        
                        </div>                            
                    </form>
                </div>
            </div>


            <div class="bank-account">
                <div class="bank-account-info">
                    <div class="bank-logo">
                        <img :src="argon_src" class="img-fluid" alt="">
                    </div>
                    <div class="bank-details">
                        <ul>
                            <li>Account Name: TEstt test </li>
                            <li>Account Number: 0215315345645</li>
                            <li>IBAN: ASq2r1421021322525151</li>
                        </ul>
                    </div>
                </div>
                <div class="bank-form">

                <h3>{{t('bank-accounts.upload-receipt')}}</h3>
                    <form method="POST" action="" style="text-align:left">
                                                             
                        <div class="form-group row">
                            <label class=" col-12 col-form-label">{{t('register.email')}}</label>
                            <div class="col-12">
                                <input type="email" name="email" placeholder="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class=" col-12 col-form-label">{{t('register.first-name')}}</label>
                            <div class="col-12">
                                <input type="name" name="name" placeholder="">
                            </div>
                        </div>
                       
                        <div class="form-group row">
                            <label class="col-12 col-form-label">{{t('bank-accounts.please-upload-receipt')}}</label>
                            <div class="col-12">
                                <input type="file" name="name" placeholder="">
                            </div>
                        </div>
                        
                    
                        <div class="form-group row">
                        <div class="col-12 text-center">
                            <button style="color:white" class="btn">{{t('merchant.register')}}</button>
                        </div>
                        </div>  
                    </form>
                </div>
            </div> -->
        </div>
            
    
    
    </div>
        
    </section>
</template>
<script>
import argon_src from "../assets/images/blue.png"
import { defineComponent } from 'vue'
import { useI18n } from 'vue-i18n'
import BankAccountsCard from "@/components/BankAccountsCard.vue";
export default defineComponent({
    name:"BankAccounts",
    components:{
        BankAccountsCard,
        
    },
    data(){
        return{
            argon_src,accounts:[1,1]

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