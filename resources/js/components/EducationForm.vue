<template>
   <section class="form_register edu">
        <div class="wrapper">
            <div class="container">
                <article class="part card-details">
                    <h1>
                    {{t('manufacturing.perfume-industry')}}
                    </h1>
                    <h5><span><i><font-awesome-icon style="margin-right:0.5rem;margin-left:0.5rem" icon="fas fa-info-circle" /></i></span>{{t('manufacturing.limited-number')}}</h5>
                    <p v-if="errorMsg" style="color:red">{{errorMsg}}</p>
                    <div class="row">
                        <div class="col-12">
                            <form class="col-12">
                
                                <div class="row">
                                <div class="col-lg-4 col-md-4 col-12">
                                    <input type="email" id="email" name="email" v-model="userEmail" @focus="deleteErrorMsg" placeholder="email" spellcheck="false" data-ms-editor="true">
                                    <input type="text" id="fname" name="firstname" v-model="firstName" @focus="deleteErrorMsg" placeholder="name" spellcheck="false" data-ms-editor="true">
                                    
                                </div>

                                <div class="col-lg-4 col-md-4 col-12">
                                
                                    <input type="text" id="adr" name="address" v-model="city" @focus="deleteErrorMsg" placeholder="city" spellcheck="false" data-ms-editor="true">
                                    <input type="text" id="The_required_number" v-model="requiredNumber" @focus="deleteErrorMsg" name="The_required_number" placeholder="The required number" spellcheck="false" data-ms-editor="true">            

                                </div>
                                <div class="col-lg-4 col-md-4 col-12">
                                <div class="telphone">
                                    <input type="text" @focus="deleteErrorMsg" v-model="phone" class="" placeholder="Mobile number">
                                    <select name="code" id="cars" v-model="countryCode">
                                        <option value="+966">+966</option>
                                        <option value="+965">+965</option>
                                        <option value="+967">+967</option>
                                        <option value="+964">+964</option>
                                    </select>
                                    </div>
                                    <input type="text" id="share_capital" name="share_capital" v-model="shareCapital" @focus="deleteErrorMsg" placeholder="share capital" spellcheck="false" data-ms-editor="true" data-toggle="tooltip" data-placement="top" title="Preference is determined by money">           
                                    <button class="btn" @click="submitForm($event)">{{t('merchant.submit')}}</button>
                                </div>
                                
                                </div>
                            
                            </form>
                        </div>
                
                    </div>
                </article>
            </div>
            </div>
    </section>
</template>
<script>
import { defineComponent } from 'vue'
import { useI18n } from 'vue-i18n'
import axios from "axios"
export default defineComponent({
    name:"EducationForm",
    data(){
        return{
            errorMsg:'',countryCode:'+966'
        }
    },
    methods:{
        deleteErrorMsg(){
            this.errorMsg=""
        },
        submitForm(e){
        e.preventDefault()
        console.log(this.countryCode)

        if(!this.userEmail){
            this.errorMsg ='Please, enter your email'
        }
         else if(!this.validate(this.userEmail)){
            this.errorMsg="Please, check email format"
        }
        else if(!this.firstName){
            this.errorMsg = 'Please, enter your first name'
        }
        else if(!this.city){
            this.errorMsg = 'Please, enter your city'
        }
        else if (!this.requiredNumber){
            this.errorMsg = 'Please, enter required number'
        }
        else if(!this.isNumber(this.requiredNumber)){
            this.errorMsg ='please, enter numbers only'
            console.log(this.isNumber(this.requiredNumber))
        }
        else if(!this.phone){
            this.errorMsg = "Please, enter your phone"
        }
        else if(!this.isNumber(this.phone)){
            this.errorMsg ='Please, enter numbers only'
        }
        else if(!this.shareCapital){
            this.errorMsg = "Please, enter share capital"
        }      
        else {
            let data = {
                email:this.userEmail,
                address:this.city,
                name:this.firstName,
                required_number:this.requiredNumber,
                share_capital:this.shareCapital,
                phone: this.countryCode + this.phone
            }
            this.errorMsg =""
            axios.post('/api/create_educationform',data).then(res=>console.log(res))
        }
        
        },
        isNumber(value){
        return /^\d+$/.test(value);
        },
        validate(email){
            return email.match(
            /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
        );
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