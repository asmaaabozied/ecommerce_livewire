
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
  <!-- Template CSS -->
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
            <div class="bannerhny-content">
				<div class="row row_work">
							<!--/banner-slider-->
						<div class="col-lg-8 content-baner-inf baner">
							<div class="container">
							
										<div class="single-product-details listview">
											
											<div class="row">
												
												<div class="col-xl-2 col-md-3 col-12">			 
													<a href="#" class="rose_perfume"><img src="{{asset('assets/front/images/Group 32.png')}}" class="img-fluid" alt="" style="" /></a>
												</div>
													</br></br>
												<div class="col-xl- col-md-12 col-12 product-content">

																	<h2 class="product-name">
																		<a href="#">Online workshop</a>
																	</h2>
																	
																	<div class="rating-review">
																					<span>
																							<div class="rate">
																									<input type="radio" id="star5" name="rate" value="5" />
																									<label for="star5" title="text"></label>
																									<input type="radio" id="star4" name="rate" value="4" />
																									<label for="star4" title="text"></label>
																									<input type="radio" id="star3" name="rate" value="3" />
																									<label for="star3" title="text"></label>
																									<input type="radio" id="star2" name="rate" value="2" />
																									<label for="star2" title="text"></label>
																									<input type="radio" id="star1" name="rate" value="1" />
																									<label for="star1" title="text"></label>
																								</div>
																					</span>
																	</div>

																	
																	<div class="perfume_heart">
																		<a class="action-btn" href="wishlist.html" data-toggle="tooltip" data-original-title="Add to Wishlist"><img src="{{asset('assets/front/images/heart.png')}}" class="img-fluid" alt="" width="30px"/></a>
																	</div>
																	</br>
																	<div>
																		<h5 style="color:#484848;font-size: 1rem;">Workshop + notes box</h5>
																	</div>
																	<div class="description">
																		<p class="custom-description">Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Viva..</p>
																	</div>
																	<div class="price-box">
																		<span class="old-price">sold(23)</span>
																		<span class="new-price">SAR90.00</span>
																	</div>
																	<div class="row work-row">
																		<!-- <div class="col-xl-4 col-md-2 col-1 rubbish-div "></div> -->
																		<!-- <div class="col-1 rubbish-div"></div> -->
																		<div class="col-xl-4 col-md-5 col-5 pro-actions">
																			<a class="custom-btn" href="{{ route('cart') }}" style="color:#fff;">Add to Cart</a>
																		</div>
																		<div class="counter col-xl-4 col-md-5 col-5">
																			<span class="down" onClick='decreaseCount(event, this)'>-</span>
																			<input type="text" value="1">
																			<span class="up"  onClick='increaseCount(event, this)'>+</span>
																		</div>
																		
																	</div>
																	
																	
												</div>
												<div class="col-xl-12 col-md-12  col-12">
													<div class="row">
															<!-- <div class="col-1"></div> -->
															<div class="row workshop_tabs">
																					
																<ul class="tabs">
																					<li > shipping</li>
																					<li>Reviews</li>
																					<li>More products</li>
																					<li class="active">Product Inquiry</li>
																</ul>

																<ul class="tab__content ">
																	<li >
																		<div class="content__wrapper">
																			<p> No shipping details yet</p>
																			
																		</div>
																	</li>
																
																	<li>
																		<div class="content__wrapper">
																			
																					<div class="container">
																							<div>
																								<h3>Reviews</h3>
																								<h5>There are no reviews yet</h5>
																							</div>
																					</div>
																			
																		</div>
																	</li>

																	<li>
																		<div class="content__wrapper">
																		
																			<div class="row align-items-center marg">
																				<div class="col-xl-6 col-md-6 col-12 product-incfhny mt-4 perfume-card work-card">
																					<div class="product-grid2 transmitv">
																						<div class="product-image2">
																							<a href="#">
																								<img class="pic-2 img-fluid" src="https://connociam.com/wp-content/uploads/2020/09/Hero-WS_.jpg" alt="not show">
																							</a>
																							<!-- <a class="link-wishlist" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Wishlist"><img class="img-fluid" src="{{asset('assets/front/images/heart12.png')}}" width=""></a> -->
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
																				<!-- <div class="col-xl-6 col-md-6 col-11 product-incfhny mt-4">
																					<div class="product-grid2 transmitv">
																						<div class="product-image2">
																							<a href="#">
																								<img class="pic-2 img-fluid" src="{{asset('assets/front/images/pic1.png')}}">

																							</a>
																						<a class="link-wishlist" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Wishlist"><img class="img-fluid" src="{{asset('assets/front/images/heart.png')}}" width="35px"></a>
																						</div>
																						<a class="link-compare" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to cart"><i class="fas fa-shopping-cart"></i></a>
																						<div class="product-content">
																							<div class="update" style="">
																								<div class="rate">
																									<input type="radio" id="star5" name="rate" value="5">
																									<label for="star5" title="text"></label>
																									<input type="radio" id="star4" name="rate" value="4">
																									<label for="star4" title="text"></label>
																									<input type="radio" id="star3" name="rate" value="3">
																									<label for="star3" title="text"></label>
																									<input type="radio" id="star2" name="rate" value="2">
																									<label for="star2" title="text"></label>
																									<input type="radio" id="star1" name="rate" value="1">
																									<label for="star1" title="text"></label>
																								</div>
																							</div>
																						
																							<h3 class="title"><a href="#">Women Maroon Top <span class="price">SAR 975.00</span></a></h3>

																						</div>
																					</div>
																				</div>
																				<div class="col-xl-6 col-md-6 col-11 product-incfhny mt-4">
																									<div class="product-grid2 transmitv">
																										<div class="product-image2">
																											<a href="#">
																												<img class="pic-2 img-fluid" src="{{asset('assets/front/images/pic1.png')}}">

																											</a>
																										<a class="link-wishlist" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Wishlist"><img class="img-fluid" src="{{asset('assets/front/images/heart.png')}}" width="35px"></a>
						
																										
																										</div>
																										<a class="link-compare" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to cart"><i class="fas fa-shopping-cart"></i></a>
																										<div class="product-content">
																											<div class="update" style="">
																													<div class="rate">
																															<input type="radio" id="star5" name="rate" value="5">
																															<label for="star5" title="text"></label>
																															<input type="radio" id="star4" name="rate" value="4">
																															<label for="star4" title="text"></label>
																															<input type="radio" id="star3" name="rate" value="3">
																															<label for="star3" title="text"></label>
																															<input type="radio" id="star2" name="rate" value="2">
																															<label for="star2" title="text"></label>
																															<input type="radio" id="star1" name="rate" value="1">
																															<label for="star1" title="text"></label>
																													</div>
																											</div>
																										
																											<h3 class="title"><a href="#">Women Maroon Top <span class="price">SAR 975.00</span></a></h3>

																										</div>
																					</div>
																				</div>
																				<div class="col-xl-6 col-md-6 col-11 product-incfhny mt-4">
																									<div class="product-grid2 transmitv">
																										<div class="product-image2">
																											<a href="#">
																												<img class="pic-2 img-fluid" src="{{asset('assets/front/images/pic1.png')}}">

																											</a>
																										<a class="link-wishlist" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Wishlist"><img class="img-fluid" src="{{asset('assets/front/images/heart.png')}}" width="35px"></a>
																										
																																															</li>
																											
																											
																										</div>
																										<a class="link-compare" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to cart"><i class="fas fa-shopping-cart"></i></a>
																										<div class="product-content">
																											<div class="update" style="">
																													<div class="rate">
																															<input type="radio" id="star5" name="rate" value="5">
																															<label for="star5" title="text"></label>
																															<input type="radio" id="star4" name="rate" value="4">
																															<label for="star4" title="text"></label>
																															<input type="radio" id="star3" name="rate" value="3">
																															<label for="star3" title="text"></label>
																															<input type="radio" id="star2" name="rate" value="2">
																															<label for="star2" title="text"></label>
																															<input type="radio" id="star1" name="rate" value="1">
																															<label for="star1" title="text"></label>
																													</div>
																											</div>
																										
																											<h3 class="title"><a href="#">Women Maroon Top <span class="price">SAR 975.00</span></a></h3>

																										</div>
																					</div>
																				</div>
																				<div class="col-xl-6 col-md-6 col-11 product-incfhny mt-4">
																									<div class="product-grid2 transmitv">
																										<div class="product-image2">
																											<a href="#">
																												<img class="pic-2 img-fluid" src="{{asset('assets/front/images/pic1.png')}}">

																											</a>
																										<a class="link-wishlist" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Wishlist"><img class="img-fluid" src="{{asset('assets/front/images/heart.png')}}" width="35px"></a>
																										
																																													
																										</div>
																										<a class="link-compare" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to cart"><i class="fas fa-shopping-cart"></i></a>
																										<div class="product-content">
																											<div class="update" style="">
																													<div class="rate">
																															<input type="radio" id="star5" name="rate" value="5">
																															<label for="star5" title="text"></label>
																															<input type="radio" id="star4" name="rate" value="4">
																															<label for="star4" title="text"></label>
																															<input type="radio" id="star3" name="rate" value="3">
																															<label for="star3" title="text"></label>
																															<input type="radio" id="star2" name="rate" value="2">
																															<label for="star2" title="text"></label>
																															<input type="radio" id="star1" name="rate" value="1">
																															<label for="star1" title="text"></label>
																													</div>
																											</div>
																										
																											<h3 class="title"><a href="#">Women Maroon Top <span class="price">SAR 975.00</span></a></h3>

																										</div>
																					</div>
																				</div> -->
																			</div>
																		
																			
																		</div>
																	</li>

																	<li class="active">
																		<div class="content__wrapper">
																			<h3>Product Inquiry</h3>
																		
																				<form action="/action_page.php "class="work-form col-12">
																					<div class="col-12">
																						<div class="col-xl-6 col-lg-6 col-md-12 col-12">
																							<input type="text" class="form-control" id="exampleFormControlInput" placeholder="name">
																							
																						</div>

																						<div class="col-xl-6 col-lg-6 col-md-12 col-12">
																						
																						<input type="email" class="form-control" id="exampleFormControlInput1" placeholder="email">
																						</div>
																						<div class="col-xl-6 col-lg-6 col-md-12 col-12">
																						
																							<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
																						</div>
																						<div class="col-xl-6 col-lg-6 col-md-12 col-12">
																							<input type="submit" value="Submit" class="btn custom-btn">
																						</div>
																					
																					</div>
																				</form>

																		</div>
																		
																	</li>
																</ul>
															</div>
													</div>
												</div>
											</div>
																
										</div>
													
								</div>
						</div>
											<!--//banner-slider-->
											<!--//banner-slider-->
						<div class="col-lg-4 right-banner right first_content">
							<div class="right-1">
								<div class="perfume_img">
									<a href="#" class="perfume"><img src="{{asset('assets/front/images/pexels-valeria-boltneva-1961795.png')}}" class="img-fluid" alt="" style="width:500px;" /></a>
								</div>
						</div>
				</div>
			</div>
										
	</div>
					

</section>

<script src="{{asset('assets/front/js/jquery-2.1.4.min.js')}}"></script>
<script src="{{asset('assets/front/js/jquery-3.3.1.min.js')}}"></script>


<script src="{{asset('assets/front/js/jquery.magnific-popup.js')}}"></script>
<!--//pop-up-box-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

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

