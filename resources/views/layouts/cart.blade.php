
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
  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Caveat&display=swap" rel="stylesheet">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200&display=swap" rel="stylesheet">
<!--  -->
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
    <div class="bannerhny-content cartban">

            <!--/banner-slider-->
            <div class=" cart-header">
                <h1>Cart</h1>  
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#c49346" class="bi bi-bag" viewBox="0 0 16 16">
                <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z"/>
                </svg>
            </div>
        <div class="content-baner-inf">
        <div class="container shop_cart">
            <div class="row custom-right">
                <div class="shopping-cart col-lg-8">

                    <div class="column-labels col-md-12 product-table">
                        <div class=" cart-child row">
                        <label class="product-image col-md-3">Product</label>
                            <label class="product-details col-md-2">Product Name</label>
                            <label class="product-price col-md-2">Price</label>
                            <label class="product-line-price col-md-2">Total</label>
                            <label class="product-quantity col-md-2">Quantity</label>
                            </div>
                    </div>

                    <div class="product col-md-12 cart-child">
                        <div class="row custom">
                            
                            <div class="product-image col-md-3 col-12 col-sm-12 ">
                                <img src="https://c1.wallpaperflare.com/preview/127/63/589/perfume-fragrance-luxury-glass-thumbnail.jpg" alt="" title=""  />
                            </div>
                            <div class="product-details col-md-2 col-12 col-sm-12">
                                <div class="product-title">Office workshop</div>
                            </div>
                            <div class="product-price col-md-2 col-12 col-sm-12"><span>Price:</span>12.99 SAR</div>
                            
                            <div class="col-5 none">
                                </div>
                            <div class="product-line-price col-md-2 col-12 col-sm-12"><span>Total</span>625.98,30</div>
                            <div class="product-quantity col-md-2 col-12 col-sm-12">
                                <div class="counter">
                                    <span class="down" onClick='decreaseCount(event, this)'>-</span>
                                    <input type="text" value="1">
                                    <span class="up"  onClick='increaseCount(event, this)'>+</span>
                                </div>
                            </div>
                            <div class="product-removal col-md-1 col-1">
                                <button class="remove-product">
                              
                              X
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="product col-md-12 cart-child">
                        <div class="row custom">
                            
                            <div class="product-image col-md-3 col-12 col-sm-12 ">
                                <img src="https://c1.wallpaperflare.com/preview/127/63/589/perfume-fragrance-luxury-glass-thumbnail.jpg" alt="" title=""  />
                            </div>
                            <div class="product-details col-md-2 col-12 col-sm-12">
                                <div class="product-title">Office workshop</div>
                            </div>
                            <div class="product-price col-md-2 col-12 col-sm-12"><span>Price:</span>12.99 SAR</div>
                            
                            <div class="col-5 none">
                                </div>
                            <div class="product-line-price col-md-2 col-12 col-sm-12"><span>Total</span>625.98,30</div>
                            <div class="product-quantity col-md-2 col-12 col-sm-12">
                                <div class="counter">
                                    <span class="down" onClick='decreaseCount(event, this)'>-</span>
                                    <input type="text" value="1">
                                    <span class="up"  onClick='increaseCount(event, this)'>+</span>
                                </div>
                            </div>
                            <div class="product-removal col-md-1 col-1">
                                <button class="remove-product">
                             
                              X
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="product col-md-12 cart-child">
                        <div class="row custom">
                            
                            <div class="product-image col-md-3 col-12 col-sm-12 ">
                                <img src="https://c1.wallpaperflare.com/preview/127/63/589/perfume-fragrance-luxury-glass-thumbnail.jpg" alt="" title=""  />
                            </div>
                            <div class="product-details col-md-2 col-12 col-sm-12">
                                <div class="product-title">Office workshop</div>
                            </div>
                            <div class="product-price col-md-2 col-12 col-sm-12"><span>Price:</span>12.99 SAR</div>
                            
                            <div class="col-5 none">
                                </div>
                            <div class="product-line-price col-md-2 col-12 col-sm-12"><span>Total:</span>625.98,30</div>
                            <div class="product-quantity col-md-2 col-12 col-sm-12">
                                <div class="counter">
                                    <span class="down" onClick='decreaseCount(event, this)'>-</span>
                                    <input type="text" value="1">
                                    <span class="up"  onClick='increaseCount(event, this)'>+</span>
                                </div>
                            </div>
                            <div class="product-removal col-md-1 col-1">
                                <button class="remove-product">
                               
                              X
                                </button>
                            </div>
                        </div>
                    </div>
                        
                            
                    </div>
                   
                    <div class="col-lg-4">
                        <div class="row">
                            <div class="cart_shop col-lg-12">
                                <div class="totals">
                                    <div class="card1 col-lg-12 mt-3">
                                        <div class="card-body">
                                            <form>
                                                <div class="form-group">
                                                    <div class="sign"><label>Enter Promo Code</label></div> 
                                                    <div class="input-group"> <input type="text" class="form-control coupon" name="" placeholder="Apply the discount coupon here"> <span class="input-group-append"> <button class="btn btn-primary btn-apply coupon">Apply</button> </span> </div>
                                                </div>
                                            </form>
                                        </div>
                                        
                               
                                    
                                        <div class="totals-item">
                                           <!--  <h4>Cart Total</h4> -->
                                            <label>Shopping cost</label>
                                            <div class="totals-value" id="cart-subtotal">$71.97</div>
                                        </div>
                                        <div class="totals-item">
                                           <!--  <h4>Cart Total</h4> -->
                                            <label>Discount</label>
                                            <div class="totals-value" id="cart-subtotal">-$20</div>
                                        </div>
                                        <div class="totals-item">
                                           <!--  <h4>Cart Total</h4> -->
                                            <label>Tax</label>
                                            <div class="totals-value" id="cart-subtotal">5%</div>
                                        </div>
                                        <div class="totals-item">
                                           <!--  <h4>Cart Total</h4> -->
                                            <label class="estimated-total">Estimated total</label>
                                            <div class="totals-value" id="cart-subtotal">$100.9</div>
                                        </div>

                                        <!--  -->
                                        <div class="totals-item semi-head">
                                            <h5>Enter your address to view shipping options</h5>
                                            <label><u>Shipping cost calculation</u></label>
                                        </div>
                                        
                                        <div class="totals-item totals-item-total">
                                            <label>Total</label>
                                            <div class="totals-value" id="cart-total">90.57</div>
                                        </div>
                                    </div>
                                <!-- AHoh -->
                            </div>
                            <button class="checkout col-12 col-lg-12">Checkout</button>
                        </div>
                    </div>

                </div>
                
        </div>
	</div>

</section>
@include('front.includes.footer')

	  <script src="{{asset('assets/front/js/jquery-2.1.4.min.js')}}"></script>

	  <script data-require="jquery@3.1.1" data-semver="3.1.1" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
      <script src="{{asset('assets/front/js/jquery-3.3.1.min.js')}}"></script>
	  <script src="{{asset('assets/front/js/owlcarousel2.2.1.js')}}"></script>

<!--  -->
<script src="../../../assets/front/js/animation.js"></script>

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

<script>
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
</script>
</body>
</html>

