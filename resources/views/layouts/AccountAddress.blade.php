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
     <div class="overlay-div"></div>
    <div class="container">
        
        <div class="row">
           
            <div class="col-md-4 col-lg-3 ">
                <div class="acc-menu-right right-list">          
                    <ul class="acc-menu">
                        <li class=""><a href="#"><i class="fa fa-user" aria-hidden="true"></i> تفاصيل الحساب</a></li>
                        <li class=""><a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i> الطلبات</a></li>
                        <li class="active"><a href="#"><i class="fas fa-map-marker-alt"></i> العنوان</a></li>
                        <li class=""><a href="#"><i class="fas fa-user-friends"></i> البائعين</a></li>
                        <li class=""><a href="#"><i class="fas fa-download"></i> التنزيلات</a></li>
                        <li class="" ><a href="#"><i class="fas fa-solid fa-lock"></i>تغيير الباسورد</a></li>
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
                         <h4>العنوان</h4>
                    </div>
                    
                    <p>العناوين التالية سيتم استخدامها في صفحة إتمام الطلب بشكل افتراضي</p>
                </div>
                <div class="row ">
                    <div class="col-12 add-tag ">
                        <button  onclick="addAddress(this)"> 
                        اضافة<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                        </svg></button>
                    </div>
                    

                    <div class="address-container col-12">
                        <ul>
                            <li>العناوين التالية سيتم استخدامها في صفحة إتمام الطلب بشكل افتراضي
                                <a class="col-2 col-lg-1 col-sm-1" data-index="1" onclick="test(this)">تعديل</a>
                                <div class="col-md-12 col-lg-12  edit-form edit-form-1">
                                    <div class="acc-detail-mid">                  
                                        <div class="acc-details-form">
                                            <div class="details-form-title">
                                                <p>عنوان وصول الفواتير</p> <!-- <i class="fas fa-edit"></i> -->
                                            </div>
                                            <form action="">
                                                <label for="address">عنوان الشارع / الحي
                                                    <input type="text" id="address" placeholder="رقم المنزل و اسم الشارع/الحي">
                                                    <input type="text" id="address" placeholder="رقم الشقة / الوحدة / الجناح (اختياري)">
                                                </label>
                                                <label for="city">المدينة
                                                    <input type="text" id="city" >
                                                </label>
                                                <label for="region">المنطقة
                                                    <input type="text" id="region">
                                                </label>
                                                <button class="col-12 done-btn">تم</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>العناوين التالية سيتم استخدامها في صفحة إتمام الطلب بشكل افتراضي
                                <a class="col-2 col-lg-1 col-sm-1" data-index="2" onclick="test(this)">تعديل</a>
                                <div class="col-md-12 col-lg-12  edit-form edit-form-2">
                                    <div class="acc-detail-mid">                  
                                        <div class="acc-details-form">
                                            <div class="details-form-title">
                                                <p>عنوان وصول الفواتير</p> <!-- <i class="fas fa-edit"></i> -->
                                            </div>
                                            <form action="">
                                                <label for="address">عنوان الشارع / الحي
                                                    <input type="text" id="address" placeholder="رقم المنزل و اسم الشارع/الحي">
                                                    <input type="text" id="address" placeholder="رقم الشقة / الوحدة / الجناح (اختياري)">
                                                </label>
                                                <label for="city">المدينة
                                                    <input type="text" id="city" >
                                                </label>
                                                <label for="region">المنطقة
                                                    <input type="text" id="region">
                                                </label>
                                                <button class="col-12 done-btn">تم</button>
                                            </form>
                                        </div>
                                    </div>
                                </div></li>
                            <li>العناوين التالية سيتم استخدامها في صفحة إتمام الطلب بشكل افتراضي
                                <a class="col-2 col-lg-1 col-sm-1" data-index="3" onclick="test(this)">تعديل</a>
                                <div class="col-md-12 col-lg-12  edit-form edit-form-3">
                                    <div class="acc-detail-mid">                  
                                        <div class="acc-details-form">
                                            <div class="details-form-title">
                                                <p>عنوان وصول الفواتير</p> <!-- <i class="fas fa-edit"></i> -->
                                            </div>
                                            <form action="">
                                                <label for="address">عنوان الشارع / الحي
                                                    <input type="text" id="address" placeholder="رقم المنزل و اسم الشارع/الحي">
                                                    <input type="text" id="address" placeholder="رقم الشقة / الوحدة / الجناح (اختياري)">
                                                </label>
                                                <label for="city">المدينة
                                                    <input type="text" id="city" >
                                                </label>
                                                <label for="region">المنطقة
                                                    <input type="text" id="region">
                                                </label>
                                                <button class="col-12 done-btn">تم</button>
                                            </form>
                                        </div>
                                    </div>
                                </div></li>
                            <li>العناوين التالية سيتم استخدامها في صفحة إتمام الطلب بشكل افتراضي
                                <a class="col-2 col-lg-1 col-sm-1" data-index="4" onclick="test(this)">تعديل</a>
                                <div class="col-md-12 col-lg-12  edit-form edit-form-4">
                                    <div class="acc-detail-mid">                  
                                        <div class="acc-details-form">
                                            <div class="details-form-title">
                                                <p>عنوان وصول الفواتير</p> <!-- <i class="fas fa-edit"></i> -->
                                            </div>
                                            <form action="">
                                                <label for="address">عنوان الشارع / الحي
                                                    <input type="text" id="address" placeholder="رقم المنزل و اسم الشارع/الحي">
                                                    <input type="text" id="address" placeholder="رقم الشقة / الوحدة / الجناح (اختياري)">
                                                </label>
                                                <label for="city">المدينة
                                                    <input type="text" id="city" >
                                                </label>
                                                <label for="region">المنطقة
                                                    <input type="text" id="region">
                                                </label>
                                                <button class="col-12 done-btn">تم</button>
                                                
                                            </form>
                                        </div>
                                    </div>
                                </div></li>
                            <li>العناوين التالية سيتم استخدامها في صفحة إتمام الطلب بشكل افتراضي
                                <a class="col-2 col-lg-1 col-sm-1" data-index="5" onclick="test(this)">تعديل</a>
                                <div class="col-md-12 col-lg-12  edit-form edit-form-5">
                                    <div class="acc-detail-mid">                  
                                        <div class="acc-details-form">
                                            <div class="details-form-title">
                                                <p>عنوان وصول الفواتير</p> <!-- <i class="fas fa-edit"></i> -->
                                            </div>
                                            <form action="">
                                                <label for="address">عنوان الشارع / الحي
                                                    <input type="text" id="address" placeholder="رقم المنزل و اسم الشارع/الحي">
                                                    <input type="text" id="address" placeholder="رقم الشقة / الوحدة / الجناح (اختياري)">
                                                </label>
                                                <label for="city">المدينة
                                                    <input type="text" id="city" >
                                                </label>
                                                <label for="region">المنطقة
                                                    <input type="text" id="region">
                                                </label>
                                                
                                                <button class="col-12 done-btn">تم</button>
                                            </form>
                                        </div>
                                    </div>
                                </div></li>
                        </ul>

                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-12 col-md-6 col-lg-6 add-form">
                <div class="acc-detail-mid">
                    <div class="acc-details-form">
                    <a class="col-12 add-tag close-tag"  onclick="closeAddForm()">X</a>

                        <div class="details-form-title">
                            <p>عنوان وصول الفواتير</p> <!-- <i class="fas fa-edit"></i> -->
                        </div>
                        <form action="">
                            <label for="address">عنوان الشارع / الحي
                                <input type="text" id="address" placeholder="رقم المنزل و اسم الشارع/الحي">
                                <input type="text" id="address" placeholder="رقم الشقة / الوحدة / الجناح (اختياري)">
                            </label>
                            <label for="city">المدينة
                                <input type="text" id="city" placeholder="اسم المدينة" >
                            </label>
                            <label for="region">المنطقة
                                <input type="text" id="region" placeholder="اسم المنطقة">
                            </label>
                            <button class="col-12 done-btn">اضافة</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

</section>

@include('front.includes.footer')
<script> 
    function test(item){
        let index = item.dataset.index
        let form =document.querySelector(`.edit-form-${index}`)
        let status = form.style.display
        console.log(form.style.maxHeight)
        form.classList.toggle("form-max-height")     
    }

    function addAddress(){
        document.querySelector('.add-form').style.maxHeight="550px"
        /*  document.querySelector('.add-form').style.opacity="1" */
        document.querySelector('.overlay-div').style.display="block"
        
    
    }
    function closeAddForm(){
        console.log("first")
  
        document.querySelector('.add-form').style.maxHeight="0"
        document.querySelector('.overlay-div').style.display="none"
        /*   document.querySelector('.add-form').style.opacity="0" */

    }
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

