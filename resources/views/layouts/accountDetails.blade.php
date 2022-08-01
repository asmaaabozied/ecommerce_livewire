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
<!-- <div class="ghali-logo">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a  href="#index.html" class="menu-logo">  
                    <img src="{{asset('assets/front/images/logoblack.png')}}" class="img-fluid" alt="Your logo" title="Your logo" style="height:140px;" />
                </a>
            </div>
        </div>
    </div>
</div> -->
<section class="account-details-overview">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-lg-3">
                <div class="acc-menu-right right-list">
                     
                    
                    <ul class="acc-menu">
                         <li class="active"><a href="{{url('/accountdetails')}}"><i class="fa fa-user" aria-hidden="true"></i> تفاصيل الحساب</a></li>
                        <li class=""><a href="{{url('/orders')}}"><i class="fa fa-shopping-cart" aria-hidden="true"></i> الطلبات</a></li>
                        <li class=""><a href="{{url('/accountaddress')}}"><i class="fas fa-map-marker-alt"></i> العنوان</a></li>
                        <li class=""><a href="{{url('/seller')}}"><i class="fas fa-user-friends"></i> البائعين</a></li>
                        <li class=""><a href="{{url('Downloads')}}"><i class="fas fa-download"></i> التنزيلات</a></li>
                        <li class=""><a href="{{url('/tickets')}}"><i class="fas fa-ticket-alt"></i>التذاكر</a></li>
                        <li class=""><a href=""><i class="fas fa-tachometer-alt"></i>الانتقال الى لوحة التحكم</a></li>  
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
                        <h4>تفاصيل الحساب</h4>
                    </div>
                    
                </div>
                <div class="row">
                     <a class="col-12 col-lg-12 col-sm-12 edit-tag"  onclick="toggleForm(this)">تعديل</a>
                    <div class="col-md-12 col-lg-12">
                        <div class="acc-detail-mid">
                            <div class="address-container col-12">
                                
                                <ul>
                                    <li> الاسم الأول	&nbsp;  	&nbsp;	&nbsp; فاتن
                                
                                    </li>
                                    <li>الاسم الثاني 	&nbsp;	&nbsp;	&nbsp; مجدي
                                    </li>
                                    <li>اسم العرض 	&nbsp; 	&nbsp;	&nbsp; العرض المتكامل
                                    </li>
                                    <li>البريد الالكرتوني  	&nbsp;	&nbsp;	&nbsp;kdji@gmail.com
                                    </li>
                        
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                        <div class="col-md-12 col-lg-12  account-form-arabic">
                                    <div class="acc-detail-mid col-12">                  
                                        <div class="acc-details-form col-12">
                                            <div class="details-form-title">
                                                <p>تعديل البيانات الأساسية</p> <!-- <i class="fas fa-edit"></i> -->
                                            </div>
                                            <form action="">
                                                <label for="address">الاسم الأول
                                                    <input type="text" id="address" placeholder="اتركه فارغا  اذا كنت لا تريد التعديل">
                                                </label>
                                                <label for="city">الاسم الثاني
                                                    <input type="text" id="city" placeholder="اتركه فارغا  اذا كنت لا تريد التعديل" >
                                                </label>
                                                <label for="region">اسم العرض
                                                    <input type="text" id="region" placeholder="اتركه فارغا  اذا كنت لا تريد التعديل">
                                                </label>
                                                <button class="col-12 done-btn">تم</button>
                                            </form>
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



@include('front.includes.footer')
<script>
    function toggleForm(){
        let form = document.querySelector('.account-form-arabic')
        form.classList.toggle("account-form-arabic-max-height")
    }
    /* .account-form-arabic-max-height */
</script>
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

