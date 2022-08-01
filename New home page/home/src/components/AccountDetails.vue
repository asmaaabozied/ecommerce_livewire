<template>
    <div class="acc-detail-title">
        <div>
            <font-awesome-icon icon="fas fa-angle-double-right" />
            <h4>{{t('account-setting.list.account-details')}}</h4>
        </div>
                    
    </div>
    <div class="row">
        <a class="col-12 col-lg-12 col-sm-12 edit-tag"  @click="toggleForm">{{t('account-details.edit')}}</a>
        <div class="col-md-12 col-lg-12">
            <div class="acc-detail-mid">
                <div class="address-container col-12">
                    
                    <ul>
                        <li style="display: flex;"><!--  الاسم الأول	&nbsp;  	&nbsp;	&nbsp; فاتن -->
                            <span> {{t('register.first-name')}}</span> <p>فاتن</p>
                        </li>
                        <li> <!-- الاسم الثاني 	&nbsp;	&nbsp;	&nbsp; مجدي -->
                            <span> {{t('register.last-name')}}</span> <p>مجدي</p>
                        </li>
                        <li> <!-- اسم العرض 	&nbsp; 	&nbsp;	&nbsp; العرض المتكامل -->
                            <span> {{t('account-details.offer-name')}}</span> <p>العرض المتكامل</p>
                        </li>
                        <li> <!-- البريد الالكرتوني    	&nbsp;	&nbsp;	&nbsp;kdji@gmail.com -->
                            <span> {{t('register.email')}}</span> <p>kdji@gmail.com</p>
                        </li>
            
                    </ul>
                </div>
            </div>
        </div>
        
        <div class="col-md-12 col-lg-12  account-form-arabic">
            <div class="acc-detail-mid col-12">                  
                <div class="acc-details-form col-12">
                    <div class="details-form-title">
                        <p>{{t('account-details.edit-info')}}</p> <!-- <i class="fas fa-edit"></i> -->
                    </div>
                    <form action="">
                        <label for="address">{{t('register.first-name')}}
                            <input type="text" id="address" >
                        </label>
                        <label for="city">{{t('register.last-name')}}
                            <input type="text" id="city" >
                        </label>
                        <label for="region">{{t('account-details.offer-name')}}
                            <input type="text" id="region">
                        </label>
                        <button class="col-12 done-btn">{{t('account-details.done')}}</button>
                    </form>
                </div>
            </div>
        </div>   
    </div>
</template>
<script>
import { defineComponent } from 'vue'
import { useI18n } from 'vue-i18n'
export default defineComponent({
    
    name:"AccountDetails",
    methods:{
        toggleForm(){
        let form = document.querySelector('.account-form-arabic')
        form.classList.toggle("account-form-arabic-max-height")
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