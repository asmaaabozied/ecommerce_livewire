<template>
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
            <p v-if="errorMsg" style="color:red">{{errorMsg}}</p>                                
            <div class="form-group row">
                <label class=" col-12 col-form-label">{{t('register.email')}}</label>
                <div class="col-12">
                    <input type="email" name="email" v-model="userEmail">
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
</template>
<script>
import { defineComponent } from 'vue'
import { useI18n } from 'vue-i18n'
import argon_src from "../assets/images/blue.png"
export default defineComponent({
    name:"BankAccountCard",
    data(){
        return{
            argon_src,errorMsg:''
        }

    },
     setup() {
    const { t } = useI18n({
      inheritLocale: true,
      useScope: 'local'
    })
    return { t }
  },/* methods:{
        deleteErrorMsg(){
            this.errorMsg=""
        },
        test(){
            if(!this.userEmail){
            this.errorMsg="please Enter Email"
            }
            else if(!this.validate(this.userEmail)){
                this.errorMsg="please, check email format"
            }
            else{
                // post email to backend
                console.log(this.userEmail)
            }
        },
        validate(email){
            return email.match(
            /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
        );
        }
  } */
});
</script>
<style>

</style>