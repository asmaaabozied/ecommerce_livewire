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
    </div>

    
</section>
<!-- //w3l-banner-slider-main -->

<section class="partner-accounts">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3>Partners and Investment</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatibus provident sunt consequuntur facilis expedita quod vel impedit magnam voluptate ex?</p>
            </div>
        </div>
        
            <div class="partners-account">
                
                <div class="partner-form-section">
                    
                    
                    <form method="POST" action=""  class="partner-form">
                                
                        <div class="form-group">
                            <label for="full-name">Full Name</label>
                            <input type="name" name="name" id="full-name" placeholder="">   
                        </div>

                        <div class="form-group">                         
                            <label  for="city">City</label>   
                            <input type="text" name="city" id="city" placeholder="">                          
                        </div>
                        
                        <div class="form-group">                         
                            <label  for="email">Email</label>   
                            <input type="email" name="email" id="email" placeholder="">                          
                        </div>

                        <div class="form-group">
                            <label for="age">Age</label>
                            <input type="text" name="age" id="age" placeholder="">   
                        </div>

                        <div class="form-group">                         
                            <label  for="mobile">Mobile Number</label>   
                            <input type="text" name="mobile" id="mobile" placeholder="">                          
                        </div>

                        <div class="form-group">
                            <label for="money-invest">Money Investment</label>
                            <input type="text" name="money-invest" id="money-invest" placeholder="">   
                        </div>

                         <div class="form-group">                         
                            <label  for="invest-experience">Investment Experience</label>   
                            <input type="text" name="invest-experience" id="invest-experience" placeholder="">                          
                        </div>
                    
                        <div class="form-group ">
                            
                        <input type="submit" value="Register" name="Register">
                            
                        </div>                          
                    </form>
                </div>
            </div>     
            </div>
        </div>
    </div>
</section>
   
     <!--  @include('front.includes.reviews') -->
      @include('front.includes.newsletter')
      @include('front.includes.footer')
      <script>
            const inputs = document.querySelectorAll(".my-input");
            function addcl(){
            let parent = this.parentNode.parentNode;
            parent.classList.add("focus");
        }

        function remcl(){
            let parent = this.parentNode.parentNode;
            if(this.value == ""){
                parent.classList.remove("focus");
            }
        }
        inputs.forEach(input => {
            input.addEventListener("focus", addcl);
            input.addEventListener("blur", remcl);
        });
      </script>

<script src="{{asset('assets/front/js/jquery-2.1.4.min.js')}}"></script>
<script src="{{asset('assets/front/js/jquery-3.3.1.min.js')}}"></script>

 <!-- cart-js -->
 <script src="{{asset('assets/front/js/minicart.js')}}"></script>

<!--pop-up-box-->
<script src="{{asset('assets/front/js/jquery.magnific-popup.js')}}"></script>

<script src="{{asset('assets/front/js/owlcarousel2.2.1.js')}}"></script>
<script src="{{asset('assets/front/js/wow.min.js')}}"></script>
<script src="{{asset('assets/front/js/wow.js')}}"></script>
<script src="{{asset('assets/front/js/all.min.js')}}"></script>
<script src="{{asset('assets/front/js/fontawesome.min.js')}}"></script>
<script src="{{asset('assets/front/js/popper1.16.min.js')}}"></script>

<script src="{{asset('assets/front/js/bootstrap.min.js')}}"></script>

<script src="{{asset('assets/front/js/main.js')}}"></script>
@if(app()->getLocale()=='ar')
    <script
        src="https://cdn.rtlcss.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-B4D+9otHJ5PJZQbqWyDHJc6z6st5fX3r680CYa0Em9AUG6jqu5t473Y+1CTZQWZv"
        crossorigin="anonymous">
    </script>
@endif
</body>
</html>

