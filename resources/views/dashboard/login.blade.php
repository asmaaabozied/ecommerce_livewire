<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Dashboard') }}</title>
        <!-- Favicon -->
        <link href="{{ asset('assets/front/images/brand/favicon.png') }}" rel="icon" type="image/png">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
        <!-- Extra details for Live View on GitHub Pages -->

        <!-- Icons -->
        <!-- Argon CSS -->
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="{{asset('assets/front/vendor/nucleo/css/nucleo.css')}}">
        <link rel="stylesheet" href="{{asset('assets/front/vendor/@fortawesome/fontawesome-free/css/all.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/front/css/argon.css')}}">


    </head>
    <body>
        
        <div class="main-content1">
        <ul class="local">
						@foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
							<li>
								<a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
									{{ $properties['native'] }}
								</a>
							</li>
						@endforeach
					</ul>
           <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                        <div class="card py-3 px-2">
                            <p class="text-center mb-3 mt-2"><a><img src="{{asset('assets/front/images/icons/Mask Group 11.png')}}" class="img-fluid" alt="" /></a></p>
                        <div class="bulr">
                            <div class="division">
                                <div class="row">
                                    
                                    <div class="col-12"><span>welcome</span></div>
                                    
                                </div>
                            </div>
                            <form class="myform"   method="POST" action="{{ route('login') }}">

                                <div class="form-group"> <input type="email" class="form-control" placeholder="Email"> </div>
                                <div class="form-group"> 
                                            <div class="input-group" id="show_hide_password" style="box-shadow: none;">
                                            <input class="form-control" type="password" placeholder="password">
                                            <div class="input-group-addon">
                                                <a href=""><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
                                            </div>
                                            </div>
                                            <div class="row">
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group form-check"> <input type="checkbox" class="form-check-input" id="exampleCheck1"> <label class="form-check-label" for="exampleCheck1">Remember me</label> </div>
                                                    </div>
                                            </div>
                                </div>
                               
                                <div class="form-group mt-3"> <button type="button" class="btn btn-block btn-primary"><small><i class="far fa-user pr-2"></i>login</small></button> </div>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Argon JS -->
        
        <script src="{{asset('assets/front/vendor/jquery/dist/jquery.min.js')}}"></script>
        <script src="{{asset('assets/front/js/jquery-3.3.1.min.js')}}"></script>

        <script src="{{asset('assets/front/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('assets/front/js/popper1.16.min.js')}}"></script>
        <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>

        <script src="{{asset('assets/front/js/argon.js')}}"></script>
        <script>
            // password
            $(document).ready(function() {
            $("#show_hide_password a").on('click', function(event) {
                event.preventDefault();
                if($('#show_hide_password input').attr("type") == "text"){
                    $('#show_hide_password input').attr('type', 'password');
                    $('#show_hide_password i').addClass( "fa-eye-slash" );
                    $('#show_hide_password i').removeClass( "fa-eye" );
                }else if($('#show_hide_password input').attr("type") == "password"){
                    $('#show_hide_password input').attr('type', 'text');
                    $('#show_hide_password i').removeClass( "fa-eye-slash" );
                    $('#show_hide_password i').addClass( "fa-eye" );
                }
            });
            });
        </script>

    </body>
</html>