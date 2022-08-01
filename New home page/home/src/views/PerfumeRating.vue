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
									<button @click="openFilter" class="btn btn-default for-testing" type="button"
									data-toggle="collapse" data-target="#mobile-filter" 
									aria-expanded="false" aria-controls="mobile-filter">Filters<span class="fa fa-filter pl-1"></span></button>
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
                                <div v-for="item in loop" :key="item" style=" width:212px">
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
    },
	methods:{
		openFilter(){
			const btn = document.querySelector('.for-testing')
			const list = document.querySelector('#mobile-filter')
			let value = btn.getAttribute("aria-expanded")
			
			if (value === "false"){
				value="true"
				btn.classList.add("collapsed")
				list.classList.add('show')
			}
			else{
				value="false";
				btn.classList.remove("collapsed")
				list.classList.remove('show')
			}
			btn.setAttribute("aria-expanded", value);
		}
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
</style>