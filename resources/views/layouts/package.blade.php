
<!-- begin index.tpl -->
<!doctype html>
<html lang="{{ LaravelLocalization::getCurrentLocale() }}" dir="{{ LaravelLocalization::getCurrentLocaleDirection() }}">
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

</head>
<body>
<!--w3l-banner-slider-main-->
<section id="wrapper" class="w3l-banner-slider-main">
	<div class="top-header-content">
		<header class="tophny-header">
			<div class="container-fluid" style="height: 50px;">
				<div class="top-right-strip row">
					
					<ul class="local">
						@foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
							<li>
								<a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
									{{ $properties['native'] }}
								</a>
							</li>
						@endforeach
					</ul>
				</div>
			</div>
			<a class="navbar-brand logo" href="#index.html">
								<img src="{{asset('assets/front/images/logo-4.png')}}" alt="Your logo" title="Your logo" style="height:150px;" />
							</a> 
			<!--//nav-->
		</header>
<div class="bannerhny-content">

			<!--/banner-slider-->
	<div class="content-baner-inf">
		<div class="container">
		
					<div class="single-product-details listview">
				
								<a href="#" class="perfume"><img src="{{asset('assets/front/images/pexels-valeria-boltneva-1961795.png')}}" class="img-fluid" alt="" style="width:500px;" /></a>
								
						<div class="row">
							<div class="col-2">			 
								<a href="#" class="rose_perfume"><img src="{{asset('assets/front/images/Group 32.png')}}" class="img-fluid" alt="" style="" /></a>
                            </div>

											<div class="col-7 product-content">

												<h2 class="product-name">
													<a href="#">wholesaler package</a>
												</h2>
												<div class="rating-review">
												<span>
																		<div class="rate">
																				<input type="radio" id="star5" name="rate" value="5" />
																				<label for="star5" title="text">5 stars</label>
																				<input type="radio" id="star4" name="rate" value="4" />
																				<label for="star4" title="text">4 stars</label>
																				<input type="radio" id="star3" name="rate" value="3" />
																				<label for="star3" title="text">3 stars</label>
																				<input type="radio" id="star2" name="rate" value="2" />
																				<label for="star2" title="text">2 stars</label>
																				<input type="radio" id="star1" name="rate" value="1" />
																				<label for="star1" title="text">1 star</label>
																			</div>
																</span>
												</div>
												<!-- <div class="stock">
													<a href="#">In Stock</a>
												</div> -->
												<div class="perfume_heart">
													<a class="action-btn" href="wishlist.html" data-toggle="tooltip" data-original-title="Add to Wishlist"><img src="{{asset('assets/front/images/heart.png')}}" class="img-fluid" alt="" width="35px"/></a>
												</div>
												<div class="description">
													<p>A package consisting of nine types of perfumes, of each type. The package includes services. After purchasing the package, your store will be activated and perfumes will be supplied to your account on inventory systems. The wholesale price of perfumes is 25 less. Selling through your store.</p>
												</div>
												<div class="price-box">
													<span class="old-price">sold(23)</span>
													<span class="new-price">SAR6,500.00</span>
												</div>
												<div class="counter">
													<span class="down" onClick='decreaseCount(event, this)'>-</span>
													<input type="text" value="1">
													<span class="up"  onClick='increaseCount(event, this)'>+</span>
												</div>
												
												<div class="pro-actions">
													<a class="action-btn action-btn-1" href="cart.html"><i class="pe-7s-cart"></i>Add to Cart</a>
												</div>
												
											</div>
											<div class="col-3"></div>
						</div>
											
										</div>
								
		 	</div>

		</div>
						<!--//banner-slider-->
						<!--//banner-slider-->
						<div class="right-banner">
							<div class="right-1">
							</div>
						</div>
					</div>

</section>

	  <script src="{{asset('assets/front/js/jquery-2.1.4.min.js')}}"></script>

	  <script data-require="jquery@3.1.1" data-semver="3.1.1" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
      <script src="{{asset('assets/front/js/jquery-3.3.1.min.js')}}"></script>

<script>
              new WOW().init();
              </script>
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

