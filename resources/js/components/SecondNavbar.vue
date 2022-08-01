<template>
<div class="container-xxl second-navbar">
    <ul>
        <li v-for="item in sections" :key="item" :class="{ selected : item.isSelected, notselected : !item.isSelected }" @click="addStyle(item.key,item.isSelected)" ref="el">
            <router-link :to="item.route +'/en'">{{t(`footer.${item.title}`)}}</router-link>
        </li>
    </ul>
</div>

    
</template>
<script>
import { defineComponent } from 'vue'
import { useI18n } from 'vue-i18n'
export default defineComponent({
    name:"SecondNav",
    data(){
        return{
            sections:[
                {key:"0",title:"home", isSelected:false,route:""},
                {key:"1",title:"merchant-services", isSelected:false,route:"merchant-services"},
                {key:"2",title:"perfume-ratings", isSelected:false,route:"perfume-ratings"},
                {key:"3",title:"perfume-manufacturing", isSelected:false,route:"perfume-manufacturing"}]
        }
    },
    methods:{
        addStyle(key){          
            this.sections.forEach(element => {
                element.isSelected = false                
            });
            this.toggleSelection(key)
        },
         toggleSelection(key) {
            const stepsItem = this.sections.find(item => item.key === key)
            if (stepsItem) {
                stepsItem.isSelected = !stepsItem.isSelected
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
});
</script>

<style scoped>
.second-navbar{
    margin-top:1rem;
    position:relative
}
ul{
    list-style:none;
    display:flex;
    flex-direction: row;
    justify-content: center;
    padding:0;
    width:100%
}
ul>li>a{
    color:inherit;
    text-decoration: none;
    width:100%;
    font-size: 1erm;
}
ul>li{
    margin-right:0.5rem;
    margin-left: 0.5rem;
    width:140px;
    padding-top:1rem

}
.notselected{
    border: none;
    color: #575757
}
ul>li>a:hover{
    color:#C49346
}
ul>li>a:active{
    color:#C49346;
}
.selected{
    border-top: 2px solid #C49346;
    color:#C49346;
    
}
@media (max-width:386px){
    ul>li>a{
        font-size: 0.6rem
    }
}


</style>