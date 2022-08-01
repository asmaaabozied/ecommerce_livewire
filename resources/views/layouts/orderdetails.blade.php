

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
<section id="wrapper" class="w3l-banner-slider-main tickets">
	<div class="top-header-content">
	@include('layouts.header')
		</br></br>
		<div class="bannerhny-content1">
			<div class="single_slider  d-flex align-items-center slider_bg_1 orders">
				<div class="container">
					<div class="row align-items-flex-start">
                    @include('front.includes.newnav')
						<div class="col-xl-9 col-lg-9 col-md-7 col-12">
                        <section class="roles">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-12">
                                            
                                            <div class="card">
                                                    <div class="card-header card-header-primary card-header-icon">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                    
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                                    <div class="card-icon">
                                                                                            <img src="{{ asset('assets/front/images/Group 41.png') }}" class="img-fluid" width="35px">
                                                                                    </div>
                                                                                <h4 class="card-title">OrderDetails</h4>
                                                                        </div>
                                                                       
                                                                </div>
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                <div class="card-body">
                                                    <div class="row row-attach">
                                                        <div class="col-md-11 form-group bmd-form-group">
                                                                
                                                                <label for="Name" class="bmd-label-floating">Attach The Receipt</label>
                                                    
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="row">
                                                                    <div class="col-md-10">
                                                                        <label class="attach" for="avatar">Attach the receipt from here</label> 
                                                                        <span class="btn btn-file">Attach the receipt from here<input type="file"></span> 
                                                                    </div>                                                            
                                                                    
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-1">
                                                            <a class="btn btn1"><img src="{{ asset('assets/front/images/Group 13.png') }}" class="img-fluid" width="30px"></a>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="row row-attach">
                                                            <div class="col-md-12 form-group bmd-form-group">
                                                                    
                                                                <label for="Name" class="bmd-label-floating">Order details</label>
                                                        
                                                                <div class="row parts">
                                                                    <div class="col-md-12">
                                                                        <div class="row">
                                                                            <div class="col-md-2 part">
                                                                                <label for="Name" class="bmd-label-floating">product</label>
                                                                                <h6 class="attach">sectarian roses</h6>
                                                                            </div>      
                                                                            <div class="col-md-2 part">
                                                                                <label for="Name" class="bmd-label-floating">total</label>
                                                                                <h6 class="attach">188.60 <span> SR</span></h6>
                                                                            </div>
                                                                            <div class="col-md-2 part">
                                                                                <label for="Name" class="bmd-label-floating">Subtotal</label>
                                                                                <h6 class="attach">188.60 <span> SR</span></h6>
                                                                            </div>
                                                                            <div class="col-md-3 part">
                                                                                <label for="Name" class="bmd-label-floating">Payment method</label>
                                                                                <h6 class="attach">Direct bank transfer</h6>
                                                                            </div> 
                                                                            <div class="col-md-3">
                                                                                <label for="Name" class="bmd-label-floating">total</label>
                                                                                <h6 class="attach">188.60 <span> SR</span></h6>
                                                                                <label for="Name" class="bmd-label-floating small">(Including 26.60 SR added tax)</label>
                                                                            </div> 
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        
                                                        </div>
                                                    </div>
                                                    <div class="row row-attach">
                                                            <div class="col-md-12 form-group bmd-form-group">
                                                                    
                                                                <label for="Name" class="bmd-label-floating">Invoice Extra Fields</label>
                                                        
                                                                <div class="row parts">
                                                                    <div class="col-md-12">
                                                                        <div class="row">
                                                                            <div class="col-md-6 part">
                                                                                <label for="Name" class="bmd-label-floating">Shipping and storage methods</label>
                                                                                <h6 class="attach">sectarian roses sectarian roses sectarian roses sectarian roses sectarian roses</h6>
                                                                            </div>      
                                                                            <div class="col-md-6">
                                                                                <label for="Name" class="bmd-label-floating">Shipping to your address</label>
                                                                                <h6 class="attach">sectarian roses sectarian roses sectarian roses sectarian roses sectarian roses</h6>
                                                                            </div>
                                                                           
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        
                                                        </div>
                                                        <div class="row row-attach">
                                                            <div class="col-md-12 form-group bmd-form-group">
                                                                    
                                                                <label for="Name" class="bmd-label-floating">Partial Payment Summary</label>
                                                        
                                                                <div class="row parts">
                                                                    <div class="col-md-12">
                                                                        <div class="row">
                                                                            <div class="col-md-3">
                                                                                <label for="Name" class="bmd-label-floating">Paid</label>
                                                                                <h6 class="attach">The first batch</h6>
                                                                                <h6 class="attach">11-03-2022</h6>
                                                                                <h6 class="attach">11-03-2022</h6>
                                                                            </div>      
                                                                            <div class="col-md-3">
                                                                                <label for="Name" class="bmd-label-floating">Batch ID</label>
                                                                                <h6 class="attach">18928-1</h6>
                                                                                <h6 class="attach">18928-2</h6>
                                                                                <h6 class="attach">18928-3</h6>
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <label for="Name" class="bmd-label-floating">statue</label>
                                                                                <h6 class="attach" style="color:#00D540;">Awaiting Receipt Upload</h6>
                                                                                <h6 class="attach">complete</h6>
                                                                                <h6 class="attach">complete</h6>
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <label for="Name" class="bmd-label-floating">amount</label>
                                                                                <h6 class="attach">4,034.18 <span> SR</span></h6>
                                                                                <h6 class="attach">4,034.18 <span> SR</span></h6>
                                                                                <h6 class="attach">4,034.18 <span> SR</span></h6>
                                                                            </div> 
                                                                            
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        
                                                        </div>
                                                    <div class="row row-attach">
                                                            <div class="col-md-12 form-group bmd-form-group">
                                                                    
                                                                <label for="Name" class="bmd-label-floating">Invoice Extra Fields</label>
                                                        
                                                                <div class="row parts">
                                                                    <div class="col-md-12">
                                                                        <div class="row">
                                                                            <div class="col-md-6 part">
                                                                                <label for="Name" class="bmd-label-floating">Shipping and storage methods</label>
                                                                                <h6 class="attach">sectarian roses sectarian roses sectarian roses sectarian roses sectarian roses</h6>
                                                                            </div>      
                                                                            <div class="col-md-6">
                                                                                <label for="Name" class="bmd-label-floating">Shipping to your address</label>
                                                                                <h6 class="attach">sectarian roses sectarian roses sectarian roses sectarian roses sectarian roses</h6>
                                                                            </div>
                                                                           
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        
                                                        </div>
                                                </div>
                                                <!-- end content-->
                                            </div>
                                            <!--  end card  -->
                                        </div>
                                        <!-- end col-md-12 -->
                                        </div>
                                        <!-- end row -->
                                    </div>
                                    <!-- /.box -->
                                </div>
                                <!-- create -->
                               
                        </section>
						
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

