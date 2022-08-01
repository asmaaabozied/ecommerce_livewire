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
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

  <!-- Template CSS -->
  <link href="//fonts.googleapis.com/css?family=Oswald:300,400,500,600&display=swap" rel="stylesheet">
  <link href="//fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,900&display=swap" rel="stylesheet">
   @if(app()->getLocale()=='ar')
  
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-gXt9imSW0VcJVHezoNQsP+TNrjYXoGcrqBZJpry9zJt8PCQjobwmhMGaDHTASo9N" crossorigin="anonymous">
  <link href="{{asset('assets/front/css/style_rtl.css')}}" rel="stylesheet">
@endif
</head>
<body>

             <div class="container">
                 <div class="row">
                     <div class="col-md-12 col-md-offset-9">
                         <ul class="lang-list">
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
                   
<!--w3l-banner-slider-main-->
<section class=" accountdetails">
<div class="row">
    <div class="col-md-12">
        
   
    <a class="navbar-brand" href="#index.html">
                                <img src="https://ghailmain.alconciergeapp.com/assets/front/images/Logo.png" alt="Your logo" title="Your logo" style="">
                            </a>
                            
 </div>
 <div class="col-md-12">
     <h5 class=" account-heading-title"> account details </h5>
 </div>
</div>
                   <div class="row">

                           <div class=" col-lg-4 col-md-4 col-xs-12">

                            

                            <div class="account-form-section">
                              <h5 class="display-inline">public information </h5>
                              <button class="submit_account_btn password_btn">
                                  <i class="fa fa-pencil-square"></i>
                                  

                              </button>
                              
                              <div class="account-form">
                                <form method="POST" action=""  class="account-form">
                                
                                  <div class="form-group">
                                      <label for="first-name">First Name</label>
                                      <input type="name" name="first-name" id="first-name" placeholder="">   
                                  </div>

                                  <div class="form-group">
                                      <label for="last-name">Last Name</label>
                                      <input type="name" name="last" id="last-name" placeholder="">   
                                  </div>


                                  <div class="form-group">                         
                                      <label  for="mobile">Mobile Number</label>   
                                      <input type="text" name="mobile" id="mobile" placeholder="">                          
                                  </div>

                                  <div class="form-group">                         
                                      <label  for="email">Email</label>   
                                      <input type="email" name="email" id="email" placeholder="">                          
                                  </div>

                     
                                        
                                        
                                </form>
                              </div>
                            </div>
                            
                      
                           </div>
                                                    <div class=" col-lg-4 col-md-4 col-xs-12">

                               <div class="account-form-section">
                              <h5 class="display-inline">change password </h5>
                              <button class="submit_account_btn password_btn">
                                  <i class="fa fa-pencil-square-o"></i>

                              </button>
                              <div class="account-form">
                                <form method="POST" action=""  class="account-form">
                                
                     
                 

                                  <div class="form-group">
            <label class="col-md-4 control-label full_width_label">Current Password</label>
            <div class="col-md-12">
              <input id="password-current" type="password" class="form-control" name="password" value="secret">
              <span toggle="#password-current" class=" field-icon toggle-password"><img src="{{asset('assets/front/images/eye.png')}}" class="img-fluid" alt="" width="20px"/></span>
            </div>
          </div>    
          
                              <div class="form-group">
            <label class="col-md-4 control-label full_width_label">Password</label>
            <div class="col-md-12">
              <input id="password" type="password" class="form-control" name="password" value="secret">
              <span toggle="#password" class="field-icon toggle-password"><img src="{{asset('assets/front/images/eye.png')}}" class="img-fluid" alt="" width="20px"/></span>
            </div>
          </div>


                                  <div class="form-group">
            <label class="col-md-4 control-label full_width_label"> Password Confirmation</label>
            <div class="col-md-12">
              <input id="password-confirmation" type="password" class="form-control" name="password" value="secret">
              <span toggle="#password-confirmation" class="field-icon toggle-password"><img src="{{asset('assets/front/images/eye.png')}}" class="img-fluid" alt="" width="20px"/></span>
            </div>
          </div>      
                                  
                                        
                                        
                                </form>
                              </div>
                            </div>
                           </div>
                          
             </div>
                
  

</section>
</div>
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

<script type="text/javascript">
$(document).on('click', '.toggle-password', function() {

  $(this).toggleClass("fa-eye fa-eye-slash");
  var input = $($(this).attr("toggle"));

  if (input.attr("type") == "password") {
    input.attr("type", "text");
  } else {
    input.attr("type", "password");
  }
});

</script>
<style>
    .accountdetails{
        padding:20px !important;
    }
    h5.account-heading-title{
            font-weight: 100;
    /* text-align: center; */
    padding-left: 25px;
    }
      ul.lang-list{  display: inline-flex;
    list-style-type: none;
    float:right;
      }
      
element.style {
}
.lang-list li {
    margin-left: 5px;
    background-color: #E4E4E4;
    padding: 1px 5px;
    border-radius: 5px;
}
</style>
</body>
</html>

