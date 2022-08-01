
<!-- begin index.tpl -->
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>SpryStore E-commerce Category Bootstrap Responsive Website Template | Home :: W3layouts</title>
  <!-- Template CSS -->
  <link rel="stylesheet" href="{{asset('assets/front/css/style-starter.css')}}">
  <link rel="stylesheet" href="{{asset('assets/front/css/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/front/css/owl.theme.default.css')}}">
  <link rel="stylesheet" href="{{asset('assets/front/css/fontawesome.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/front/css/all.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/front/css/animate.min.css')}}">

  <link href="//fonts.googleapis.com/css?family=Oswald:300,400,500,600&display=swap" rel="stylesheet">
  <link href="//fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,900&display=swap" rel="stylesheet">
  @if(app()->getLocale()=='ar')
  
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-gXt9imSW0VcJVHezoNQsP+TNrjYXoGcrqBZJpry9zJt8PCQjobwmhMGaDHTASo9N" crossorigin="anonymous">
  <link href="{{asset('assets/front/css/style_rtl.css')}}" rel="stylesheet">
@endif
</head>
<body>
<!--w3l-banner-slider-main-->
<section id="wrapper" class="w3l-banner-slider-main">
	<div class="top-header-content">
	         @include('layouts.header')
	      	</br></br>
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
										<h6 class="p-1"><span><img class="img-fluid" src="{{asset('assets/front/images/apps.png')}}"></span>Categories</h6>
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
										<h6 class="p-1"><span><img class="img-fluid" src="{{asset('assets/front/images/menu-burger.png')}}"></span>sort by</h6>
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
										<h6 class="p-1"><span><img class="img-fluid" src="{{asset('assets/front/images/apps.png')}}"></span>Categories</h6>
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
										<h6 class="p-1"><span><img class="img-fluid" src="{{asset('assets/front/images/menu-burger.png')}}"></span>sort by</h6>
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
								@for($i=0 ; $i<= 9 ;$i++)
								<div class="col-xl-3 col-md-6 col-12 product-incfhny mt-4 perfume-card">
									<div class="product-grid2 transmitv">
										<div class="product-image2">
											<a href="#">
												<img class="pic-2 img-fluid" src="https://images.ulta.com/is/image/Ulta/2588402" alt="not show">
											</a>
											<a class="link-wishlist" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Wishlist"><img class="img-fluid" src="{{asset('assets/front/images/heart12.png')}}" width=""></a>
										</div>
										<div class="product-content product-content-with-rating">
										
											<h3 class="title"><a href="#">Women Maroon Top </br></a></h3>
											<img src="https://www.enabletherapyservices.co.uk/wp-content/uploads/2018/01/5-star-rating.png">
											<div>
												<a class="link-compare" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to cart"><i class="fas fa-shopping-cart"></i></a>
												<span class="price">SAR 975.00</span>
											</div>
										</div>
									</div>
								</div>
								@endfor
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</section>

@include('front.includes.footer')

	  <script src="{{asset('assets/front/js/jquery-2.1.4.min.js')}}"></script>
<script src="{{asset('assets/front/js/jquery-3.3.1.min.js')}}"></script>
 <!-- cart-js -->
 <script src="{{asset('assets/front/js/minicart.js')}}"></script>

<script src="{{asset('assets/front/js/jquery.magnific-popup.js')}}"></script>
<!--//pop-up-box-->
<script src="{{asset('assets/front/js/ratingAnimation.js')}}"></script>
<script src="{{asset('assets/front/js/owlcarousel2.2.1.js')}}"></script>
<script src="{{asset('assets/front/js/wow.min.js')}}"></script>
<script src="{{asset('assets/front/js/wow.js')}}"></script>
<script src="{{asset('assets/front/js/all.min.js')}}"></script>
<script src="{{asset('assets/front/js/fontawesome.min.js')}}"></script>
<script src="{{asset('assets/front/js/popper1.16.min.js')}}"></script>

<script src="{{asset('assets/front/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/front/js/main.js')}}"></script>

</body>
</html>

