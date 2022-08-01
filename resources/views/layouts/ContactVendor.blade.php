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
  <link rel="stylesheet" href="{{asset('assets/front/css/style_rtl.css')}}">
  <!-- Template CSS -->
  <link href="//fonts.googleapis.com/css?family=Oswald:300,400,500,600&display=swap" rel="stylesheet">
  <link href="//fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,900&display=swap" rel="stylesheet">
 
</head>
<body>

<!--w3l-banner-slider-main-->
<section id="wrapper" class="w3l-banner-slider-main">
	<div class="top-header-content">
	@include('layouts.header')


    </div>

    
</section>

<section class="profile-main-section">  

<div class="ghali-logo">
    <div class="container">
        <div class="row">
            <div class="col-md-12"></div>
                <a  href="#index.html" class="menu-logo">  
                    <img src="{{asset('assets/front/images/logoblack.png')}}" class="img-fluid" alt="Your logo" title="Your logo" style="height:140px;" />
                </a>
            </div>
        </div>
    </div>
</div>
<section class="account-details-overview">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-lg-3">
                <div class="acc-menu-right">
                     
                    
                    <ul class="acc-menu">
                        <li class=""><a href="#"><i class="fa fa-user" aria-hidden="true"></i> تفاصيل الحساب</a></li>
                        <li class=""><a href="#"><i class="fas fa-shopping-cart"></i></i> الطلبات</a></li>
                        <li class=""><a href="#"><i class="fas fa-map-marker-alt"></i> العنوان</a></li>
                        <li class="active"><a href="#"><i class="fas fa-user-friends"></i> البائعين</a></li>
                        <li class=""><a href="#"><i class="fas fa-download"></i> التنزيلات</a></li>
                        <li class=""><a href="#"><i class="fas fa-ticket-alt"></i>التذاكر</a></li>
                        <li class=""><a href="#"><i class="fas fa-tachometer-alt"></i>الانتقال الى لوحة التحكم</a></li>  
                    </ul>
                    <div class="logout">
                        <a href=""><i class="fas fa-sign-out-alt"></i> تسجيل الخروج</a>
                    </div>
                    
                </div>
            </div>

            <div class="col-md-8 col-lg-9">
                <div class="acc-detail-title">
                    <div>
                        <i class="fas fa-angle-double-right"></i>     
                         <h4>فهد آل راجح</h4>
                         <a href=""> الغاء المتابعة</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="seller-card">
                            <div class="seller-back">
                                <img src="{{asset('assets/front/images/Rectangle 91.png')}}" class="seller-background" alt="">
                                <img src="{{asset('assets/front/images/c3.jpg')}}" class="seller-img" alt="">
                            </div>
                            <div class="seller-data">
                                <div class="seller-name">
                                    <h3><i class="fas fa-map-marker-alt"></i> المملكة العربية السعودية </h3>
                                   <div class="seller-icons">
                                        <a href="#" type="button"  data-toggle="modal" data-target="#vendor-contact"><img src="{{asset('assets/front/images/comment.svg')}}" alt=""></a>
                                        <a href="#" ><img src="{{asset('assets/front/images/share.svg')}}" alt=""></a>
                                   </div>
                                   
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-12">
                        <div class="seller-tabs">
                            <ul class="nav nav-pills mb-4 mt-4" id="pills-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="products-tab" data-toggle="pill" href="#products" role="tab" aria-controls="products" aria-selected="true">المنتجات</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="reviews-tab" data-toggle="pill" href="#reviews-panel" role="tab" aria-controls="reviews-panel" aria-selected="false">المراجعات</a>
                                </li>
                                
                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="products" role="tabpanel" aria-labelledby="products-tab">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6">
                                            <div class="s-pro-card">
                                                <div class="s-pro-img-sec">
                                                    <img src="{{asset('assets/front/images/pexels-valeria-boltneva-1.png')}}" class="img-fluid s-pro-img" alt="">
                                                    <a href=""  class="product-fav"><i class="far fa-heart"></i></a>
                                                    <div class="rating">
                                                            <a href="">   4.5 <i class="fas fa-star"></i></a>
                                                    </div>
                                                </div>
                                                <div class="s-pro-data">
                                                    <div class="s-pro-name">
                                                        <h3>اسم العطر</h3>
                                                        <h4>975 SR</h4>
                                                    </div>
                                                    <div class="s-pro-add">
                                                        <a href=""><i class="fas fa-shopping-cart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-6">
                                            <div class="s-pro-card">
                                                <div class="s-pro-img-sec">
                                                    <img src="{{asset('assets/front/images/pexels-valeria-boltneva-1.png')}}" class="img-fluid s-pro-img" alt="">
                                                    <a href=""  class="product-fav"><i class="far fa-heart"></i></a>
                                                    <div class="rating">
                                                            <a href="">   4.5 <i class="fas fa-star"></i></a>
                                                    </div>
                                                </div>
                                                <div class="s-pro-data">
                                                    <div class="s-pro-name">
                                                        <h3>اسم العطر</h3>
                                                        <h4>975 SR</h4>
                                                    </div>
                                                    <div class="s-pro-add">
                                                        <a href=""><i class="fas fa-shopping-cart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-6">
                                            <div class="s-pro-card">
                                                <div class="s-pro-img-sec">
                                                    <img src="{{asset('assets/front/images/pexels-valeria-boltneva-1.png')}}" class="img-fluid s-pro-img" alt="">
                                                    <a href=""  class="product-fav"><i class="far fa-heart"></i></a>
                                                    <div class="rating">
                                                            <a href="">   4.5 <i class="fas fa-star"></i></a>
                                                    </div>
                                                </div>
                                                <div class="s-pro-data">
                                                    <div class="s-pro-name">
                                                        <h3>اسم العطر</h3>
                                                        <h4>975 SR</h4>
                                                    </div>
                                                    <div class="s-pro-add">
                                                        <a href=""><i class="fas fa-shopping-cart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-6">
                                            <div class="s-pro-card">
                                                <div class="s-pro-img-sec">
                                                    <img src="{{asset('assets/front/images/pexels-valeria-boltneva-1.png')}}" class="img-fluid s-pro-img" alt="">
                                                    <a href=""  class="product-fav"><i class="far fa-heart"></i></a>
                                                    <div class="rating">
                                                            <a href="">   4.5 <i class="fas fa-star"></i></a>
                                                    </div>
                                                </div>
                                                <div class="s-pro-data">
                                                    <div class="s-pro-name">
                                                        <h3>اسم العطر</h3>
                                                        <h4>975 SR</h4>
                                                    </div>
                                                    <div class="s-pro-add">
                                                        <a href=""><i class="fas fa-shopping-cart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>    

                                </div>
                                <div class="tab-pane fade" id="reviews-panel" role="tabpanel" aria-labelledby="reviews-tab">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6">
                                            <div class="s-pro-card">
                                                <div class="s-pro-img-sec">
                                                    <img src="{{asset('assets/front/images/pexels-valeria-boltneva-1.png')}}" class="img-fluid s-pro-img" alt="">
                                                    <a href=""  class="product-fav"><i class="far fa-heart"></i></a>
                                                    <div class="rating">
                                                         <a href="">   4.5 <i class="fas fa-star"></i></a>
                                                    </div>
                                                </div>
                                                <div class="s-pro-data">
                                                    <div class="s-pro-name">
                                                        <h3>اسم العطر</h3>
                                                        <h4>975 SR</h4>
                                                    </div>
                                                    <div class="s-pro-add">
                                                        <a href=""><i class="fas fa-shopping-cart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-6">
                                            <div class="s-pro-card">
                                                <div class="s-pro-img-sec">
                                                    <img src="{{asset('assets/front/images/pexels-valeria-boltneva-1.png')}}" class="img-fluid s-pro-img" alt="">
                                                    <a href=""  class="product-fav"><i class="far fa-heart"></i></a>
                                                    <div class="rating">
                                                         <a href="">   4.5 <i class="fas fa-star"></i></a>
                                                    </div>
                                                </div>
                                                <div class="s-pro-data">
                                                    <div class="s-pro-name">
                                                        <h3>اسم العطر</h3>
                                                        <h4>975 SR</h4>
                                                    </div>
                                                    <div class="s-pro-add">
                                                        <a href=""><i class="fas fa-shopping-cart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-6">
                                            <div class="s-pro-card">
                                                <div class="s-pro-img-sec">
                                                    <img src="{{asset('assets/front/images/pexels-valeria-boltneva-1.png')}}" class="img-fluid s-pro-img" alt="">
                                                    <a href=""  class="product-fav"><i class="far fa-heart"></i></a>
                                                    <div class="rating">
                                                         <a href="">   4.5 <i class="fas fa-star"></i></a>
                                                    </div>
                                                </div>
                                                <div class="s-pro-data">
                                                    <div class="s-pro-name">
                                                        <h3>اسم العطر</h3>
                                                        <h4>975 SR</h4>
                                                    </div>
                                                    <div class="s-pro-add">
                                                        <a href=""><i class="fas fa-shopping-cart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-6">
                                            <div class="s-pro-card">
                                                <div class="s-pro-img-sec">
                                                    <img src="{{asset('assets/front/images/pexels-valeria-boltneva-1.png')}}" class="img-fluid s-pro-img" alt="">
                                                    <a href=""  class="product-fav"><i class="far fa-heart"></i></a>
                                                    <div class="rating">
                                                         <a href="">   4.5 <i class="fas fa-star"></i></a>
                                                    </div>
                                                </div>
                                                <div class="s-pro-data">
                                                    <div class="s-pro-name">
                                                        <h3>اسم العطر</h3>
                                                        <h4>975 SR</h4>
                                                    </div>
                                                    <div class="s-pro-add">
                                                        <a href=""><i class="fas fa-shopping-cart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>    

                                </div>
                                    
                              
                            </div>
                        </div>
                    </div>

                    
                </div>
            </div>


           
        </div>
    </div>
</section>

</section>




<!-- Modal -->
<div class="modal fade vendor-contact"  id="vendor-contact" tabindex="-1" role="dialog" aria-labelledby="vendor-contact" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">مرحبا..</h5>
        <p>قم بانشاء موضوع دعم جديد</p>
      </div>
      <div class="modal-body">
        <form action="" class="contact-vendor-form">
            <label for="subject">الموضوع
                <input type="text" id="subject" placeholder=" ">
                
            </label>
            <label for="message">الرسالة
                <textarea name="message" id="message" cols="30" rows="5" resize="0"></textarea>
            </label>

            <div class="form-group ">
                                      
                    <input type="submit" value="ارسال" class="submit" name="submit">
                
            </div>
            
            
        </form>
      </div>
      
    </div>
  </div>
</div>

@include('front.includes.footer')

	  <script src="{{asset('assets/front/js/jquery-2.1.4.min.js')}}"></script>

	  <script data-require="jquery@3.1.1" data-semver="3.1.1" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
      <script src="{{asset('assets/front/js/jquery-3.3.1.min.js')}}"></script>
	  <script src="{{asset('assets/front/js/owlcarousel2.2.1.js')}}"></script>
<script src="{{asset('assets/front/js/wow.min.js')}}"></script>
<script src="{{asset('assets/front/js/wow.js')}}"></script>
<script src="{{asset('assets/front/js/all.min.js')}}"></script>
<script src="{{asset('assets/front/js/fontawesome.min.js')}}"></script>

<script>
              new WOW().init();
    </script>

<script src="{{asset('assets/front/js/main.js')}}"></script>
<script src="{{asset('assets/front/js/popper1.16.min.js')}}"></script>
<script src="{{asset('assets/front/js/bootstrap.min.js')}}"></script>

<!-- <script>
    /* Set rates + misc */
        var taxRate = 0.05;
        var shippingRate = 15.00; 
        var fadeTime = 300;
        /* Assign actions */
        $('.product-quantity input').change( function() {
        updateQuantity(this);
        });

        $('.product-removal button').click( function() {
        removeItem(this);
        });

        /* Recalculate cart */
        function recalculateCart()
        {
        var subtotal = 0;
        
        /* Sum up row totals */
        $('.product').each(function () {
            subtotal += parseFloat($(this).children('.product-line-price').text());
        });
        
        /* Calculate totals */
        var tax = subtotal * taxRate;
        var shipping = (subtotal > 0 ? shippingRate : 0);
        var total = subtotal + tax + shipping;
        
        /* Update totals display */
        $('.totals-value').fadeOut(fadeTime, function() {
            $('#cart-subtotal').html(subtotal.toFixed(2));
            $('#cart-tax').html(tax.toFixed(2));
            $('#cart-shipping').html(shipping.toFixed(2));
            $('#cart-total').html(total.toFixed(2));
            if(total == 0){
            $('.checkout').fadeOut(fadeTime);
            }else{
            $('.checkout').fadeIn(fadeTime);
            }
            $('.totals-value').fadeIn(fadeTime);
        });
        }

        /* Update quantity */
        function updateQuantity(quantityInput)
        {
        /* Calculate line price */
        var productRow = $(quantityInput).parent().parent();
        var price = parseFloat(productRow.children('.product-price').text());
        var quantity = $(quantityInput).val();
        var linePrice = price * quantity;
        
        /* Update line price display and recalc cart totals */
        productRow.children('.product-line-price').each(function () {
            $(this).fadeOut(fadeTime, function() {
            $(this).text(linePrice.toFixed(2));
            recalculateCart();
            $(this).fadeIn(fadeTime);
            });
        });  
        }

        /* Remove item from cart */
        function removeItem(removeButton)
        {
        /* Remove row from DOM and recalc cart total */
        var productRow = $(removeButton).parent().parent();
        productRow.slideUp(fadeTime, function() {
            productRow.remove();
            recalculateCart();
        });
        }
</script> -->
</body>
</html>




