<!-- eslint-disable vue/no-parsing-error -->
<template>
<div style="padding-right:1rem,padding-left:1rem">
	<div class="bannerhny-content1">
		<div class="single_slider  d-flex align-items-center slider_bg_1">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-xl-5 col-lg-5 col-md-6 col-12">
						<div class="slider_text">
							<h3 data-aos="fade-right" data-aos-duration="800" class="wow" data-wow-duration="1s" data-wow-delay=".3s" >{{t('merchant.title')}}</h3>
							<div class="space"></div>
							<p data-aos="fade-right" data-aos-delay="700" data-aos-duration="800" class="wow" data-wow-duration="1s" data-wow-delay=".5s">
										{{t('merchant.first-service')}}
<!--                                         <div class="line1"></div>
-->                                        &nbsp;&nbsp;
								<u>{{t('merchant.register')}}</u>

							</p>
							
							<br>
							<br>
							<div class="play" data-aos="fade-right" data-aos-delay="1500" data-aos-duration="800">
								<a class="" href="index.html">
									<img :src="videoIcon" class="img-fluid" alt="" title="" style="" />
								</a>	
								<div class="box wow " data-wow-duration="1s" data-wow-delay=".5s" style="min-height:60px"><h4>{{t('merchant.demonstration-video')}}</h4></div>
							</div>
						</div>
					</div>
					<div class="col-xl-1 col-lg-1 col-md-1 col-12"></div>
					<div class="col-xl-6 col-lg-6 col-md-5 col-12">
					<img data-aos="fade-left" repeat :src="src0" class="img-fluid wow" data-wow-duration="1s" data-wow-delay=".4s" alt="" />				
					</div>				
					<div class="type1"></div>
				</div>
			</div>
		</div>
	</div>


<!-- first section -->
<section>
<div class="container">
	<div class="row align-items-center">
	<div class="col-xl-6 col-lg-6 col-md-5 col-12 first_img" style="">
		<animate-in-view >
			
			<img :src="src9" class="img-fluid wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".4s" alt="" />
		</animate-in-view>		
	</div>
		
		<div class="col-xl-1 col-lg-1 col-md-1 col-12"></div>
		<div class="col-xl-5 col-lg-5 col-md-6 col-12 first_content" style="">
			<div class="slider_text1">
					<h3 class="wow fadeInRight" data-wow-duration="1s" data-wow-delay=".3s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: fadeInRight;">{{t('merchant.Register-for-merchant-service')}}</h3>
					<div class="space"></div>
					<p class="wow fadeInRight" data-wow-duration="1s" data-wow-delay=".5s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: fadeInRight;">{{t('merchant.register-text')}}</p>
					<div class="type"></div>
			</div>
		</div>
	
		
	</div>
</div>
</section>
<!-- second section -->
<section class="third">
	<div class="container">
		<div class="row align-items-center">
		
		<div class="col-xl-5 col-lg-5 col-md-6 col-12">
				<div class="slider_text2">
						<h3 data-aos="fade-right" class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".3s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: fadeInLeft;">{{t('merchant.perfume-supply')}}</h3>
						<div class="space"></div>
						<p class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".5s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: fadeInLeft;">{{t('merchant.perfume-supply-text')}}</p>
						<div class="type"></div>
				</div>
			</div>
			<div class="col-xl-1 col-lg-1 col-md-1 col-12"></div>
			<div class="col-xl-6 col-lg-6 col-md-5 col-12">
			<img :src="src8" class="img-fluid wow fadeInRight" data-wow-duration="1s" data-wow-delay=".4s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.4s; animation-name: fadeInRight;" alt="" />
			
			</div>
		
			
		</div>
	</div>
</section>
<!-- third section -->
<section class="forth">
                <div class="container">
					<div class="row align-items-center">
						<div class="col-xl-6 col-lg-6 col-md-5 col-12 first_img">
								<img :src="src7" class="img-fluid wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".4s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.4s; animation-name: fadeInLeft;" alt="" />
							
							</div>
						
						<div class="col-xl-1 col-lg-1 col-md-1 col-12"></div>
						<div class="col-xl-5 col-lg-5 col-md-6 col-12 first_content">
							<div class="slider_text3">
									<h3 class="wow fadeInRight" data-wow-duration="1s" data-wow-delay=".3s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: fadeInRight;">{{t('merchant.inventory')}}</h3>
									<div class="space"></div>
									<p class="wow fadeInRight" data-wow-duration="1s" data-wow-delay=".5s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: fadeInRight;">{{t('merchant.inventory-text')}}</p>
									<div class="type"></div>
							</div>
						</div>
					
						
					</div>
				</div>
</section>
<!-- forth section -->
<section class="fifth">
                <div class="container">
					<div class="row align-items-center">
					<div class="col-xl-5 col-lg-5 col-md-6 col-12">
							<div class="slider_text4">
									<h3 class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".3s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: fadeInLeft;">{{t('merchant.cargo-management-system')}}</h3>
									<div class="space"></div>
									<p class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".5s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: fadeInLeft;">{{t('merchant.cargo-text')}}</p>
									<div class="type"></div>
							</div>
						</div>
						<div class="col-xl-1 col-lg-1 col-md-1 col-12"></div>
						<div class="col-xl-6 col-lg-6 col-md-5 col-12">
						<img :src="src6" class="img-fluid wow fadeInRight" data-wow-duration="1s" data-wow-delay=".4s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.4s; animation-name: fadeInRight;" alt="" />
						
						</div>
					</div>
				</div>
</section>
<!-- fifth section -->
<section class="sixth">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6 col-lg-6 col-md-5 col-12 first_img">
                <img :src="src5" class="img-fluid wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".4s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.4s; animation-name: fadeInLeft;" alt="" />
            </div>
            
            <div class="col-xl-1 col-lg-1 col-md-1 col-12"></div>
            <div class="col-xl-5 col-lg-5 col-md-6 col-12 first_content">
                <div class="slider_text5">
                        <h3 class="wow fadeInRight" data-wow-duration="1s" data-wow-delay=".3s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: fadeInRight;">{{t('merchant.Multiple-payment-systems')}}</h3>
                        <div class="space"></div>
                        <p class="wow fadeInRight" data-wow-duration="1s" data-wow-delay=".5s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: fadeInRight;">{{t('merchant.Multiple-payment-systems-text')}}</p>
                        <div class="type"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- sixth section -->
<section class="seventh">
                <div class="container">
					<div class="row align-items-center">
					
					<div class="col-xl-5 col-lg-5 col-md-6 col-12">
							<div class="slider_text6">
									<h3 class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".3s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: fadeInLeft;">{{t('merchant.Marketing')}}</h3>
									<div class="space"></div>
									<p class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".5s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: fadeInLeft;">{{t('merchant.Marketing-text')}}</p>
									<div class="type"></div>
							</div>
						</div>
						<div class="col-xl-1 col-lg-1 col-md-1 col-12"></div>
						<div class="col-xl-6 col-lg-6 col-md-5 col-12">
						<img :src="src4" class="img-fluid wow fadeInRight" data-wow-duration="1s" data-wow-delay=".4s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.4s; animation-name: fadeInRight;" alt="" />
						
						</div>
					
						
					</div>
				</div>
</section>
<!-- seventh section -->
<section class="eight">
    <div class="container">
        <div class="row align-items-center">
        <div class="col-xl-6 col-lg-6 col-md-5 col-12 first_img">
            <img :src="src3" class="img-fluid wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".4s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.4s; animation-name: fadeInLeft;" alt="" />
            
            </div>
            
            <div class="col-xl-1 col-lg-1 col-md-1 col-12"></div>
            <div class="col-xl-5 col-lg-5 col-md-6 col-12 first_content">
                <div class="slider_text7">
                        <h3 class="wow fadeInRight" data-wow-duration="1s" data-wow-delay=".3s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: fadeInRight;">{{t('merchant.Ongoing-training-and-support')}}</h3>
                        <div class="space"></div>
                        <p class="wow fadeInRight" data-wow-duration="1s" data-wow-delay=".5s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: fadeInRight;">{{t('merchant.Ongoing-training-and-support-text')}}</p>
                        <div class="type"></div>
                </div>
            </div>
        
            
        </div>
    </div>
</section>
<!-- eight section -->
<section class="nine">
    <div class="container">
        <div class="row align-items-center">
        <div class="col-xl-5 col-lg-5 col-md-6 col-12">
                <div class="slider_text8">
                        <h3 class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".3s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: fadeInLeft;">{{t('merchant.Advertising-and-design-management')}}</h3>
                        <div class="space"></div>
                        <p class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".5s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: fadeInLeft;">{{t('merchant.Advertising-and-design-management-text')}}</p>
                        <div class="type"></div>
                </div>
            </div>
            <div class="col-xl-1 col-lg-1 col-md-1 col-12"></div>
            <div class="col-xl-6 col-lg-6 col-md-5 col-12">
            <img :src="src2" class="img-fluid wow fadeInRight" data-wow-duration="1s" data-wow-delay=".4s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.4s; animation-name: fadeInRight;" alt="" />
            
            </div>
        
            
        </div>
    </div>
</section>
<!-- nine section -->
<section class="ten">
    <div class="container">
        <div class="row align-items-center">
        <div class="col-xl-6 col-lg-6 col-md-5 col-12 first_img">
            <img :src="src" class="img-fluid wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".4s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.4s; animation-name: fadeInLeft;" alt="" />
            
            </div>
            
            <div class="col-xl-1 col-lg-1 col-md-1 col-12"></div>
            <div class="col-xl-5 col-lg-5 col-md-6 col-12 first_content">
                <div class="slider_text9">
                        <h3 class="wow fadeInRight" data-wow-duration="1s" data-wow-delay=".3s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: fadeInRight;">{{t('merchant.perfume-design')}}</h3>
                        <div class="space"></div>
                        <p class="wow fadeInRight" data-wow-duration="1s" data-wow-delay=".5s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: fadeInRight;">{{t('merchant.perfume-design-text')}}</p>
                        <div class="type"></div>
                </div>
            </div>
        
            
        </div>
    </div>
</section>
<!-- ten section -->

<section data-aos="fade-up" class="form_register">
	<div class="wrapper">
		<div class="row">
			<article class="part card-details col-12" style="padding:2rem">
				<h1>
				{{t('merchant.merchant-registration')}}
				</h1>
				<h5><span><font-awesome-icon style="margin-right:0.5rem;margin-left:0.5rem" icon="fas fa-info-circle" /></span>{{t('merchant.merchant-registration-note')}}</h5>
				<div class="row">
					<div class="col-xl-7 col-lg-7 col-md-7 col-12">
						<form action="/action_page.php">			
							<div class="row">
							<div class="col-xl-6 col-lg-6 col-md-6 col-12">
								<input type="text" id="email" name="email" placeholder="email" spellcheck="false" data-ms-editor="true">
								<input type="text" id="fname" name="firstname" placeholder="name" spellcheck="false" data-ms-editor="true">
								<div class="telphone">
								<input type="tel" class="" placeholder="Mobile number">
								<select name="cars" id="cars">
									<option value="volvo">+966</option>
									<option value="saab">+965</option>
									<option value="opel">+967</option>
									<option value="audi">+964</option>
								</select>
								</div>
							</div>

							<div class="col-xl-6 col-lg-6 col-md-6 col-12">
							
								<input type="text" id="adr" name="address" placeholder="address" spellcheck="false" data-ms-editor="true">
								<input type="text" id="The_required_number" name="The_required_number" placeholder="The required number" spellcheck="false" data-ms-editor="true">            
								<input type="text" id="share_capital" name="share_capital" placeholder="share capital" spellcheck="false" data-ms-editor="true" data-toggle="tooltip" data-placement="top" title="Preference is determined by money">           
								<!-- <input type="submit" value="Submit" > -->
								<button class="btn">{{t('merchant.submit')}}</button>

							</div>
							
							</div>					
						</form>
					</div>
					<div class="col-xl-5 col-lg-5 col-md-5 col-12">
						<p>
						{{t('merchant.merchant-registration-text')}}
						</p>
					<!-- <div class="icon_links col-md-2 offset-md-2">
                        <ul class="icons mt-4">
                            <li><a class="" href="#"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li><a class="" href="#"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li><a class="" href="#"><i class="fas fa-envelope"></i></a>
                            </li>	
                            <li><a class="" href="#"><i class="fab fa-instagram"></i></a>
                            </li>							
                        </ul>
                    </div> -->
				</div>
				</div>
			</article>
		</div>
		</div>
</section>
</div>

</template>
<script>
import videoIcon from "../assets/images/Group 3586.png"
import src from "../assets/images/Group 2371.png"
import src2 from "../assets/images/Group 2319.png"
import src3 from "../assets/images/Group 2247.png"
import src4 from "../assets/images/Group 3576.png"
import src5 from "../assets/images/Group 2369.png"
import src6 from "../assets/images/Group 1900.png"
import src7 from "../assets/images/Group 1786.png"
import src8 from "../assets/images/Group 543.png"
import src9 from "../assets/images/Group 35871.png"
import src0 from "../assets/images/Group 453.png";

import AOS from "aos";
import { defineComponent } from 'vue';
import { useI18n } from 'vue-i18n';
export default defineComponent({
    name:"MerchantServices",
	data(){
		return{
			videoIcon,src0,src,src2,src3,src4,src5,src6,src7,src8,src9
		}
	},
    mounted(){
        AOS.init({once: true})
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
/* fadeInSlide{
	animation: fadeInSlide 1s ease forwards 0.3s;
	
}
 @keyframes fadeInSlide {
    from {
      opacity: 0;
      transform: translate3d(10%, 10%, 0);
    }
    to {
      opacity: 1;
      transform: translate3d(0, 0, 0);
    }
  } */
/* style="visibility: visible; 
animation-duration: 1s;
 animation-delay: 0.4s;
 animation-name: fadeInLeft;" */
</style>