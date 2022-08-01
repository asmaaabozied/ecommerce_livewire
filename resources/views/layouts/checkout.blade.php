

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
    <header class="tophny-header toph">
      <div class="container serarc-fluid">
          <div class="row">
            @include('layouts.header')
                  <!-- Sidebar -->
                  <div id="mySidenav" class="sidenav">
                              <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                              <a class="navbar-brand logo_layer" href="#index.html">
                                      <img src="https://c1.wallpaperflare.com/preview/127/63/589/perfume-fragrance-luxury-glass-thumbnail.jpg" alt="Your logo" title="Your logo" style="height:150px;" />
                                              </a> 
                                  <a href="#">Homepage</a>
                                  <a href="#">Shop</a>
                                  <a href="#">Perfume manufacturing</a>
                                  <a href="{{ route('MerchantServices') }}">Merchant Services</a>
                                  <a href="#">Bank Accounts</a>
                                  <a href="#">checkout</a>
                                  <ul class="social-footerhny mt-lg-5 mt-4">

                                      <li><a class="youtube" href="#"><img src="{{asset('assets/front/images/Group 1111.png')}}" class="img-fluid" alt="" /></a>
                                      </li>
                                      <li><a class="facebook" href="#"><img src="{{asset('assets/front/images/Group1113.png')}}" class="img-fluid" alt="" /></a>
                                      </li>
                                      <li><a class="google" href="#"><img src="{{asset('assets/front/images/Group1112.png')}}" class="img-fluid" alt="" /></a>
                                      </li>
                                      <li><a class="twitter" href="#"><img src="{{asset('assets/front/images/Group1110.png')}}" class="img-fluid" alt="" /></a>
                                      </li>

                                  </ul>

                  </div>
              </div>        
          </div>            
      </div>
    </header>
    <div class="bannerhny-content cartban">
              <!--/banner-slider-->
    <div class="content-baner-inf" style="margin-top:3rem">
      <div class="container">
            <div class="row">
              <div class=" col-lg-9 col-md-12">
                <div class="shopping-cart">
                  <div class="column-labels">
                    <div class="row">
                          <label class="product-removal col-md-1"></label>
                          <label class="product-image col-md-3">Product</label>
                          <label class="product-details col-md-3">Product Name</label>
                          <label class="product-price col-md-2">Price</label>
                          <label class="product-quantity col-md-2">Quantity</label>
                          <label class="product-line-price col-md-1">Total</label>
                      </div>
                  </div>

                  <div class="product ">
                    <div class="row">
                          <div class="product-removal col-md-1 col-1">
                              <button class="remove-product">
                                <i class="far fa-trash-alt"></i>
                              </button>
                          </div>
                          <div class="product-image col-md-3 col-5">
                              <img src="{{asset('assets/front/images/workshop.png')}}" alt="" title=""  />
                          </div>
                          <div class="product-details col-md-3 col-4">
                              <div class="product-title">Office workshop</div>
                          </div>
                          <div class="product-price col-md-2 col-2">12.99 SAR</div>
                          <div class="product-quantity col-md-2 col-5">
                                <div class="counter">
                                    <span class="down" onClick='decreaseCount(event, this)'>-</span>
                                    <input type="text" value="1">
                                    <span class="up"  onClick='increaseCount(event, this)'>+</span>
                                </div>
                          </div>
                          <div class="col-5 none">
                                </div>
                          <div class="product-line-price col-md-1 col-2">25.98</div>
                        </div>
                  </div>

                  <div class="product ">
                    <div class="row">
                          <div class="product-removal col-md-1 col-1">
                            <button class="remove-product">
                              <i class="far fa-trash-alt"></i>
                              </button>
                          </div>
                          <div class="product-image col-md-3 col-5">
                            <img src="{{asset('assets/front/images/workshop.png')}}" alt="" title=""  />
                          </div>
                          <div class="product-details col-md-3 col-4">
                              <div class="product-title">Office workshop</div>
                          </div>
                          <div class="product-price col-md-2 col-2">45.99 SAR</div>
                          <div class="product-quantity col-md-2 col-5">
                              <div class="counter">
                                  <span class="down" onClick='decreaseCount(event, this)'>-</span>
                                  <input type="text" value="1">
                                  <span class="up"  onClick='increaseCount(event, this)'>+</span>
                              </div>                                   
                          </div>
                          <div class="col-5 none">
                                </div>
                          <div class="product-line-price col-md-1 col-2">45.99</div>
                    </div>
                  </div>
                    
                </div>
                <div class="checkout-form-section">
                  <h3>Checkout Details</h3>
                  <div class="checkout-form">
                    <form method="POST" action=""  class="partner-form">
                    
                      <div class="form-group">
                          <label for="first-name">First Name</label>
                          <input type="name" name="first-name" id="first-name" placeholder="">   
                      </div>

                      <div class="form-group">
                          <label for="last-name">Last Name</label>
                          <input type="name" name="last" id="last-name" placeholder="">   
                      </div>

                      <div class="form-group">                         
                          <label  for="company">Company Name (optional)</label>   
                          <input type="text" name="company" id="company" placeholder="">                          
                      </div>

                      <div class="form-group">                         
                          <label  for="country">Country / Region</label>   
                          <select name="country" id="country">
                            <option value="Saudi Arabia">Saudi Arabia</option>
                            <option value="country1">country1</option>
                            <option value="country2">country2</option>
                            <option value="country3">country3</option>
                            <option value="country4">country4</option>
                          </select>                          
                      </div>

                      <div class="form-group"> 
                        <label  for="shipping-address">Shipping Address</label> 
                        <div class="address"> 
                          <input type="radio" name="shipping-address" id="same-address" value="ship to your address">
                          <label  for="same-address">ship to your address</label>  
                        </div>   
                        <div class="address">
                          <input type="radio" name="shipping-address" id="store-address" value="ship to merchant's store ">
                          <label  for="store-address">ship to merchant's store</label>
                        </div>
                      </div>   
                      
                      <div class="form-group"> 
                        <label  for="different-address">Choose Different Address</label>
                        <div class="address">
                          <input type="checkbox" name="change-address" id="change-address" value="ship to your address"> 
                        <label  for="change-address">ship to different address</label> 
                          
                        </div>
                      </div>

                      <div class="form-group">
                          <label for="street-address">street address / district</label>
                          <input type="text" name="street-address" id="street-address" placeholder="house number and street name">
                            
                      </div>

                      <div class="form-group">
                          
                          <label for="apartment-no">Apartment number (optional)</label>
                          <input type="text" name="street-address" id="apartment-no" placeholder="appartment number / unit (optional)">   
                      </div>
                                                
                      <div class="form-group">
                          <label for="city">City</label>
                          <input type="text" name="city" id="city" placeholder="">       
                      </div>

                      <div class="form-group">
                          <label for="region">Region</label>
                          <input type="text" name="region" id="region" placeholder="">       
                      </div>

                      <div class="form-group">                         
                          <label  for="mobile">Mobile Number</label>   
                          <input type="text" name="mobile" id="mobile" placeholder="">                          
                      </div>

                      <div class="form-group">                         
                          <label  for="email">Email</label>   
                          <input type="email" name="email" id="email" placeholder="">                          
                      </div>


                      


                      
                      
                      
                      <div class="form-group"> 
                        <label  for="shipping-address">Payment methods</label> 
                        <div class="payments"> 
                          <input type="radio" name="payment-method" id="e-payments" value="E-payments">
                          <label  for="e-payments">
                            <div >
                              <h3>E-Payment</h3>
                              <p>pay via E-payments Gateways</p>
                              <div class="pay-icons">
                                <img src="{{asset('assets/front/images/Master-Card-2.png')}}" alt="">
                                <img src="{{asset('assets/front/images/Amazon-2.png')}}" alt="">
                                <img src="{{asset('assets/front/images/Visa-2.png')}}" alt="">
                              </div>
                            </div>
                          </label>  
                        </div>   
                        <div class="payments">
                          <input type="radio" name="payment-method" id="bank-transfer" value="ship to merchant's store ">
                          <label  for="bank-transfer">Bank Transfer</label>
                        </div>
                      </div>  

                      

                      <div class="form-group">                         
                          <label  for="other-notes">other notes</label>   
                          <textarea  rows="5"   id="other-notes" placeholder="other notes">   </textarea>                       
                      </div>
                  
                      <div class="form-group ">
                          
                              <input type="submit" value="Checkout" name="Register">
                          
                      </div>
                            
                            
                    </form>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-md-12">
                <div class="row">
                    <div class="cart_shop col-lg-12">
                        <div class="totals">
                                <div class="totals-item">
                                    <h4>Cart Total</h4>
                                    <label>Subtotal</label>
                                    <div class="totals-value" id="cart-subtotal">71.97</div>
                                </div>
                                <div class="totals-item">
                                    <h5>Enter your address to view shipping options</h5>
                                    <label><u>Shipping cost calculation</u></label>
                                </div>
                                
                                <div class="totals-item totals-item-total">
                                    <label>Total</label>
                                    <div class="totals-value" id="cart-total">90.57</div>
                                </div>
                        </div>
                            
                        </div>
                    <button class="checkout col-lg-12">Checkout</button>

                    <div class="card1 col-lg-12 mt-3">
                                        <div class="card-body">
                                            <form>
                                                <div class="form-group"> <label>discount coupon</label>
                                                    <div class="input-group"> <input type="text" class="form-control coupon" name="" placeholder="Apply the discount coupon here"> <span class="input-group-append"> <button class="btn btn-primary btn-apply coupon">Apply</button> </span> </div>
                                                </div>
                                            </form>
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

<script>
$('document').ready(function(){
   
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
});
   
</script>
</body>
</html>

