
@include('layouts.head')
<!--w3l-banner-slider-main-->
<section id="wrapper" class="w3l-banner-slider-main">
	<div class="top-header-content">
	   @include('layouts.header')
     <div class="bannerhny-content">

<!--/banner-slider-->

<div class="content-baner-inf" dir="ltr">
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1" class=""></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2" class=""></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="3" class=""></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
         <img src="{{asset('assets/front/images/img.webp')}}" class="img-fluid" alt="" />
      </div>
      <div class="carousel-item">
         <img src="{{asset('assets/front/images/img.webp')}}" class="img-fluid" alt="" />
      </div>
      <div class="carousel-item ">
          <img src="{{asset('assets/front/images/img.webp')}}" class="img-fluid" alt="" />
      </div>
      <div class="carousel-item ">
        <img src="{{asset('assets/front/images/img.webp')}}" class="img-fluid" alt="" />
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<!--//banner-slider-->


</div>
		
	</div>

</section>
<!-- //w3l-banner-slider-main -->
      @include('front.includes.perfume')
            @include('front.includes.banner1',['img'=>'assets/front/images/banner1.jpeg'])

      @include('front.includes.themostwanted')
                  @include('front.includes.banner1',['img'=>'assets/front/images/banner2.jpeg'])

      @include('front.includes.offers')

      @include('front.includes.oriental')
      @include('front.includes.french')
	  @include('front.includes.niche')
	                    @include('front.includes.banner1',['img'=>'assets/front/images/banner3.jpg'])

      @include('front.includes.packages')
      @include('front.includes.recommendation')
            @include('front.includes.brands')

      @include('front.includes.reviews')
      @include('front.includes.newsletter')
      @include('front.includes.footer')

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
        src="https://cdn.rtlcss.com/bootstrap/3.3.7/js/bootstrap.min.css"
        integrity="sha384-B4D+9otHJ5PJZQbqWyDHJc6z6st5fX3r680CYa0Em9AUG6jqu5t473Y+1CTZQWZv"
       crossorigin="anonymous">
    </script>
@endif

</body>
</html>

