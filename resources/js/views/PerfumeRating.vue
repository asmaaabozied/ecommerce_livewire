<template>
    <!-- <Filter/> -->
    <section class="container-xl" >
	<div class="top-header-content">
		<div class="bannerhny-content1">
			<div class="perfume_rating  d-flex align-items-center slider_bg_1">
				<div class="container">
					<div class="row">
						<!-- Left Part -->
						<div class="col-lg-3 col-md-4 perfumes_filter">
							<div class="row">
								<!-- For Mobile Design -->
								<div class="filter">
									<button class="btn btn-default" type="button" data-toggle="collapse" data-target="#mobile-filter" aria-expanded="false" aria-controls="mobile-filter">Filters<span class="fa fa-filter pl-1"></span></button>
								</div>
								<div id="mobile-filter" class="collapse">
								<div>
                                    <h6 class="p-1"><span><img class="img-fluid" :src="appsSrc"></span>Categories</h6>
                                    <form class="ml-md-2">
                                        <div class="form-inline p-sm-2 my-2">
                                            <input type="checkbox" name="type" id="boring">
                                            <label for="boring" class="pl-1 pt-sm-0 pt-1">ALL</label>
                                        </div>
                                        <div class="form-inline p-sm-2 my-2">
                                            <input type="checkbox" name="type" id="ugly">
                                            <label for="ugly" class="pl-1 pt-sm-0 pt-1">French perfumes</label>
                                        </div>
                                        <div class="form-inline p-md-2 p-sm-1">
                                            <input type="checkbox" name="type" id="notugly">
                                            <label for="notugly" class="pl-1 pt-sm-0 pt-1">niche perfumes</label>
                                        </div>
                                        <div class="form-inline p-sm-2 my-2">
                                            <input type="checkbox" name="type" id="boring">
                                            <label for="boring" class="pl-1 pt-sm-0 pt-1">oriental perfumes</label>
                                        </div>
                                        <div class="form-inline p-sm-2 my-2">
                                            <input type="checkbox" name="type" id="ugly">
                                            <label for="ugly" class="pl-1 pt-sm-0 pt-1">Perfume Sets</label>
                                        </div>
                                        
                                    </form>
                                </div>
								<div>
										<h6 class="p-1"><span><img class="img-fluid" :src="burger"></span>sort by</h6>
										<form class="ml-md-2">
											<div class="form-inline p-sm-2 my-2">
												<input type="checkbox" name="type" id="boring">
												<label for="boring" class="pl-1 pt-sm-0 pt-1">default order</label>
											</div>
											<div class="form-inline p-sm-2 my-2">
												<input type="checkbox" name="type" id="ugly">
												<label for="ugly" class="pl-1 pt-sm-0 pt-1">Sort by popularity</label>
											</div>
											<div class="form-inline p-md-2 p-sm-1">
												<input type="checkbox" name="type" id="notugly">
												<label for="notugly" class="pl-1 pt-sm-0 pt-1">Sort by rating</label>
											</div>
											<div class="form-inline p-sm-2 my-2">
												<input type="checkbox" name="type" id="boring">
												<label for="boring" class="pl-1 pt-sm-0 pt-1">Sort by latest</label>
											</div>
											<div class="form-inline p-sm-2 my-2">
												<input type="checkbox" name="type" id="ugly">
												<label for="ugly" class="pl-1 pt-sm-0 pt-1">Lowest price to the highest</label>
											</div>
											
										</form>
									</div>
								</div>
								<section id="sidebar">
									<div>
										<h6 class="p-1"><span><img class="img-fluid" :src="appsSrc"></span>Categories</h6>
										<form class="ml-md-2">
											<div class="form-inline p-sm-2 my-2">
												<input type="checkbox" name="type" id="boring">
												<label for="boring" class="pl-1 pt-sm-0 pt-1">ALL</label>
											</div>
											<div class="form-inline p-sm-2 my-2">
												<input type="checkbox" name="type" id="ugly">
												<label for="ugly" class="pl-1 pt-sm-0 pt-1">French perfumes</label>
											</div>
											<div class="form-inline p-md-2 p-sm-1">
												<input type="checkbox" name="type" id="notugly">
												<label for="notugly" class="pl-1 pt-sm-0 pt-1">niche perfumes</label>
											</div>
											<div class="form-inline p-sm-2 my-2">
												<input type="checkbox" name="type" id="boring">
												<label for="boring" class="pl-1 pt-sm-0 pt-1">oriental perfumes</label>
											</div>
											<div class="form-inline p-sm-2 my-2">
												<input type="checkbox" name="type" id="ugly">
												<label for="ugly" class="pl-1 pt-sm-0 pt-1">Perfume Sets</label>
											</div>
											
										</form>
									</div>
									<div>
										<h6 class="p-1"><span><img class="img-fluid" :src="burger"></span>sort by</h6>
										<form class="ml-md-2">
											<div class="form-inline p-sm-2 my-2">
												<input type="checkbox" name="type" id="boring">
												<label for="boring" class="pl-1 pt-sm-0 pt-1">default order</label>
											</div>
											<div class="form-inline p-sm-2 my-2">
												<input type="checkbox" name="type" id="ugly">
												<label for="ugly" class="pl-1 pt-sm-0 pt-1">Sort by popularity</label>
											</div>
											<div class="form-inline p-md-2 p-sm-1">
												<input type="checkbox" name="type" id="notugly">
												<label for="notugly" class="pl-1 pt-sm-0 pt-1">Sort by rating</label>
											</div>
											<div class="form-inline p-sm-2 my-2">
												<input type="checkbox" name="type" id="boring">
												<label for="boring" class="pl-1 pt-sm-0 pt-1">Sort by latest</label>
											</div>
											<div class="form-inline p-sm-2 my-2">
												<input type="checkbox" name="type" id="ugly">
												<label for="ugly" class="pl-1 pt-sm-0 pt-1">Low price to high</label>
											</div>
											
										</form>
									</div>
								</section>
							</div>
						</div>
						
						<!-- Right Part -->
						<div class="col-lg-9 col-md-8">
							<div class="row align-items-center filtered-perfumes">
								<!-- @for($i=0 ; $i<= 9 ;$i++) -->
                                <!-- start card -->
                                <div v-for="item in loop" :key="item">
                                    <PerfumeRatingCard/>
                                </div>						
								<!-- @endfor -->
                                <!-- End card -->							
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</section>
</template>

<script>
import appsSrc from "../assets/images/apps.png"
import burger from "../assets/images/menu-burger (1).png"
/* import Filter from "../components/FilterComponent.vue" */
import PerfumeRatingCard from '../components/PerfumeRatingCard.vue'
export default{
    name:"PerfumeRating",
    components:{
        PerfumeRatingCard
       /*  Filter */
    },
    data(){
        return{
            loop:[1,2,3,5,7,8,0,9,6],
            appsSrc,
            burger
        }
    }
}
</script>
<style>
.perfume_rating .product-grid2 .price {
    color: #3a3535;
    float: left;
    font-size: 15px;
    font-weight: bold;
   /*  font-family: 'Courgette', cursive; */
    margin-left: 5px !important;
    letter-spacing:0.5px
}
.perfume_rating .product-grid2 .product-image2 {
    overflow: hidden;
    position: relative;
    height: 190px;
}
.perfume-card{
    border-right:1px solid #EBEBEB;   
}
.perfumes_filter #sidebar {
    width: 100%;
    padding: 15px;
    margin: 0;
    float: left;
    background-color: #faf7f2;
    margin-top: 24px;
  /*   border :1px solid #c49346; */
    border-radius: 5px;
}
.perfumes_filter #sidebar h6 span {
    margin: 0px 5px;
}
.perfumes_filter #sidebar {
    width: 100%;
    padding: 15px;
    margin: 0;
    float: left;
    background-color: #faf7f2;
    margin-top: 24px;
  /*   border :1px solid #c49346; */
    border-radius: 5px;
}
.perfumes_filter #sidebar h6 span {
    margin: 0px 5px;
}
/* i think it's global */
.form-inline {
    display: flex;
    flex-flow: row wrap;
    align-items: center;
}
.form-inline .form-check {
    width: 100%;
}
.form-inline > label{
    position: relative;
  /*   font-family: 'Courgette', cursive; */
    text-transform: capitalize;
}
.form-inline >label:hover {
    color: #c49346;
    animation-name: towards;
    animation-duration: 0.2s;
    animation-fill-mode: forwards;
    
}
.btn-group-toggle > .btn input[type="radio"],
.btn-group-toggle > .btn input[type="checkbox"],
.btn-group-toggle > .btn-group > .btn input[type="radio"],
.btn-group-toggle > .btn-group > .btn input[type="checkbox"] {
    position: absolute;
    clip: rect(0, 0, 0, 0);
    pointer-events: none;
}
.input-group-text input[type="radio"],
.input-group-text input[type="checkbox"] {
    margin-top: 0;
}
input[type="checkbox"] {
    margin: 4px 0 0;
    margin-top: 1px \9;
    line-height: normal;
}
.form-inline>input[type="checkbox"] {
  position: relative;
  width: 1.5em;
  height: 1.5em;
  color: black;
  border: 1px solid gray;
  border-radius: 4px;
  appearance: none;
  outline: 0;
  cursor: pointer;
  transition: background 175ms cubic-bezier(0.1, 0.1, 0.25, 1);
}
.form-inline>input[type="checkbox"]::before {
    position: absolute;
    content: '';
    display: block;
    top: 2px;
    left: 7px;
    width: 8px;
    height: 14px;
    border-style: solid;
    border-color: #faf7f2;
    border-width: 0 2px 2px 0;
    transform: rotate(45deg);
    opacity: 0;
}
.form-inline>input[type="checkbox"]:checked {
    color: #faf7f2;
    border-color:#c49346;
    background:#c49346;
}
.form-inline>input[type="checkbox"]:checked::before {
      opacity: 1;
}

input[type="checkbox"],
input[type="radio"] {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    padding: 0;
}
input[type="checkbox" i] {
    background-color: transparent;
    width: 24px !important;
    cursor: pointer;
    appearance: auto;
    box-sizing: border-box;
    margin: 3px 3px 3px 4px;
    padding: initial;
    border: initial;
}

/* ********** */
/* For this component only */
img.img-fluid.heart-icon {
    margin-top: -20px;
    margin-left: -3px;
}
.img-fluid {
    max-width: 100%;
    height: 100%;
}
.collapse:not(.show) {
    display: none;
}
.perfumes_filter .collapse.show {
    display: block;
}
.perfumes_filter .collapse.show {
    display: block;
}
.perfumes_filter .collapse {
    display: none;
}
.perfumes_filter #sidebar {
    width: 100%;
    padding: 15px;
    margin: 0;
    float: left;
    background-color: #faf7f2;
    margin-top: 24px;
  /*   border :1px solid #c49346; */
    border-radius: 5px;
}
.perfumes_filter #sidebar h6 span {
    margin: 0px 5px;
}
.perfumes_filter #products {
    width: 80%;
    padding: 10px;
    margin: 0;
    float: right;
}
.perfumes_filter ul {
    list-style: none;
    padding: 5px;
}
.perfumes_filter li a {
    color: darkgray;
    text-decoration: none;
}
.perfumes_filter li a:hover {
    text-decoration: none;
    color: darksalmon;
}
.perfumes_filter .fa-circle {
    font-size: 20px;
}
.perfumes_filter #red {
    color: #e94545d7;
}
.perfumes_filter #teal {
    color: rgb(69, 129, 129);
}
.perfumes_filter #blue {
    color: #0000ff;
}
.perfumes_filter .card {
    width: 250px;
    display: inline-block;
    height: 300px;
}
.perfumes_filter .card-img-top {
    width: 250px;
    height: 210px;
}
.perfumes_filter .card-body p {
    margin: 2px;
}
.perfumes_filter .card-body {
    padding: 0;
    padding-left: 2px;
}
.perfumes_filter .filter {
    display: none;
    padding: 0;
    margin: 0;
}
/* Done */
.new_nav .filter {
    display: none;
    padding: 0;
    margin: 0;
}
.perfumes_filter .collapse {
    display: none;
}

.perfumes_filter .collapse.show {
    display: block;
}

/* perfumes Filter */
.perfume_rating .transmitv:hover .product-image2 img {
    opacity: 0.5;
}
.perfume_rating {
    height: auto !important;
    margin: 5%;
    position: relative;
    top:5vh
}
.perfume_rating img {
    border-radius: 0px;
    width:20px;
}
.perfume_rating .link-wishlist {
    position: absolute;
    top: 10px;
    left: 10px;
}
.perfume_rating a.link-rate {
    position: absolute;
    top: 80%;
    left: 70%;
}
.perfume_rating a.link-rate img {
    width: 25px;
}
.perfume_rating a.link-rate span {
    color: #fff;
}
.perfume_rating .product-grid2 .price {
    color: #3a3535;
    float: left;
    font-size: 15px;
    font-weight: bold;
  /*   font-family: 'Courgette', cursive; */
    margin-left: 5px !important;
    letter-spacing:0.5px
}
.perfume_rating .product-grid2 .product-image2 {
    overflow: hidden;
    position: relative;
    height: 190px;
}
#mobile-filter {
    background-color:#faf7f2 ;
}
@media (max-width:420px){
    .product-incfhny {
        margin-top: -1.5rem !important;
    }
     .perfume_rating {
        height: auto !important;
        margin-top: 21% !important;
    }
     .perfume_rating .product-grid2 .title {
        margin: 10px 5px;
    }
    .perfume_rating .link-compare {
        top: 87%;
    }
    .perfume_rating .link-compare {
    padding: 4px;
    padding-top:0;
    text-align: center;
    width: 35px;
    height: 35px;
    color: #c49346;
    position: relative;
    top: -5px;
   font-size: 20px;
    border-radius: 50%;
    }
}
@media (max-width:567px){
    .perfumes_filter #mobile-filter {
        padding: 10px;
    }
    .perfume_rating .link-compare {
        top: 87%;
    }
    .perfumes_filter .filter {
        display: block;
        margin-left: 70%;
        margin-top: 0%;
        position: relative;
        top: -30px;
    }
    .perfume_rating .product-grid2 .product-content {
        padding: 5px 0px;
        text-align: left;
        margin: 5px 0 50px;
    }

}

/*  */
#wrapper {
    padding-left: 0;
    -webkit-transition: all 0.5s ease;
    -moz-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    transition: all 0.5s ease;
}
.w3l-banner-slider-main .top-right-strip {
    padding: 15px 15px 0 50px;
    align-items: center;
}

.w3l-banner-slider-main .top-hny-left-content h6 {
    font-size: 14px;
    line-height: 26px;
    color: #343344;
    margin: 0px 10px;
    text-transform: lowercase;
}
.w3l-banner-slider-main .top-hny-left-content a {
    color: #343344;
    margin-left: 6px;
    font-weight: 600;
    text-transform: capitalize;
    font-size: 15px;
}

.w3l-banner-slider-main .hand-icon {
    margin: 0 4px;
}

.w3l-banner-slider-main span.hignlaite {
    color: #ff7315;
}

.w3l-banner-slider-main span.hignlaite:hover {
    text-decoration: underline;
}

.w3l-banner-slider-main ul.top-hnt-right-content {
    justify-content: flex-end;
    display: flex;
    align-items: center;
    padding: 12px 0px;
}
.w3l-banner-slider-main ul.top-hnt-right-content li {
    margin-left: 16px;
    list-style: none;
    color: #fff;
}
.w3l-banner-slider-main ul.top-hnt-right-content li a {
    color: #fff;
}
.w3l-banner-slider-main ul.top-hnt-right-content li.usernhy a {
    color: #d0d2d3;
    width: 36px;
    height: 36px;
    /* background: rgba(255, 255, 255, 0.141); */
    border-radius: 50%;
    display: inline-block;
    text-align: center;
}
.w3l-banner-slider-main ul.top-hnt-right-content li.usernhy a:hover {
    background: #e4e4e4;
}
.w3l-banner-slider-main a.btn-open span.fa {
    line-height: 34px;
    font-size: 20px;
}

.w3l-banner-slider-main p.login-texthny {
    color: #f4f4f4;
    font-size: 16px;
    font-weight: 600;
    text-transform: capitalize;
}

.w3l-banner-slider-main .login label {
    color: #fff;
}

.w3l-banner-slider-main .login a {
    color: #b4b7bb;
}

.w3l-banner-slider-main .login-bghny .form-check label {
    color: #fff;
    font-size: 14px;
    cursor: pointer;
}

.w3l-banner-slider-main .login-bghny .form-control {
    border-radius: 4px;
    outline: none;
    border: none;
    color: #6b778d;
    font-size: 16px;
    padding: 10px 10px;
    background: #fff;
}

.w3l-banner-slider-main .login-bghny .form-control:focus {
    background: #f4f4f4;
}

.w3l-banner-slider-main button.submit-login.btn {
    box-shadow: none;
    background: #ff7315;
    padding: 12px 20px;
    border-radius: 25px;
    border: none;
    color: #fff;
    font-size: 16px;
    display: block;
    width: 100%;
    font-weight: 600;
}

.w3l-banner-slider-main button.submit-login.btn:hover {
    opacity: 0.9;
}

.w3l-banner-slider-main .form-check {
    position: relative;
}

.w3l-banner-slider-main .userhny-check input.form-check {
    display: none;
}

.w3l-banner-slider-main .userhny-check .checkmark {
    position: absolute;
    top: 3px;
    left: 0;
    height: 16px;
    width: 16px;
    background-color: #f8f9fa;
    border: 1px solid #3a3535;
    border-radius: 4px;
}
.w3l-banner-slider-main
    .userhny-check
    label.container:hover
    input
    ~ .checkmark {
    background-color: #fff;
}

.w3l-banner-slider-main
    .userhny-check
    label.container
    input:checked
    ~ .checkmark {
    background-color: #ff7315;
    border: transparent;
}

.w3l-banner-slider-main .userhny-check .checkmark:after {
    content: "";
    position: absolute;
    display: none;
}

.w3l-banner-slider-main
    .userhny-check
    label.container
    input:checked
    ~ .checkmark:after {
    display: block;
}

.w3l-banner-slider-main .userhny-check label.container .checkmark:after {
    left: 5px;
    top: 2px;
    width: 5px;
    height: 10px;
    border: solid white;
    border-width: 0 2px 2px 0;
    transform: rotate(45deg);
}

.w3l-banner-slider-main .userhny-check p.privacy-policy {
    margin: 0;
    font-size: 15px;
    color: #c5b2b2;
    font-weight: 600;
}

.w3l-banner-slider-main .modal-header .close {
    float: right !important;
}

.w3l-banner-slider-main .form-control:focus {
    border: 1px solid #ccc;
    outline: 0;
    box-shadow: none !important;
}

.w3l-banner-slider-main .button-log a {
    color: #333;
    font-size: 1.5em;
    text-decoration: none;
}

.w3l-banner-slider-main .overlay-login button.overlay-close1 {
    z-index: 9999;
    color: #fff;
}

.w3l-banner-slider-main .btn-open:after {
    color: #333;
    transition-property: all 0.2s linear 0s;
    transition: all 0.2s linear 0s;
}

.w3l-banner-slider-main .btn-open:hover:after {
    color: #34b484;
}

.w3l-banner-slider-main .overlay-login.open .btn-close:after {
    color: #fff;
    /* font-family: "FontAwesome"; */
    transition-property: all 0.2s linear 0s;
    transition: all 0.2s linear 0s;
    -moz-transition: all 0.2s linear 0s;
    -webkit-transition: all 0.2s linear 0s;
    -o-transition: all 0.2s linear 0s;
}

.w3l-banner-slider-main .btn-close:hover:after {
    color: #34b484;
}

.w3l-banner-slider-main .overlay-login button.overlay-close1 {
    z-index: 999;
    color: #fff;
    right: 0;
    width: 40px;
    height: 40px;
    position: absolute;
    left: 20px;
    top: 20px;
    overflow: hidden;
    background: none;
    color: #fff;
    border: 2px solid #232020;
    cursor: pointer;
    border-radius: 6px;
    -webkit-border-radius: 6px;
    -o-border-radius: 6px;
    -moz-border-radius: 6px;
}

.w3l-banner-slider-main .overlay-login {
    display: none;
    position: fixed;
    top: 0;
    background: #3a3535;
    overflow: auto;
    z-index: 9999;
    padding: 3em 3em;
    right: 0;
    height: 100%;
    transition: 0.5s all;
    -webkit-transition: 0.5s all;
    -moz-transition: 0.5s all;
    -o-transition: 0.5s all;
    -ms-transition: 0.5s all;
}

.w3l-banner-slider-main .login-bghny {
    background: #232020;
    border-radius: 6px;
    -webkit-border-radius: 6px;
    -o-border-radius: 6px;
    -moz-border-radius: 6px;
}

.w3l-banner-slider-main .wrap {
    margin: 5em auto 0;
}

.w3l-banner-slider-main .wrap h5 {
    font-size: 2em;
    color: #fff;
}

.w3l-banner-slider-main .wrap ul.wrap-nav {
    border-bottom: 1px solid #575757;
    text-transform: capitalize;
    padding: 150px 0px 100px;
}

.w3l-banner-slider-main .wrap ul.wrap-nav li {
    font-size: 20px;
    display: inline-block;
    vertical-align: top;
    width: 24%;
    position: relative;
}

.w3l-banner-slider-main .wrap ul.wrap-nav li a {
    color: #34b484;
    display: block;
    padding: 8px 0;
    text-decoration: none;
    transition: all 0.2s linear 0s;
    transition-property: all 0.2s linear 0s;
    -moz-transition: all 0.2s linear 0s;
    -webkit-transition: all 0.2s linear 0s;
    -o-transition: all 0.2s linear 0s;
}

.w3l-banner-slider-main .wrap ul.wrap-nav li a:hover {
    color: #f0f0f0;
}

.w3l-banner-slider-main .wrap ul.wrap-nav ul {
    padding: 20px 0;
}

.w3l-banner-slider-main .wrap ul.wrap-nav ul li {
    display: block;
    font-size: 13px;
    width: 100%;
    color: #e9e9e9;
}

.w3l-banner-slider-main .wrap ul.wrap-nav ul li a {
    color: #f0f0f0;
}

.w3l-banner-slider-main .wrap ul.wrap-nav ul li a:hover {
    color: #34b484;
}
.w3l-banner-slider-main .content {
    width: 100%;
    /* margin-top: 3%; */
    font-size: 20px;
    color: #333;
    text-align: center;
}

.w3l-banner-slider-main form.search-box {
    display: flex;
}

.w3l-banner-slider-main .search-right {
    width: 35px;
    height: 35px;
    border-radius: 50%;
    margin: auto;
    display: flex;
    justify-content: flex-end;
}

.w3l-banner-slider-main .search-right a {
    color: #000;
    font-size: 20px;
}

.w3l-banner-slider-main .search-right .popup form input[type="search"] {
    font-style: normal;
    font-weight: normal;
    font-size: 16px;
    line-height: 20px;
    color: #555;
    border: none;
    height: 50px;
    border-radius: 25px;
    background: #fff;
    padding: 0 20px;
    width: 70%;
    border-radius: 0;
    -webkit-border-top-left-radius: 25px;
    -webkit-border-bottom-left-radius: 25px;
    -moz-border-radius-topleft: 25px;
    -moz-border-radius-bottomleft: 25px;
    border-top-left-radius: 25px;
    border-bottom-left-radius: 25px;
}

.w3l-banner-slider-main .search-right .popup form button {
    border: none;
    cursor: pointer;
    font-size: 16px;
    text-align: center;
    color: #fff;
    width: 30%;
    background: #ff7315;
    line-height: 35px;
    display: inline-block;
    border-radius: 25px;
    transition: 0.5s ease-out;
    font-weight: 700;
    display: block;
    height: 50px;
    margin: 0 auto;
    border-radius: 0;
    -webkit-border-top-right-radius: 25px;
    -webkit-border-bottom-right-radius: 25px;
    -moz-border-radius-topright: 25px;
    -moz-border-radius-bottomright: 25px;
    border-top-right-radius: 25px;
    border-bottom-right-radius: 25px;
}

.w3l-banner-slider-main .search-right .popup form button:hover {
    background: #ff7315;
    opacity: 0.8;
    outline: none;
    border: none;
}

.w3l-banner-slider-main .search-right .popup form input:focus {
    outline: none;
    border: none;
}

.w3l-banner-slider-main .search-right .pop-overlay {
    position: fixed;
    top: 0px;
    left: 0;
    right: 0;
    transition: opacity 0ms;
    visibility: hidden;
    opacity: 0;
    z-index: 99;
    background: rgba(25, 23, 23, 0.81);
    box-shadow: 1px 1px 4px 0 rgba(0, 0, 0, 0.85);
    height: 100vh;
}

.w3l-banner-slider-main .search-right .pop-overlay:target {
    visibility: visible;
    opacity: 1;
}

.w3l-banner-slider-main .search-right .popup {
    margin: 0rem auto;
    padding: 40px 50px;
    max-width: 700px;
    border-radius: 3px;
    position: relative;
    top: 50%;
    transform: translateY(-50%);
}

.w3l-banner-slider-main .search-right .search-top {
    display: grid;
    grid-template-columns: auto 1fr 1fr;
    grid-gap: 30px;
    margin-top: 24px;
}

.w3l-banner-slider-main .search-right .search-top h4 {
    font-size: 20px;
    color: #fff;
    margin-bottom: 16px;
}

.w3l-banner-slider-main .search-right .popup h3 {
    font-size: 25px;
    color: #fff;
    margin-bottom: 16px;
}

.w3l-banner-slider-main .search-right .search-top span.fa {
    padding-right: 10px;
}

.w3l-banner-slider-main .search-right .search-top li {
    display: block;
}

.w3l-banner-slider-main .search-right .search-top li a {
    font-size: 16px;
    color: #fff;
    line-height: 28px;
}

.w3l-banner-slider-main .search-right .search-top li a:hover {
    color: #fff;
}

.w3l-banner-slider-main .search-right .close {
    position: absolute;
    top: 75px;
    right: 40px;
    transition: all 200ms;
    font-size: 40px;
    text-decoration: none;
    color: #fff;
    opacity: 1;
}

.w3l-banner-slider-main .search-right .close:hover {
    opacity: 0.8;
}

.w3l-banner-slider-main .top-header-content {
    position: relative;
}
.w3l-banner-slider-main header.tophny-header {
    position: fixed;
    /*  background-color: #f7f7f7; */
    background-color: white;
    z-index: 9999;
    width: 100%;
    margin: 0px auto 0;
    padding-top: 5px;
    padding-bottom: 0.5rem;

    height: auto;
    /*margin: -35px auto 0;*/ /* coomented by HananTaha*/
    left: 0;
    right: 0;
    top: 0;
}
.w3l-banner-slider-main .navbar-expand-lg .navbar-nav .dropdown-menu {
    transform: translateX(-50px);
}

.w3l-banner-slider-main .navbar-expand-lg .navbar-nav .dropdown-menu:before {
    content: "";
    width: 10px;
    height: 10px;
    background: #fff;
    border: 1px #d5d5d5ee solid;
    display: block;
    border-right: none;
    border-bottom: none;
    transform: translateX(-50%) rotateZ(45deg);
    position: absolute;
    top: -5px;
    left: 49%;
    z-index: 1001;
}

.w3l-banner-slider-main .dropdown-toggle::after {
    margin-left: 0.1em;
    border-top: 0.3em solid;
    border-right: 0.2em solid transparent;
    border-left: 0.2em solid transparent;
    vertical-align: middle;
}

.w3l-banner-slider-main .dropdown-item:hover,
.w3l-banner-slider-main .dropdown-item:focus {
    color: #ff7315;
    text-decoration: none;
    background-color: transparent;
}

.w3l-banner-slider-main nav.navbar {
    background-color: transparent;
    padding: 10px 0;
}

.w3l-banner-slider-main a.navbar-brand {
    color: #fff;
    font-size: 30px;
    padding: 0;
    font-weight: 900;
    text-transform: uppercase;
}
.w3l-banner-slider-main a.navbar-brand2 {
    color: #fff;
    font-size: 30px;
    padding: 0;
    font-weight: 900;
    text-transform: uppercase;
}
.w3l-banner-slider-main a.navbar-brand:hover {
    color: #fff;
}

.w3l-banner-slider-main span.lohny {
    margin-bottom: 0;
    color: #ff7315;
}

.w3l-banner-slider-main .navbar-light .navbar-brand:hover,
.w3l-banner-slider-main .navbar-light .navbar-brand:focus {
    opacity: 0.9;
}

.w3l-banner-slider-main .navbar-light .navbar-nav .show > .nav-link,
.w3l-banner-slider-main .navbar-light .navbar-nav .active > .nav-link,
.w3l-banner-slider-main .navbar-light .navbar-nav .nav-link.show,
.w3l-banner-slider-main .navbar-light .navbar-nav .nav-link.active {
    color: #ff7315;
}
.w3l-banner-slider-main .navbar-light .navbar-nav .nav-link:hover,
.w3l-banner-slider-main .navbar-light .navbar-nav .nav-link:focus {
    color: #ff7315;
}

.w3l-banner-slider-main .navbar-light .navbar-nav .nav-link {
    color: #000;
    text-transform: uppercase;
    font-weight: 600;
    font-size: 14px;
}
.w3l-banner-slider-main .navbar-toggler {
    padding: 0.45rem 0.6rem;
    font-size: 1rem;
    background-color: #cfdce8;
    border: none;
}
.w3l-banner-slider-main .bannerhny-content {
    display: block;
    /* grid-template-columns: 2fr 1fr; */
    align-items: center;
    /*padding-top:45px;*/
}
.w3l-banner-slider-main .grid_content {
    display: grid;
    grid-template-columns: 2fr 1fr;
    align-items: center;
    padding-top: 10px;
}
.w3l-banner-slider-main .bannerhny-content1 {
    display: grid;
    align-items: center;
}
.w3l-banner-slider-main ol.carousel-indicators {
    margin: 0;
}

.w3l-banner-slider-main .carousel-item {
    position: relative;
    z-index: 1;
}
.w3l-banner-slider-main .carousel-item img {
    width: 100%;
    height: auto;
}
.w3l-banner-slider-main .carousel-item.item2 {
   /*  background: url(../images/banner2.jpg) no-repeat center; */
    background-size: cover;
    -webkit-background-size: cover;
    -o-background-size: cover;
    -ms-background-size: cover;
    -moz-background-size: cover;
}

.w3l-banner-slider-main .carousel-item.item3 {
    /* background: url(../images/banner3.jpg) no-repeat center; */
    background-size: cover;
    -webkit-background-size: cover;
    -o-background-size: cover;
    -ms-background-size: cover;
    -moz-background-size: cover;
}

.w3l-banner-slider-main .carousel-item.item4 {
    /* background: url(../images/banner4.jpg) no-repeat center; */
    background-size: cover;
    -webkit-background-size: cover;
    -o-background-size: cover;
    -ms-background-size: cover;
    -moz-background-size: cover;
}

.w3l-banner-slider-main .carousel-item:before {
    content: "";
    background: #fff;
    position: absolute;
    top: 0;
    min-height: 100%;
    left: 0;
    right: 0;
    z-index: -1;
}

.w3l-banner-slider-main .carousel-caption h3 {
    font-size: 62px;
    text-transform: uppercase;
    line-height: 72px;
}

.w3l-banner-slider-main .carousel-caption p {
    color: #849baa;
    text-transform: capitalize;
    font-size: 16px;
    opacity: 0.8;
}

.w3l-banner-slider-main a.shop-button.btn {
    display: inline-block;
    outline: none;
    border: none;
    font-weight: 600;
    padding: 10px 26px;
    font-size: 16px;
    background-color: #fff;
    margin-top: 30px;
    color: #232020;
    border-radius: 25px;
}

.w3l-banner-slider-main a.shop-button.btn:hover {
    background: #ff7315;
    color: #fff;
}

.w3l-banner-slider-main .b-ck {
    display: block;
}

.w3l-banner-slider-main .right-banner {
/*     background: url(https://image.kkday.com/v2/image/get/w_960%2Cc_fit%2Cq_55%2Ct_webp/s1.kkday.com/product_100617/20200617030109_wayhP/jpg) no-repeat center;
 */    background-color: #849baa;
    background-size: cover;
    display: grid;
    align-items: center;
    position:relative
    /* min-height: 100%; */
    /* min-height: 46em; */
}
.w3l-banner-slider-main .right-banner .right-1 {
  /*   background: url(../images/plant.png) no-repeat center; */
    /* background-size: cover; */
    display: grid;
    align-items: center;
    /* min-height: 100%; */
    min-height: 46em;
   /*  background-color: red; */
}
.w3l-banner-slider-main .right-1 {
    padding: 4em;
}

.w3l-banner-slider-main .right-1 h4 {
    font-size: 56px;
    text-transform: uppercase;
    line-height: 66px;
    color: #fff;
}
.w3l-banner-slider-main .carousel-indicators {
    bottom: 0%;
    left: -75%;
    cursor: pointer;
    display: flex;
}

.w3l-banner-slider-main .carousel-caption {
    text-align: left;
    margin: 0 auto;
    position: absolute;
    right: 1%;
    bottom: -25%;
    left: 2%;
    z-index: 10;
    padding: 0;
    font-size: 16px !important;
    font-weight: normal !important;
}

.w3l-banner-slider-main .carousel-item > img {
    position: absolute;
    top: 0;
    left: 0;
    min-width: 100%;
}

.w3l-banner-slider-main .carousel-control {
    min-height: 46em;
}

.w3l-banner-slider-main .carousel-indicators li {
    height: 15px;
    width: 15px;
    margin: 0 2px;
    background-color: #bbb;
    border-radius: 50%;
    display: inline-block;
    transition: background-color 0.6s ease;
}

.w3l-banner-slider-main .carousel-indicators .active {
    background-color: #717171;
}

.w3l-banner-slider-main .carousel-control-prev,
.w3l-banner-slider-main .carousel-control-next {
    background: none;
    position: absolute;
    top: 42%;
    bottom: 0;
    z-index: 1;
    display: block;
    align-items: center;
    justify-content: center;
    color: #fff;
    text-align: center;
    /* opacity: 0.5; */
    transition: opacity 0.15s ease;
    height: 50px;
    width: 60px;
    padding: -10px;
    opacity: 0.9;
}

.w3l-banner-slider-main .bannerhny-content-1 {
    list-style: none;
    display: grid;
    /*grid-template-columns: 2fr 1fr;*/
    margin: 0;
    padding: 0;
}

.w3l-banner-slider-main .right-2 {
  /*   background: url(../images/1.jpg) no-repeat center; */
    background-size: cover;
    display: grid;
    align-items: center;
    min-height: 50%;
    padding: 4em;
    position: relative;
    z-index: 1;
}

.w3l-banner-slider-main .left-2 {
    /* background: url(../images/2.jpg) no-repeat center; */
    background-size: cover;
    display: grid;
    align-items: center;
    min-height: 50%;
    padding: 4em;
    position: relative;
    z-index: 1;
}

.w3l-banner-slider-main .right-2:before,
.w3l-banner-slider-main .left-2:before {
    content: "";
    background: rgba(16, 16, 16, 0.47);
    position: absolute;
    top: 0;
    min-height: 100%;
    left: 0;
    right: 0;
    z-index: -1;
}

.w3l-banner-slider-main .right-banner2 h4 {
    font-size: 46px;
    text-transform: uppercase;
    line-height: 56px;
    color: #fff;
}
.w3l-banner-slider-main.inner-pagehny .breadcrumb-infhny {
   /*  background: url(../images/bg1.jpg) no-repeat center; */
    background-size: cover;
    -webkit-background-size: cover;
    -o-background-size: cover;
    -ms-background-size: cover;
    -moz-background-size: cover;
    z-index: 9;
    position: relative;
    min-height: 22em;
}

.w3l-banner-slider-main.inner-pagehny .breadcrumb-infhny::before {
    content: "";
    background: rgba(14, 13, 13, 0.59);
    position: absolute;
    top: 0;
    min-height: 100%;
    left: 0;
    right: 0;
    z-index: -1;
}

.w3l-banner-slider-main.inner-pagehny .breadcrumb-contentnhy {
    padding-top: 12em;
}

.w3l-banner-slider-main.inner-pagehny h2.hny-title {
    font-size: 42px;
    color: #fff;
    font-weight: 600;
}

.w3l-banner-slider-main.inner-pagehny .breadcrumb {
    display: flex;
    flex-wrap: wrap;
    padding: 0.75rem 1rem;
    margin-bottom: 1rem;
    list-style: none;
    background-color: transparent;
    border-radius: 0.25rem;
    justify-content: center;
}

.w3l-banner-slider-main.inner-pagehny ol.breadcrumb li {
    color: #fff;
}

.w3l-banner-slider-main.inner-pagehny ol.breadcrumb li span {
    margin: 0 10px;
    color: #b9bdbd;
}

.w3l-banner-slider-main.inner-pagehny ol.breadcrumb a {
    color: #fff;
}

.w3l-banner-slider-main.inner-pagehny .breadcrumb-item.active {
    color: #fff;
}
.w3l-banner-slider-main a.navbar-brand1 {
    color: #fff;
    font-size: 30px;
    padding: 0;
    font-weight: 900;
    text-transform: uppercase;
    display: inline-block;
    padding-top: 0.3125rem;
    padding-bottom: 0.3125rem;
    margin-right: 1rem;
    font-size: 1.25rem;
    line-height: inherit;
    white-space: nowrap;
    position: relative;
    left: 5%;
    bottom: 25px;
}

@media (max-width:576px){
    .perfumes_filter #sidebar {
        display: none;
    }
    .perfumes_filter #sidebar {
        width: 100%;
        padding: 10px;
        margin: 0;
        float: left;
    }
    .form-inline label {
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 0;
    }
    .form-inline .form-group {
        display: flex;
        flex: 0 0 auto;
        flex-flow: row wrap;
        align-items: center;
        margin-bottom: 0;
    }

    .form-inline .form-control {
        display: inline-block;
        width: auto;
        vertical-align: middle;
    }

    .form-inline .form-control-plaintext {
        display: inline-block;
    }

    .form-inline .input-group,
    .form-inline .custom-select {
        width: auto;
    }

    .form-inline .form-check {
        display: flex;
        align-items: center;
        justify-content: center;
        width: auto;
        padding-left: 0;
    }

    .form-inline .form-check-input {
        position: relative;
        flex-shrink: 0;
        margin-top: 0;
        margin-right: 0.25rem;
        margin-left: 0;
    }

    .form-inline .custom-control {
        align-items: center;
        justify-content: center;
    }
    

    .form-inline .custom-control-label {
        margin-bottom: 0;
    }

}
@media (max-width:770px){
    .w3l-banner-slider-main .content {
        margin-top: -12%;
        margin-bottom: -40%;
    }
    .w3l-banner-slider-main .bannerhny-content {
        display: block;
        align-items: center;
        padding-top: 20px;
    }
    .w3l-banner-slider-main .bannerhny-content1 {
        display: grid;
        align-items: center;
    }
    .w3l-banner-slider-main .right-1 {
        padding: 2em 2em;
    }

    .w3l-banner-slider-main .right-1 h4 {
        font-size: 32px;
        line-height: 42px;
    }
    .w3l-banner-slider-main ul.top-hnt-right-content li {
        margin-left: 20px;
    }
     .w3l-banner-slider-main .carousel-item img {
        height: 330px;
    }
    .w3l-banner-slider-main .carousel-indicators {
        bottom: -2%;
    }
    .w3l-banner-slider-main .right-banner {
        display: none;
    }

}
@media (min-width: 568px) and (max-width: 767px) {
    .perfumes_filter .fa-circle {
        font-size: 15px;
    }
    .perfumes_filter #mobile-filter {
        display: none;
    }
}
@media (max-width:420px){
    .w3l-banner-slider-main header.tophny-header {
        height: 60px;
    }
    .w3l-banner-slider-main .right-banner {
        display: none;
    }
    .w3l-banner-slider-main .carousel-indicators {
        bottom: 0%;
    }
    .w3l-banner-slider-main .bannerhny-content {
        display: block;
    }
    .w3l-banner-slider-main .search-right {
        margin: auto 25px auto -35px;
    }
    .w3l-banner-slider-main .content {
        margin-bottom: -10%;
    }
    .w3l-banner-slider-main header.tophny-header {
        margin: 0px auto 0;
    }
    .w3l-banner-slider-main .content {
        margin-top: 15%;
    }
    .w3l-banner-slider-main .carousel-item img {
        height: 500px !important;
    }
    .w3l-banner-slider-main .carousel-caption {
        right: 0%;
        bottom: -60%;
        left: 4%;
        z-index: 10;
        padding: 0;
    }
    .w3l-banner-slider-main ul.top-hnt-right-content li.usernhy a,
    button.top_transmitv_cart {
        color: #d0d2d3;
    }
    .w3l-banner-slider-main ul.top-hnt-right-content {
        display: flex;
        position: relative;
    }
    .w3l-banner-slider-main ul.top-hnt-right-content li {
        margin-right: 0px;
        margin-left: 10px;
    }
    .w3l-banner-slider-main .right-banner {
        height: 430px;
    }
    .w3l-banner-slider-main .right-banner .right-1 {
        min-height: 100%;
    }
    .w3l-banner-slider-main .search-right {
    display: none;
    }
}
@media screen and (max-width: 48em) {
    .w3l-banner-slider-main .wrap ul.wrap-nav > li {
        width: 100%;
        padding: 20px 0;
        border-bottom: 1px solid #575757;
    }

    .w3l-banner-slider-main .wrap ul.wrap-nav {
        padding: 30px 0px 0px;
    }

    .w3l-banner-slider-main .social {
        color: #c1c1c1;
        font-size: 25px;
        padding: 15px 0;
    }

    .w3l-banner-slider-main .social-icon {
        width: 100%;
        height: 50px;
        background: #fff;
        color: #333;
        display: block;
        margin: 5px 0;
    }
}
@media (max-width: 992px) {
    .w3l-banner-slider-main .navbar-expand-lg .navbar-nav .dropdown-menu {
        transform: translateX(0px);
    }

    .w3l-banner-slider-main
        .navbar-expand-lg
        .navbar-nav
        .dropdown-menu:before {
        top: -5px;
        left: 4%;
    }

    .w3l-banner-slider-main div#navbarSupportedContent {
        background: #232020f2;
        padding: 10px;
        border-radius: 6px;
        position: relative;
        border: 1px #232020 solid;
        max-height: calc(100vh - 120px);
        overflow: auto;
        margin-top: 6px;
    }

    .w3l-banner-slider-main div#navbarSupportedContent:before {
        content: "";
        width: 10px;
        height: 10px;
        background: var(--theme-color);
        border-left: 1px rgba(0, 0, 0, 0.09) solid;
        border-top: 1px rgba(0, 0, 0, 0.09) solid;
        display: block;
        transform: translateX(-50%) rotateZ(45deg);
        position: absolute;
        top: -5px;
        right: 12px;
        opacity: 0;
    }

    .w3l-banner-slider-main div#navbarSupportedContent {
        overflow: inherit;
    }

    .w3l-banner-slider-main .dropdown-item {
        display: block;
        width: 100%;
        padding: 0.25rem 1rem;
    }

    .w3l-banner-slider-main .search-right .close {
        right: 20px;
    }
}
@media (min-width: 768px) and (max-width: 991px) {
    .perfumes_filter #mobile-filter {
        display: none;
    }
}
@media (max-width: 991px) {
    .w3l-banner-slider-main nav.navbar.navbar-expand-lg.navbar-light {
        padding: 10px 15px;
    }
    .perfumes_filter #mobile-filter {
        display: none;
    }

    .w3l-banner-slider-main a.navbar-brand {
        font-size: 28px;
    }

    .w3l-banner-slider-main .navbar-light .navbar-toggler-icon {
        background-image: none;
    }

    .w3l-banner-slider-main .navbar-toggler {
        padding: 0.4rem 0.5rem;
        font-size: 1rem;
        background-color: transparent;
        border: none;
    }

    .w3l-banner-slider-main .navbar-light .navbar-toggler {
        color: #ff7315;
        border-color: #fff;
        background: #fff;
        cursor: pointer;
    }

    .w3l-banner-slider-main .navbar-toggler-icon {
        display: inline-block;
        width: 1.2em;
        height: 1.2em;
        vertical-align: middle;
    }

    .w3l-banner-slider-main span.navbar-toggler-icon.fa.fa-bars {
        font-size: 20px;
        line-height: 1.2em;
    }

    .w3l-banner-slider-main button.navbar-toggler {
        outline: none;
    }
}
@media (max-width: 769px) {
    .w3l-banner-slider-main .top-hny-left-content {
        display: none;
    }

    .w3l-banner-slider-main a.navbar-brand {
        font-size: 24px;
    }

    .w3l-banner-slider-main .top-hnt-right-content {
        display: flex;
        align-items: center;
        padding: 0;
    }

    .w3l-banner-slider-main .search-right a {
        font-size: 16px;
    }
    .w3l-banner-slider-main ul.top-hnt-right-content {
        /*display: grid;*/
        align-items: center;
        grid-template-columns: 1fr 1fr;
    }

    .w3l-banner-slider-main ul.top-hnt-right-content li {
        margin-left: 0;
    }

    .w3l-banner-slider-main li.transmitvcart.galssescart2.cart.cart.box_1 {
        text-align: end;
    }

    .w3l-banner-slider-main span.search-text {
        display: none;
    }

    .w3l-banner-slider-main .container-fluid.serarc-fluid,
    .w3l-banner-slider-main .serarc-fluid.container-sm,
    .w3l-banner-slider-main .serarc-fluid.container-md,
    .w3l-banner-slider-main .serarc-fluid.container-lg,
    .w3l-banner-slider-main .serarc-fluid.container-xl {
        justify-content: inherit;
    }
}

@media (max-width: 1440px) {
    .w3l-banner-slider-main .carousel-caption h3 {
        font-size: 58px;
        line-height: 68px;
    }

    .w3l-banner-slider-main .right-1 {
        padding: 3em;
    }
}

@media (max-width: 1280px) {
    .w3l-banner-slider-main .right-1 h4 {
        font-size: 52px;
        line-height: 62px;
    }
    .double {
        position: relative;
        right: 66%;
        top: 73px;
    }
}

@media (max-width: 1080px) {
    .w3l-banner-slider-main .right-1 h4 {
        font-size: 42px;
        line-height: 52px;
    }

    .w3l-banner-slider-main .right-1 {
        padding: 3em 2em;
    }

    .w3l-banner-slider-main .carousel-item,
    .w3l-banner-slider-main .carousel-item > img,
    .w3l-banner-slider-main .carousel-control,
    .w3l-banner-slider-main .right-banner {
    }

    .w3l-banner-slider-main .carousel-caption h3 {
        font-size: 52px;
        line-height: 62px;
    }
}

@media (max-width: 992px) {
    .w3l-banner-slider-main .right-1 {
        padding: 2em 2em;
    }

    .w3l-banner-slider-main .carousel-item,
    .w3l-banner-slider-main .carousel-item > img,
    .w3l-banner-slider-main .carousel-control {
    }

    .w3l-banner-slider-main .carousel-caption h3 {
        font-size: 46px;
        line-height: 56px;
    }

    .w3l-banner-slider-main .right-1 h4 {
        font-size: 38px;
        line-height: 46px;
    }
}

@media (max-width: 667px) {
    .w3l-banner-slider-main .carousel-caption h3 {
        font-size: 52px;
        line-height: 62px;
    }

    .w3l-banner-slider-main .search-right .popup {
        margin: 0rem auto;
        padding: 30px 30px;
    }
}

@media (max-width: 600px) {
    .w3l-banner-slider-main .carousel-caption h3 {
        font-size: 38px;
        line-height: 48px;
    }

    .w3l-banner-slider-main a.shop-button.btn {
        padding: 8px 26px;
        font-size: 16px;
        margin-top: 16px;
    }

    .w3l-banner-slider-main .carousel-caption {
        right: 15%;
        bottom: 22%;
        left: 15%;
        z-index: 10;
        padding: 0;
    }

    .w3l-banner-slider-main .overlay-login {
        padding: 2em 2em;
    }
}

@media (max-width: 569px) {
    .w3l-banner-slider-main .carousel-caption h3 {
        font-size: 36px;
        line-height: 46px;
    }
}
@media (max-width: 440px) {
    .w3l-banner-slider-main .carousel-caption h3 {
        font-size: 32px;
        line-height: 42px;
    }
}

@media (max-width: 384px) {
    .w3l-banner-slider-main .carousel-caption {
        right: 15%;
        bottom: 18%;
        left: 15%;
        z-index: 10;
        padding: 0;
    }
}
@media screen and (max-width: 991px) {
    .w3l-banner-slider-main.inner-pagehny h2.hny-title {
        font-size: 36px;
    }

    .w3l-banner-slider-main.inner-pagehny .breadcrumb {
        padding: 0;
    }
}

@media screen and (max-width: 667px) {
    .w3l-banner-slider-main.inner-pagehny h2.hny-title {
        font-size: 32px;
    }

    .w3l-banner-slider-main.inner-pagehny .breadcrumb-infhny {
        padding: 10px 0;
    }

    .w3l-banner-slider-main.inner-pagehny .breadcrumb-infhny {
        min-height: 16em;
    }

    .w3l-banner-slider-main.inner-pagehny .breadcrumb-contentnhy {
        padding-top: 8.5em;
    }
}

@media screen and (max-width: 480px) {
    .w3l-banner-slider-main.inner-pagehny h2.hny-title {
        font-size: 28px;
    }
}

@media screen and (max-width: 384px) {
    .w3l-banner-slider-main.inner-pagehny h2.hny-title {
        font-size: 26px;
    }
}
@media (min-width: 568px) and (max-width: 767px) {
    .perfumes_filter .fa-circle {
        font-size: 15px;
    }
    .perfumes_filter #mobile-filter {
        display: none;
    }
}


</style>