<template>
<div style="position:relative;display:flex;height:890px">
    <img class="wave" :src="wave">
    <div class="custom-container">
		<div class="img">
			<img :src="bg">           
		</div>
		<div class="login-content">
        <form action="index.html" class="form-face login-form col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <h2 class="title">{{t('register.login')}}</h2>
            <div class="input-div one">
            <div class="i">
                <i><font-awesome-icon icon="fa-solid fa-user" /></i>
                </div>
                <div class="div">
                    <h5>{{t('register.userName')}}</h5>
                    <input type="text" class="my-input" @focus="addcl($event)" @blur="remcl($event)">
                </div>
            </div>
            <div class="input-div pass">
                <div class="i"> 
                    <i><font-awesome-icon icon="fa-solid fa-lock" /></i>
                </div>
                <div class="div">
                    <h5>{{t('register.password')}}</h5>
                    <input type="password" class="my-input" @focus="addcl" @blur="remcl">
                </div>
            </div>
            <a href="#">{{t('register.login-text')}}<span @click="showSignup">{{t('register.sign-up')}}</span> </a>
            <!-- <input type="submit" class="btn form-btn" value={{t('register.login')}}>
            < -->
            <button class="btn form-btn">{{t('register.login')}}</button>
        </form>
        <form action="index.html" class="form-face signUp-form col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <h2 class="title">{{t('register.sign-up')}}</h2>
        <div class="input-div one">
            <div class="i">
                <i><font-awesome-icon icon="fa-solid fa-at" /></i>
            </div>
            <div class="div">
                <h5>{{t('register.email')}}</h5>
                <input type="email" class="my-input" @focus="addcl" @blur="remcl">
            </div>
        </div>
        <div class="input-div one">
            <div class="i">
                <i><font-awesome-icon icon="fa-solid fa-user" /></i>
            </div>
            <div class="div">
                <h5>{{t('register.first-name')}}</h5>
                <input type="text" class="my-input" @focus="addcl" @blur="remcl">
            </div>
        </div>
        <div class="input-div one">
            <div class="i">
                <i> <font-awesome-icon icon="fa-solid fa-user" /></i>
            </div>
            <div class="div">
                <h5>{{t('register.last-name')}}</h5>
                <input type="text" class="my-input" @focus="addcl" @blur="remcl">
            </div>
        </div>
            
        <div class="input-div one">
            <div class="i">
                <i><font-awesome-icon icon="fa-solid fa-store" /></i>
            </div>
            <div class="div">
                <h5>{{t('register.store-name')}}</h5>
                <input type="text" class="my-input" @focus="addcl" @blur="remcl">
            </div>
        </div>
        <div class="input-div one">
            <div class="i">
                <i><font-awesome-icon icon="fa-solid fa-link" /></i>
            </div>
            <div class="div">
                <h5>{{t('register.store-link')}}</h5>
                <input type="text" class="my-input" @focus="addcl" @blur="remcl">
            </div>
        </div>
        <div class="input-div one">
            <div class="i">
                <i><font-awesome-icon icon="fa-solid fa-phone" /></i>
            </div>
            <div class="div">
                <h5>{{t('register.phone')}}</h5>
                <input type="text" class="my-input" @focus="addcl" @blur="remcl">
            </div>
        </div>
        <a href="#">{{t('register.sign-up-text')}}<span @click="showLogin">{{t('register.login')}}</span></a>
        <!-- <input type="submit"  value="Sign up"> -->
        <button class="btn form-btn">{{t('register.sign-up')}}</button>
        </form>
        </div>
		
    </div>

</div>
    

</template>

<script>
import { defineComponent } from 'vue'
import { useI18n } from 'vue-i18n'

import wave from "../assets/images/wave2.png"
import bg from "../assets/images/bg.svg"
export default defineComponent({
    name:"RegisterPage",
    data(){
        return{
            wave,
            bg
        }
    },
    methods:{       
         showSignup(){	
            const login = document.querySelector(".login-form")
            const signup = document.querySelector(".signUp-form")
            const formContainer = document.querySelector(".login-content")	
			formContainer.classList.toggle("is-flipped");
            login.style.display="none"
            signup.style.display="block"
		},
      showLogin(){
        const login = document.querySelector(".login-form")
            const signup = document.querySelector(".signUp-form")
            const formContainer = document.querySelector(".login-content")	
			formContainer.classList.toggle("is-flipped");
            signup.style.display="none"
            login.style.display="block"
		},
         addcl(event){
            let parent = event.target.parentElement.parentElement
            console.log(parent)
            parent.classList.add("focus");
        },

         remcl(event){
            let parent = event.target.parentElement.parentElement
            if(this.value == ""){
                parent.classList.remove("focus");
            }
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
footer{
    display:none
}
.img{
    position:absolute;
    left:15vw;
    top:12vh
}

</style>