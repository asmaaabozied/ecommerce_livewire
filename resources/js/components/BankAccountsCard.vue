<template>
<div class="bank-account">
    <div class="bank-account-info">
        <div class="bank-logo">
            <img :src="data.image_path" class="img-fluid" alt="">
        </div>
        <div class="bank-details">
            <ul>
                <li>Account Name: {{data.name_ar}} </li>
                <li>Account Number: {{data.number}}</li>
                <li>IBAN: {{data.iban}}</li>
            </ul>
        </div>
    </div>
    <div class="bank-form">
        <h3>{{t('bank-accounts.upload-receipt')}}</h3>
        <form style="text-align:left"> 
            <p v-if="errorMsg" style="color:red">{{errorMsg}}</p>                                
                               
            <div class="form-group row">
                <label class=" col-12 col-form-label">{{t('register.email')}}</label>
                <div class="col-12">
                    <input type="email" name="email" @focus="deleteErrorMsg" v-model="userEmail">
                </div>
            </div>
            <div class="form-group row">
                <label class=" col-12 col-form-label">{{t('register.first-name')}}</label>
                <div class="col-12">
                    <input type="name" name="name" @focus="deleteErrorMsg" v-model="firstName">
                </div>
            </div>
            
            <div class="form-group row">
                <label class="col-12 col-form-label">{{t('bank-accounts.please-upload-receipt')}}</label>
                <div class="col-12">
                    <input type="file" name="name" ref="file">
                </div>
            </div>
            
            <div class="form-group row">
            <div class="col-12 text-center">
                <button @click="(event)=>test(event)" class="btn">{{t('merchant.register')}}</button>
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
import axios from "axios"

export default defineComponent({
    name:"BankAccountCard",
    props:["data"],
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
  },
  methods:{
        deleteErrorMsg(){
            this.errorMsg=""
        },
        test(event){
            
            let receipt = this.$refs.file.files[0]

            event.preventDefault()

            if(!this.userEmail){
            this.errorMsg="Please Enter Email"
            }
            else if(!this.validate(this.userEmail)){
                this.errorMsg="Please, check email format"
            }
            else if(!this.firstName){
                this.errorMsg = "Please, Enter your first name"
            }
            else if (!receipt){
                this.errorMsg = "Please ,upload receipt"              
            }
            else{
                // need to check file upload or not
                this.errorMsg = "" 

                const data={
                    first_name:this.firstName,
                    email:this.userEmail,
                    file: receipt
                }
                axios.post('/api/AddBankAccount',data).then(res=>console.log(res))               
            }
        },
        validate(email){
            return email.match(
            /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
        );
        }
  }
});
</script>