<template>
   <footer>
    <div class="container-xxl semi">
        <!-- First -->
        <div class="child  col-lg-3 col-md-3 col-sm-4 col-12" >
             <div>
                <p>{{t('footer.payment-method')}}</p>
                <div class="images">
                    <img :src="imageSources[0]"/>
                    <img :src="imageSources[1]"/>
                    <img :src="imageSources[2]"/>
                    <img :src="imageSources[3]"/>
                </div>
            </div>
            <div>
                <p>{{t('contact')}}</p>
                <div class="images">
                    <img :src="iconSources[0]"/>
                    <img :src="iconSources[1]"/>
                    <img :src="iconSources[2]"/>
                    <img :src="iconSources[3]"/>
                </div>
            </div>
           
        </div>
        <!-- Second -->
        <div class="child  col-lg-2 col-md-2 col-sm-4 col-6">
             <ul>
                <li v-for="item in catagories" :key="item.id">
                {{item.name_ar}}
                </li>
             </ul>
        </div>
        <!-- Third -->
        <div class="child  col-lg-2 col-md-2 col-sm-4 col-6">
            <ul class="pages">
                <router-link to="/en"><li>{{t('footer.home')}}</li></router-link>
                <router-link to="/merchant-services/en"><li>{{t('footer.merchant-services')}}</li></router-link>
                <router-link to="/perfume-ratings/en"><li>{{t('footer.perfume-ratings')}}</li></router-link>
                <router-link to="/perfume-manufacturing/en"><li>{{t('footer.perfume-manufacturing')}}</li></router-link>
               
            </ul>

        </div>
        <!-- Fourth -->
        <div class="child  col-lg-5 col-md-5 col-sm-12 col-12">
            <img :src="this.$i18n.locale === 'en'?logoEn:logoAr " class="logo"/>
            <div>
                <p>{{t('footer.newsletter')}}</p>
                <p>{{t('footer.newsletter-text')}}</p>
                <p v-if="errorMsg !== ''" style="color:red">{{errorMsg}}</p>

                <div class=" newsletter">
                <label for="test" class="col-2" @click="test">{{t('footer.send')}}</label>
                <input @focus="deleteErrorMsg" required v-model="userEmail" name="test" type="text"  :placeholder="$t('register.email')" class="col-10" >              
                </div>
            </div>
        </div>
       
    </div>
    <p class="copy-right">&copy;{{t('footer.copy')}}</p>

   </footer>
</template>
<script>
import src1  from "../assets/images/Visa-2.png";
import src2 from "../assets/images/Discover-2.png";
import src3 from "../assets/images/Master-Card-2.png";
import src4 from "../assets/images/Amazon-2.png";

import face from "../assets/icons/Group 1110.svg";
import twitter from "../assets/icons/Group 1111.svg";
import youtube from "../assets/icons/Group 1112.svg";
import gmail from "../assets/icons/Group 1113.svg";



import logoAr from "../assets/images/Mask Group 6@2x.png"
import logoEn from "../assets/images/eng logo07.png"
import { defineComponent } from 'vue'
import { useI18n } from 'vue-i18n'
import axios from "axios";



export default defineComponent({
    
    name: 'FooterComponent',
    data(){
        return{
            imageSources:[src1,src2,src3,src4],
            iconSources:[face,twitter,youtube,gmail],
            catagories:[],
            pages:["الرئيسية","المتجر","تصنيفات العطور","باقات العطور"],
            logoAr,
            logoEn,
            errorMsg:"" 
        }
    },mounted(){
        axios.get('/api/ListOfCategories').then(res=>this.catagories= res.data.data)
        console.log(this.$i18n.locale)
    },
    methods:{
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
@media screen and (max-width:770px) {
    .semi{
       padding-top:0 !important

       }
    .child:nth-of-type(4){
        order: 1;
        justify-content: center;
        justify-items: center;
        align-items: center;
    }
    .child:nth-of-type(4)>div >p:first-of-type {
        display:none
    }
    .child:nth-of-type(4) > div {
        margin-top:1rem;
        margin-bottom:2rem
    }
    .logo{
        width: 200px !important;
        height: 70px !important;
    }
    .child:nth-of-type(1){
        order:2
    }
     .child:nth-of-type(2){
        order:3
    }
     .child:nth-of-type(3){
        order:4
    }
    
}
@media screen and (max-width:567px){
       .semi {
        align-content: center;
        align-items: center;
        justify-content: center;
        justify-items: center;

       }
    .child{
        margin-bottom :3rem;   
        align-items: center !important;
    }
    .child:nth-of-type(1){
        order:4;
    }
    .child:nth-of-type(1) p {
        text-align: center;
    }
     .child:nth-of-type(2){
        order:2
    }
     .child:nth-of-type(3){
        order:3
    }
     ul{
        padding:0;
        width:100%
    }
    ul li {
    align-items: center;
    text-align: center !important;
    }
    
}
footer {
    position:relative;
   /*  bottom: 0; */
    width:100%;
    background-color: #849CAA;
    min-height:512px;
    height:auto;
    padding-bottom:1rem;
    padding-top:1rem
    }
.semi{

    min-height:400px;
    height:inherit;
    padding:0;
    display:flex;
    flex-wrap: wrap;
    padding-top:100px;
    flex-direction:row-reverse
}

.child {
    color:white;
    height:inherit;
    display: flex;
    flex-direction: column;
    justify-items: right;
    align-items: flex-start;  
    font-family: 'Changa', sans-serif;
}
.child p {
    text-align: left;
    font: normal normal 300 18px/27px DIN Next LT W23;
    font-family: 'Changa', sans-serif;
    margin-top:1rem
}
.images >img{
    margin-right:0.5rem  
}
.images >img {
    width: 50px;
    height: 35px;
    margin-bottom: 0.5rem;
}
.images {
    display:flex;
    flex-wrap: wrap;
   justify-content: flex-end;
}

.child:nth-of-type(1) >div{
    flex:1   
}
.child:nth-of-type(1)>div:nth-of-type(2) img{
    width:30px;
    height: 33px;
}
.child:nth-of-type(1)>div:nth-of-type(2)>div {
    float:right; 
}
ul{
    list-style:none ;
}
ul li {
    text-align: left;
    margin-bottom: 2rem;
}
.child:nth-of-type(4){
    padding-left:1rem
}
.child:nth-of-type(4)>img{
    width: 286px;
    height: 111px;
}
.newsletter {
    display: flex;
    border: 1px solid #FFFFFF;
    opacity: 0.4;
    width:100%;
    height: 40px;
    flex-direction: row-reverse;
}
.newsletter>input {
    border-radius: 0;
    outline: none;
    box-shadow: none;
    border:none;
    height:100%;
    background:none;
    font-size:1.2rem;
    color:#fff !important;
    opacity: 1;
    padding: 1rem;
}

.newsletter>input:focus{
    outline: none;
    box-shadow: none;
    color:white;
    opacity: 1;
}
.newsletter>input::placeholder {
    text-align: left;
    font: normal normal 600  Cairo;
    letter-spacing: 0px;
    color: #FFFFFF;
    opacity: 0.4;
  
    font-family: 'Changa', sans-serif;
}
.newsletter >label {
    /* background: #fff; */
    height:100%;
    height:30px;
    /* padding:0.6rem; */
    padding-top:0.6rem;
    padding-left:0.6rem;

    text-align: left;
    font: normal normal 600 17px/20px Cairo;
    letter-spacing: 0px;
    color: #FFFFFF;
    opacity: 1;
    font-family: 'Changa', sans-serif;
}
.copy-right{
    font: normal normal  ;
    letter-spacing: 0px;
    color: #FFFFFF;
    opacity: 0.56;
    font-family: 'Changa', sans-serif;
}
.active{
    text-decoration: underline;
    padding-bottom:0.5rem
}
.pages >a {
    text-decoration:none !important;
    color:white;
    
}
.pages a li:first-of-type{
   /*  text-decoration: underline; */
    text-underline-offset: 0.5rem;
}
 nav li.router-link-exact-active{
    color:orange
 }


</style>