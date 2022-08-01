<template>
    <div class="acc-detail-title">
        <div>
            <font-awesome-icon icon="fas fa-angle-double-right" />
            <h4>{{t('account-address.address')}}</h4>
        </div>                      
        <p>{{t('account-address.text')}}</p>
    </div>
    <div class="row ">
        <div class="col-12 add-tag ">
            <button  @click="addAddress"> 
            {{t('account-address.add')}}<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
            </svg></button>
        </div>
        <div class="address-container-real col-12">
            <ul>
                <li>
                    <div>
                        <p>{{t('account-address.text')}}</p>
                        <a class="col-2 col-lg-1 col-sm-1" data-index="1" @click="test($event)">{{t('account-address.edit')}}</a>
                    </div>
                    <div class="col-md-12 col-lg-12  edit-form edit-form-1">
                        <div class="acc-detail-mid">                  
                            <div class="acc-details-form">
                                <div class="details-form-title">
                                    <p>{{t('account-address.add-address')}}</p> <!-- <i class="fas fa-edit"></i> -->
                                </div>
                                <form action="">
                                    <label for="address">{{t('account-address.street-address')}}
                                        <input type="text" id="address" >
                                    </label>
                                    <label for="city">{{t('account-address.city')}}
                                        <input type="text" id="city" >
                                    </label>
                                    <label for="region">{{t('account-address.region')}}
                                        <input type="text" id="region">
                                    </label>
                                    <button class="col-12 done-btn">{{t('account-details.done')}}</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div>
                        <p>{{t('account-address.text')}}</p>
                        <a class="col-2 col-lg-1 col-sm-1" data-index="1" @click="test($event)">{{t('account-address.edit')}}</a>
                    </div>                    
                    <div class="col-md-12 col-lg-12  edit-form edit-form-2">
                        <div class="acc-detail-mid">                  
                            <div class="acc-details-form">
                                <div class="details-form-title">
                                    <p>{{t('account-address.add-address')}}</p> <!-- <i class="fas fa-edit"></i> -->
                                </div>
                                <form action="">
                                    <label for="address">{{t('account-address.street-address')}}
                                        <input type="text" id="address" >
                                    </label>
                                    <label for="city">{{t('account-address.city')}}
                                        <input type="text" id="city" >
                                    </label>
                                    <label for="region">{{t('account-address.region')}}
                                        <input type="text" id="region">
                                    </label>
                                    <button class="col-12 done-btn">{{t('account-details.done')}}</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div>
                        <p>{{t('account-address.text')}}</p>
                        <a class="col-2 col-lg-1 col-sm-1" data-index="1" @click="test($event)">{{t('account-address.edit')}}</a>
                    </div>                    
                    <div class="col-md-12 col-lg-12  edit-form edit-form-3">
                        <div class="acc-detail-mid">                  
                            <div class="acc-details-form">
                                <div class="details-form-title">
                                    <p>{{t('account-address.add-address')}}</p> <!-- <i class="fas fa-edit"></i> -->
                                </div>
                                <form action="">
                                    <label for="address">{{t('account-address.street-address')}}
                                        <input type="text" id="address" >
                                    </label>
                                    <label for="city">{{t('account-address.city')}}
                                        <input type="text" id="city" >
                                    </label>
                                    <label for="region">{{t('account-address.region')}}
                                        <input type="text" id="region">
                                    </label>
                                    <button class="col-12 done-btn">{{t('account-details.done')}}</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div>
                        <p>{{t('account-address.text')}}</p>
                        <a class="col-2 col-lg-1 col-sm-1" data-index="1" @click="test($event)">{{t('account-address.edit')}}</a>
                    </div>                    
                    <div class="col-md-12 col-lg-12  edit-form edit-form-4">
                        <div class="acc-detail-mid">                  
                            <div class="acc-details-form">
                                <div class="details-form-title">
                                    <p>{{t('account-address.add-address')}}</p> <!-- <i class="fas fa-edit"></i> -->
                                </div>
                                <form action="">
                                    <label for="address">{{t('account-address.street-address')}}
                                        <input type="text" id="address" >
                                    </label>
                                    <label for="city">{{t('account-address.city')}}
                                        <input type="text" id="city" >
                                    </label>
                                    <label for="region">{{t('account-address.region')}}
                                        <input type="text" id="region">
                                    </label>
                                    <button class="col-12 done-btn">{{t('account-details.done')}}</button>
                                    
                                </form>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div>
                        <p>{{t('account-address.text')}}</p>
                        <a class="col-2 col-lg-1 col-sm-1" data-index="1" @click="test($event)">{{t('account-address.edit')}}</a>
                    </div>                    
                    <div class="col-md-12 col-lg-12  edit-form edit-form-5">
                        <div class="acc-detail-mid">                  
                            <div class="acc-details-form">
                                <div class="details-form-title">
                                    <p>{{t('account-address.add-address')}}</p> <!-- <i class="fas fa-edit"></i> -->
                                </div>
                                <form action="">
                                    <label for="address">{{t('account-address.street-address')}}
                                        <input type="text" id="address" >
                                    </label>
                                    <label for="city">{{t('account-address.city')}}
                                        <input type="text" id="city" >
                                    </label>
                                    <label for="region">{{t('account-address.region')}}
                                        <input type="text" id="region">
                                    </label>
                                    
                                    <button class="col-12 done-btn">{{t('account-details.done')}}</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
     <!-- Form -->
    <div class="col-12 col-sm-12 col-md-8 col-lg-8 add-form">
        <div class="acc-detail-mid">
            <div class="acc-details-form">
            <a class="col-12 add-tag close-tag"  @click="closeAddForm">X</a>

                <div class="details-form-title">
                    <p>{{t('account-address.add-address')}}</p> <!-- <i class="fas fa-edit"></i> -->
                </div>
                <form action="">
                    <label for="address">{{t('account-address.street-address')}}
                        <input type="text" id="address" >
                    </label>
                    <label for="city">{{t('account-address.city')}}
                        <input type="text" id="city" >
                    </label>
                    <label for="region">{{t('account-address.region')}}
                        <input type="text" id="region" >
                    </label>
                    <button class="col-12 done-btn">{{t('account-address.add')}}</button>
                </form>
            </div>
        </div>
    </div>
</template>
<script>
import { defineComponent } from 'vue'
import { useI18n } from 'vue-i18n'
export default defineComponent({
    name:"AccountAddress",
    methods:{
        addAddress(){
        document.querySelector('.add-form').style.maxHeight="550px"
        document.querySelector('.overlay-div').style.display="block"   
        },
        closeAddForm(){  
        document.querySelector('.add-form').style.maxHeight="0"
        document.querySelector('.overlay-div').style.display="none"
        },
        test(event){
        let index = event.target.dataset.index
        let form =document.querySelector(`.edit-form-${index}`)
        form.classList.toggle("form-max-height")     
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
<style>
</style>