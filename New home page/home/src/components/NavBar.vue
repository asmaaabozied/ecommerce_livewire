<template>
    <div class="container--xxl navbar" >
    <div class="icons col-lg- col-sm-3 col-md-4">
       <!--  <img v-for=" item in icons" :src="item" :key="item"/> -->
        <img :src="langIcon" @click="toggleLang" />
        <img :src="cartIcon"/>
        <router-link to="/register"><img :src="userIcon" @click="test"/></router-link> 
        <img  @click="toggle" :src="searchIcon" class="search-icon" />
        <p ></p>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-6 logo"> <img :src="logo" /></div>
    <!-- <div class="col-lg-1 col-md-0 increased-div" ></div> -->
    <div class=" newsletter col-lg-4 col-md-4 col-sm-3 top-search">
        <input name="test" type="text"  placeholder="" class="col-md-11 col-sm-11" > 
        <label for="test" class="col-2 col-md-1 col-sm-1" ><img :src="searchIcon"/></label>          
    </div>
    <div class="newsletter col-12 showedPart" >
        <input name="test" type="text"  placeholder="بحث" class="col-md-11 col-sm-11 col-11" > 
        <label for="test" class="col-1 col-md-1 col-sm-1" ><img :src="searchIcon"/></label>          
    </div>
    <div class="home">
       <!--  <select v-model="$i18n.locale">
    <option v-for="(locale, i) in locales" :key="`locale-${i}`" :value="locale">
      {{ locale }}
    </option>
  </select> -->
  <!-- <p>{{ $t('main.welcome', {company: 'Lokalise'}) }}</p>
  <p>{{ $tc('main.new_message', 10) }}</p>
  <p>{{ $d(new Date(), 'short') }}</p>
  <p>{{ $n(100, 'currency') }}</p> -->
</div>

</div>
   
</template>

<script>
import userIcon from "../assets/icons/user.svg"
import langIcon from "../assets/icons/Layer_x0020_1.svg"
import cartIcon from "../assets/icons/Group 87.svg"
import logo from "../assets/images/Mask Group 1.png"
import searchIcon from "../assets/icons/iconfinder_-_Magnifier-Search-Zoom-_3844467.svg"

export default{
    name:"NavBar",
    data(){
        return{
            logo,
            searchIcon,
            isShow:false,
            langIcon,cartIcon,userIcon,
            locales: ["ar", "en"]
        }
    },
    computed:{
       /*  lang(){
            return this.$t('search')

        } */
        
    },
    methods:{
        test(){
            this.$router.push('./register')
        },
        toggle(){
            this.isShow = !this.isShow
            console.log("clicked")
            const item = document.querySelector('.showedPart')
            item.classList.toggle('active')
            console.log(item)
        },
        toggleLang(){
            const e = document.querySelector("html")
             const link = document.querySelector('#style')
            console.log(e)
            
            if(this.$i18n.locale === "en"){
                this.$i18n.locale = "ar"
                console.log(this.$i18n.locale)
                link.setAttribute('href','style_rtl.css')
               /*  e.setAttribute('dir','rtl') */
            }
            else{
                this.$i18n.locale = "en"
                console.log(this.$i18n.locale)
                link.setAttribute('href','index.css')
            }
            /* let lang = localStorage.getItem('lang')
            console.log(lang)
            if(lang === "en"){
                console.log(true)
                localStorage.setItem('lang','ar')
            }
            else{
                localStorage.setItem('lang','en')
            } */
        }
    },
    mounted(){
        localStorage.setItem('lang','en')
        const e = document.querySelector("html")
        const attr = e.getAttribute("dir")
        const link = document.querySelector('#style')
        console.log(link)

        if(!attr){
           e.setAttribute('dir','ltr');
            console.log("None")
        }
        else{
            console.log(e.dir,"not None")      
        }
        
    }  
}

</script>

<style  scoped >
.active{
    max-height:100% !important;
    border: 1px solid #E7E9ED !important;
    margin-top:1rem !important;
}

.navbar> .showedPart{
    max-height:0;
    overflow: hidden;
    border:none ;
    padding:0;
    margin:0;
    transition:max-height 0.02s ease-in-out
}

.navbar {
    display:flex;
    margin-right: 7rem;
    margin-left:7rem;
    justify-content: space-between;
    position:sticky;
    
 /*    position:fixed */
}
.newsletter {
    display: flex;
    border: 1px solid #E7E9ED;
    opacity: 0.4;
    justify-content: flex-end;   
    height: 30px;   
}
.newsletter>input {
    border-radius: 0;
    outline: none;
    box-shadow: none;
    border:none;
    height:100%;
    background:none;
    font-size:1.2rem;
    color:black !important;
    opacity: 1;
    padding: 1rem;
    /* width:100%; */
}

.newsletter>input:focus{
    outline: none;
    box-shadow: none;
    color:white;
    opacity: 1;
}
.newsletter>input::placeholder {
    text-align: right;
    font: normal normal 600  Cairo;
    letter-spacing: 0px;
    color: #CBCBCB;
    opacity: 0.4;
  
    font-family: 'Changa', sans-serif;
}
.newsletter >label {
    /* background: #fff; */
    height:100%;
   width:35px;
    /* padding:0.6rem; */
    /* padding-top:0.6rem; */
    padding-right:1rem;

    text-align: left;
    font: normal normal 600 17px/20px Cairo;
    letter-spacing: 0px;
    color: #E7E9ED;
    opacity: 1;
    font-family: 'Changa', sans-serif;
}
.newsletter>label>img{
    width:100%;
    height:100%
}
.icons{
    display:flex;
    justify-items: flex-start;
}
.icons >img {
    width: 19px;
height: 27px;
}
.icons >img:not(:last-of-type){
    margin-right:1rem
}
.logo >img {
    width:150px;
    height:55px;
    position:relative;
   
}
.search-icon{
    display:none
}
@media (min-width: 576px){
    .navbar > .showedPart{
        display: none !important;
        max-height:0!important;
        overflow: hidden;
        border:none ;
        padding:0;
        margin:0;
    }
    .navbar > .active{
      max-height:0% !important;
      border: none !important;
      margin-top:1rem !important
}
    .search-icon{
        display:none
    }
    
}
@media (max-width:576px) {
    .search-icon{
        display:block
    }
    .top-search{
        display:none
    }
    .increased-div{
        display: none;
    }
    .logo{
        width:120px
    }
    .icons >img {
    width: 15px;
    height: 18px;
    margin-right:0.6rem !important
    }
    
}
@media (max-width:992px){
    .navbar{
        margin-right: 1rem;
        margin-left: 1rem;
    }

}
@media (max-width:575px){
    
    .logo >img {
      /*   right:10px; */
        width:100px
    }

}


</style>