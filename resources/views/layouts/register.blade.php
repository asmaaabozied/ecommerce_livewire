
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
    <img class="wave" src="{{asset('assets/front/images/wave2.png')}}">
    
	<div class="custom-container">
		<div class="img">
			<img src="{{asset('assets/front/images/bg.svg')}}">
            
		</div>
		<div class="login-content">
			<form action="index.html" class="form-face login-form col-md-12">
				<h2 class="title">Login</h2>
           		
				<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Username</h5>
           		   		<input type="text" class="my-input">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input type="password" class="my-input">
            	   </div>
            	</div>
            	<a href="#">Don't have an account ? <span onclick="showSignup()">sign up</span> </a>
            	<input type="submit" class="btn form-btn" value="Login">
            </form>
			<form action="index.html" class="form-face signUp-form col-12">
				<h2 class="title">Sign up</h2>
				<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-at"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Email</h5>
           		   		<input type="email" class="my-input">
           		   </div>
           		</div>
				<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>First Name</h5>
           		   		<input type="text" class="my-input">
           		   </div>
           		</div>
				<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Last Name</h5>
           		   		<input type="text" class="my-input">
           		   </div>
           		</div>
				
				<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-store"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Store Name</h5>
           		   		<input type="text" class="my-input">
           		   </div>
           		</div>
				<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-link"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Store Link</h5>
           		   		<input type="text" class="my-input">
           		   </div>
           		</div>
				<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-phone"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Phone</h5>
           		   		<input type="text" class="my-input">
           		   </div>
           		</div>
				<a href="#">Already have an account ? <span onclick="showLogin()">Login</span></a>
            	<input type="submit" class="btn form-btn" value="Sign up">

			</form>
        </div>
		
    </div>

<script>
    	const login = document.querySelector(".login-form")
		const signup = document.querySelector(".signUp-form")
		const formContainer = document.querySelector(".login-content")
        const inputs = document.querySelectorAll(".my-input");

		function showSignup(){		
			formContainer.classList.toggle("is-flipped");
            login.style.display="none"
            signup.style.display="block"
		}
		function showLogin(){
			formContainer.classList.toggle("is-flipped");
            signup.style.display="none"
            login.style.display="block"
		}

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

	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
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

