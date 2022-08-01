

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

  <link href="//fonts.googleapis.com/css?family=Oswald:300,400,500,600&display=swap" rel="stylesheet">
  <link href="//fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,900&display=swap" rel="stylesheet">
  @if(app()->getLocale()=='ar')
  
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-gXt9imSW0VcJVHezoNQsP+TNrjYXoGcrqBZJpry9zJt8PCQjobwmhMGaDHTASo9N" crossorigin="anonymous">
  <link href="{{asset('assets/front/css/style_rtl.css')}}" rel="stylesheet">
@endif
</head>
<body>
<!--w3l-banner-slider-main-->
<section id="wrapper" class="w3l-banner-slider-main tickets">
	<div class="top-header-content">
	@include('layouts.header')
		</br></br>
		<div class="bannerhny-content1">
			<div class="single_slider  d-flex align-items-center slider_bg_1 orders">
				<div class="container">
					<div class="row align-items-flex-start">
                    @include('front.includes.newnav')
						<div class="col-xl-9 col-lg-9 col-md-7 col-12">
                        <section class="roles">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-12">
                                            
                                            <div class="card">
                                                    <div class="card-header card-header-primary card-header-icon">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                    
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                                    <div class="card-icon">
                                                                                            <img src="{{ asset('assets/front/images/Group 41.png') }}" class="img-fluid" width="35px">
                                                                                    </div>
                                                                                <h4 class="card-title">Tickets</h4>
                                                                        </div>
                                                                        <!-- <div class="col-xl-6 col-md-6 col-6">
                                                                        <a data-toggle="modal" onclick="RenderActions('')" data-target="#modalUser" class="pull-right btn">add user<i class="fa fa-arrow-circle-right"></i></a>
                                                                        </div> -->
                                                                </div>
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                <div class="card-body">
                                                    <div class="toolbar">
                                                        <!--        Here you can write extra buttons/actions for the toolbar              -->
                                                    </div>
                                                    <div class="material-datatables table-responsive table">
                                                        <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                                                            <thead>
                                                                <tr>
                                                                    <th>order number</th>
                                                                    <th>Date</th>
                                                                    <th>subject</th>
                                                                    <th>address</th>
                                                                    <th>type</th>
                                                                    <th class="disabled-sorting text-right"></th>
                                                                </tr>
                                                            </thead>
                                                            
                                                            <tbody>
                                                                
                                                            @include('front.includes.rowticket')
                                                            @include('front.includes.rowticket')
                                                            @include('front.includes.rowticket')
                                                            @include('front.includes.rowticket')
                                                            @include('front.includes.rowticket')
                                                                
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <!-- end content-->
                                            </div>
                                            <!--  end card  -->
                                        </div>
                                        <!-- end col-md-12 -->
                                        </div>
                                        <!-- end row -->
                                    </div>
                                    <!-- /.box -->
                                </div>
                                <!-- create -->
                                <!-- <div id="modalUser" class="modal fade" role="dialog" data-backdrop="false">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div id="OpenDialog" class="modal-body" style="background-color: #1B222C;">
                                                <div class="card ">
                                                    <div class="card-header card-header-rose card-header-icon">
                                                        <div class="card-icon">
                                                        <img src="{{ asset('assets/front/images/icons/Group 109.png') }}" class="img-fluid" width="35px">
                                                        </div>
                                                        <div class="row">
                                                                <div class="col-md-10 col-9">
                                                                    <h4 class="card-title">Support Request</h4>
                                                                </div>
                                                            <div class="col-md-2 col-3">
                                                                    <button type="button" class="btn btn-fill" data-dismiss="modal" style="font-size: 25px;"><i class="fa fa-times-circle"></i></button>
                                                                    </div>
                                                        </div>
                                
                                                    </div>
                                                <form action="" class="form-horizontal" enctype="" id="FormProCreate" method="post">    
                                                        <div class="card-body ">
                                                        <div class="row">
                                                            <div class="col-xl-6">
                                                                <div class="form-group bmd-form-group">
                                                                
                                                                                <label for="Name" class="bmd-label-floating">employee name</label>
                                                                    
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                        <input class="form-control" maxlength="25" required="" type="text" data-val="true" data-val-required="The Name field is required." placeholder="Position name" id="Name" name="Name" value="" spellcheck="false" data-ms-editor="true">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-6">
                                                                <div class="form-group bmd-form-group">
                                                                    <label class="bmd-label-floating">position</label>
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <select class="form-control" id="GenderId" name="GenderId" placeholder="choose validities">
                                                                                        <option value="1">one</option>
                                                                                        <option value="2">two</option>
                                                                                        <option value="3">three</option>
                                                                                </select>
                                                                    </div>
                                                                </div>
                                                        
                                                                </div>
                                                                </div>
                                                        </div>
                                
                                                        <div class="row">
                                                            <div class="col-xl-6">
                                                                <div class="form-group bmd-form-group">
                                                                
                                                                                <label for="Name" class="bmd-label-floating">user name</label>
                                                                    
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                        <input class="form-control" maxlength="25" required="" type="text" data-val="true" data-val-required="The Name field is required." placeholder="user name" id="Name" name="Name" value="" spellcheck="false" data-ms-editor="true">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-6">
                                                                    <form>
                                                                        <div class="form-group">
                                                                            <label>Password</label>
                                                                            <div class="input-group" id="show_hide_password">
                                                                            <input class="form-control" type="password">
                                                                            <div class="input-group-addon">
                                                                                <a href=""><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
                                                                            </div>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                            </div>
                                                        </div>
                                                        <div class="form-group bmd-form-group">
                                                            <label class="bmd-label-floating">add other validities</label>
                                                            <div class="row">
                                                                <div class="col-md-10">
                                                                    <select class="form-control" id="GenderId" name="GenderId" placeholder="choose validities">
                                                                                <option value="1">one</option>
                                                                                <option value="2">two</option>
                                                                                <option value="3">three</option>
                                                                        </select>
                                                            </div>
                                                        </div>
                                                
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                            <label class="container">This text is an example of text that can be replaced by text .
                                                                <input type="checkbox" checked="checked" name="checkbox">
                                                                <span class="checkmark"></span>
                                                            </label>
                                                            <label class="container">This text is an example of text that can be replaced by text .
                                                                <input type="checkbox" checked="checked" name="checkbox">
                                                                <span class="checkmark"></span>
                                                            </label>
                                                            <label class="container">This text is an example of text that can be replaced by text .
                                                                <input type="checkbox" checked="checked" name="checkbox">
                                                                <span class="checkmark"></span>
                                                            </label>
                                                            <label class="container">This text is an example of text that can be replaced by text .
                                                                <input type="checkbox" checked="checked" name="checkbox">
                                                                <span class="checkmark"></span>
                                                            </label>
                                                            </div>
                                                        </div>
                                                
                                                
                                                    </div>
                                                        <div class="card-footer ">
                                                            <button class="btn btn-fill btn-rose pull-right" type="button" onclick="CreateUser()">Add an user</button>
                                                        </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                             
                        </section>
						
						</div>
						
					</div>
				</div>
			</div>
		</div>

</section>

@include('front.includes.footer')

	  <script src="{{asset('assets/front/js/jquery-2.1.4.min.js')}}"></script>
<script src="{{asset('assets/front/js/jquery-3.3.1.min.js')}}"></script>
 <!-- cart-js -->
 <script src="{{asset('assets/front/js/minicart.js')}}"></script>

<script src="{{asset('assets/front/js/jquery.magnific-popup.js')}}"></script>
<!--//pop-up-box-->

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

