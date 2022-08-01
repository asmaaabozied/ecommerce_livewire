
<header class="tophny-header">

			<!--/nav-->
				<div class="container ">
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-3 col-7 col-xs-4 col-sm-4">
                            <a class="navbar-brand" href="{{url('/')}}">
                                @if(App::getlocale() == 'ar')


                                <img src="{{asset('assets/front/images/Artboard ظ_ô 1.png')}}" class="logo-img" alt="Your logo" title="Your logo" style="" />
                                @else
                                  <img src="{{asset('assets/front/images/Logo.png')}}"  class="logo-img"  alt="Your logo" title="Your logo" style="" />
                                @endif
                            </a>
                        </div>
                        <div class="col-xl-1 col-lg-1 col-md-2 d-none d-sm-block d-sm-none d-md-block">
                           <div class="search-container">
                              <form action="/search" method="get">
                                <input class="search" id="searchleft" type="search" name="q" placeholder="Search">
                                <label class="button searchbutton" for="searchleft"><span class="mglass">&#9906;</span></label>
                              </form>
                            </div>

                        </div>
                        <div class="col-xl-5 col-lg-5   d-none d-sm-block d-sm-none d-md-block d-md-none d-lg-block">
                            <nav class="stroke">
                            <ul class="navbar-nav mainmenu fill">
                              <li class="nav-item">
                               <!--<img src="{{asset('assets/front/images/icon/Group 3579.png')}}" class="img-fluid" alt="" /> -->
                                <a class="nav-link" href="{{ route('homepage') }}">shop</a>
                              </li>
                              <li class="nav-item">
                              <!-- <img src="{{asset('assets/front/images/icon/Group 3580.png')}}" class="img-fluid" alt="" /> -->
                                <a class="nav-link" href="{{ route('MerchantServices') }}">Merchant Services</a>
                              </li>
                              <li class="nav-item">
                              <!-- <img src="{{asset('assets/front/images/icon/Group 3583.png')}}" class="img-fluid" alt="" /> -->
                                <a class="nav-link" href="{{ route('homepage') }}">perfume</a>
                                </li>

                              <!-- <li class="nav-item">
                              <img src="{{asset('assets/front/images/icon/Group 3584.png')}}" class="img-fluid" alt="" />
                                <a class="nav-link" href="contact.html">cart</a>
                              </li> -->
                            </ul>
                            </nav>
				               	</div>
			        	<div class="col-xl-2 col-lg-2 col-md-4 d-none d-sm-block d-sm-none d-md-block  ">
                          <ul class="top-hnt-right-content  social_mobile">

                               <!--<ul class="top-hnt-right-content col-xl-2 col-lg-2 col-md-3 col-3 social_mobile">-->
                            <li class="button-log usernhy">
                              <a class="btn-open" href="#">
                                <span class="far fa-heart" aria-hidden="true"></span>
                              </a>
                            </li>
                            <li class="transmitvcart galssescart2 cart cart box_1">
                              <form action="#" method="post" class="last">
                                <input type="hidden" name="cmd" value="_cart">
                                <input type="hidden" name="display" value="1">
                                <button class="top_transmitv_cart" type="submit" name="submit" value="">

                                  <span class="fas fa-cart-plus"></span>
                                </button>
                              </form>
                            </li>

                            <li class="button-log usernhy">
                              <a class="btn-open" href="{{ route('Register') }}">
                                <span class="fas fa-user-alt" aria-hidden="true"></span>
                              </a>
                            </li>

                          </ul>
                             <!--//right-->
                        </div>
                        <div class="col-xl-1 col-lg-1 col-md-2 col-1  col-xs-4 col-sm-4 d-flex justify-content-end align-items-center ">
                            <button type="button" class="hamburger animated fadeInLeft " onclick="openNav()" data-toggle="offcanvas" id="sidebarbtn">

                            </button>
                            <!-- Sidebar -->
                            <div id="mySidenav" class="sidenav">
                                        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                                        <a class="navbar-brand" href="{{url('/')}}">
                                @if(App::getlocale() == 'ar')


                                <img src="{{asset('assets/front/images/Artboard ظ_ô 1.png')}}" class="logo-img" alt="Your logo" title="Your logo" style="" />
                                @else
                                  <img src="{{asset('assets/front/images/Logo.png')}}"  class="logo-img"  alt="Your logo" title="Your logo" style="" />

                                @endif
                            </a>

                                            <a href="{{ route('homepage') }}">shop</a>
                                            <a href="{{url('/manufacturing')}}">Perfume manufacturing</a>
                                            <a href="{{ route('MerchantServices') }}">Merchant Services</a>
                                            <a href="{{url('/bankaccounts')}}">Bank Accounts</a>
                                            <a href="{{url('/checkout')}}">checkout</a>
                                                                                        <a href="{{url('/partnerrequest')}}">partnerrequest</a>
                                             <a href="{{ route('accountDetails') }}">myaccount</a>
                                            <a href="{{url('/accountaddress')}}">address</a>
                                            <!--<a href="{{url('/packages')}}">packages</a>-->
                                            <a href="{{url('/Perfumeratings')}}">Perfumeratings</a>
                                            <a href="{{url('/education')}}">education</a>
                                            <a href="{{url('/cart')}}">cart</a>
                                            <a href="#">favourite</a>
                                            <a href="{{url('/workshop_online')}}">workshop_online</a>
                                            <a href="{{url('/workshop_office')}}">workshop_office</a>




                                            <!--<ul class="social-footerhny mt-4">-->

                                            <!--    <li><a class="youtube" href="#"><img src="{{asset('assets/front/images/Group 1111.png')}}" class="img-fluid" alt="" /></a>-->
                                            <!--    </li>-->
                                            <!--    <li><a class="facebook" href="#"><img src="{{asset('assets/front/images/Group1113.png')}}" class="img-fluid" alt="" /></a>-->
                                            <!--    </li>-->
                                            <!--    <li><a class="google" href="#"><img src="{{asset('assets/front/images/Group1112.png')}}" class="img-fluid" alt="" /></a>-->
                                            <!--    </li>-->
                                            <!--    <li><a class="twitter" href="#"><img src="{{asset('assets/front/images/Group1110.png')}}" class="img-fluid" alt="" /></a>-->
                                            <!--    </li>-->

                                            <!--</ul>-->

                            </div>
                        </div>

                    </div>




        </div>

			<!--//nav-->
		</header>
