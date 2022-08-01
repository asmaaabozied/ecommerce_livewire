@extends('dashboard.layouts.app',['page_title' => 'الأخطاء'])

@section('content')
   <div class="container">
       <div class="row">
           <div class="col-xl-12">
                
                <div class="container-fluid mt-0 perfumes">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">sales movement</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">payment information</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="toprated-tab" data-toggle="tab" href="#toprated" role="tab" aria-controls="toprated" aria-selected="false">Invoices</a>
                        </li>
                    
                    </ul>
                   
                            <div class="container-fluid" style="padding: 0px !important;">
                            <div class="row">
                                    <div class="col-md-12">
                                        
                                        <div class="card">
                                                <div class="card-header card-header-primary card-header-icon">
                                                    <div class="row">
                                                        <div class="col-xl-4 col-md-12 col-12">
                                                        <div class="card-icon">
                                                            <img src="{{ asset('assets/front/images/icons/Group 281.png') }}" class="img-fluid" width="35px">
                                                        </div>
                                                            <h4 class="card-title">fahd el turky<span>   (290)</span> </h4>
                                                        </div>
                                                        
                                                        <div class="col-xl-2 col-12"></div>
                                                        <div class="col-xl-6 col-md-12 col-12 date3">
                                                        
                                                            <h4 class="card-title date">Date <span style="margin-left: 5px;"> <input id="datepicker" placeholder="Choose the time" /></span> <span style="margin-left: 5px;"><img src="{{ asset('assets/front/images/icons/Group 68.png') }}" class="img-fluid btn" width="35px" style="cursor: pointer;padding: 0px;"></span></h4>
                                                    
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-content" id="myTabContent">
                                                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                                        <div class="card-body">
                                                        
                                                                <div class="row">
                                                                        <div class="col-xl-9">
                                                                            <!-- update -->
                                                                            
                                                                                <div class="container-fluid">
                                                                                            <div class="header-body">
                                                                                                <!-- Card stats -->
                                                                                                <div class="row">
                                                                                                    <div class="col-xl-6 col-lg-6">
                                                                                                        <div class="card card-stats mb-4 mb-xl-0" style="background-color: #323946;">
                                                                                                            <div class="card-body">
                                                                                                                <div class="row">
                                                                                                                    <div class="col-auto">
                                                                                                                        <span><img src="{{ asset('assets/front/images/icons/Group 280.png') }}" class="img-fluid icon-shape shadow" style="width: 2rem;height: 2rem;"><span class="card-title">&nbsp; &nbsp; &nbsp;net sales this month</span></span> 
                                                                                                                    </div>
                                                                                                                    <div class="col">
                                                                                                                    </div>
                                                                                                                
                                                                                                                </div>
                                                                                                                <div class="row">
                                                                                                                
                                                                                                                    <div class="col coin">
                                                                                                                    <h2 class="h2 font-weight-bold mb-0">52,034.55  <span> SR</span></h2> 
                                                                                                                    <h5 class="h5 font-weight-bold mb-0" style="color:#E93F33;">-24.33  <span> %</span></h5>
                                                                                                                    </div>
                                                                                                                
                                                                                                                </div>
                                                                                                                
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="col-xl-6 col-lg-6">
                                                                                                        <div class="card card-stats mb-4 mb-xl-0" style="background-color: #323946;">
                                                                                                            <div class="card-body">
                                                                                                                <div class="row">
                                                                                                                    <div class="col-auto">
                                                                                                                        <span><img src="{{ asset('assets/front/images/icons/Group 296.png') }}" class="img-fluid icon-shape shadow" style="width: 2rem;height: 2rem;"><span class="card-title">&nbsp; &nbsp; &nbsp;net profit</span></span> 
                                                                                                                    </div>
                                                                                                                    <div class="col">
                                                                                                                    </div>
                                                                                                                
                                                                                                                </div>
                                                                                                                <div class="row">
                                                                                                                
                                                                                                                    <div class="col coin">
                                                                                                                    <h2 class="h2 font-weight-bold mb-0">52,034.55  <span> SR</span></h2> 
                                                                                                                    <h5 class="h5 font-weight-bold mb-0" style="color:#E93F33;">-24.33  <span> %</span></h5>
                                                                                                                    </div>
                                                                                                                
                                                                                                                </div>
                                                                                                                
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="col-xl-6 col-lg-6">
                                                                                                        <div class="card card-stats mb-4 mb-xl-0" style="background-color: #323946;">
                                                                                                            <div class="card-body">
                                                                                                                <div class="row">
                                                                                                                    <div class="col-auto">
                                                                                                                        <span><img src="{{ asset('assets/front/images/icons/Group 301.png') }}" class="img-fluid icon-shape shadow" style="width: 2rem;height: 2rem;"><span class="card-title">&nbsp; &nbsp; &nbsp;Customer registration requests</span></span> 
                                                                                                                    </div>
                                                                                                                    <div class="col">
                                                                                                                    </div>
                                                                                                                
                                                                                                                </div>
                                                                                                                <div class="row">
                                                                                                                
                                                                                                                    <div class="col coin">
                                                                                                                    <h2 class="h2 font-weight-bold mb-0">52,034.55  <span> SR</span></h2> 
                                                                                                                    <h5 class="h5 font-weight-bold mb-0" style="color:#E93F33;">-24.33  <span> %</span></h5>
                                                                                                                    </div>
                                                                                                                
                                                                                                                </div>
                                                                                                                
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="col-xl-6 col-lg-6">
                                                                                                        <div class="card card-stats mb-4 mb-xl-0" style="background-color: #323946;">
                                                                                                            <div class="card-body">
                                                                                                                <div class="row">
                                                                                                                    <div class="col-auto">
                                                                                                                        <span><img src="{{ asset('assets/front/images/icons/Group 281.png') }}" class="img-fluid icon-shape shadow" style="width: 2rem;height: 2rem;"><span class="card-title">&nbsp; &nbsp; &nbsp;Trader registration requests</span></span> 
                                                                                                                    </div>
                                                                                                                    <div class="col">
                                                                                                                    </div>
                                                                                                                
                                                                                                                </div>
                                                                                                                <div class="row">
                                                                                                                
                                                                                                                    <div class="col coin">
                                                                                                                    <h2 class="h2 font-weight-bold mb-0">52,034.55  <span> SR</span></h2> 
                                                                                                                    <h5 class="h5 font-weight-bold mb-0" style="color:#E93F33;">-24.33  <span> %</span></h5>
                                                                                                                    </div>
                                                                                                                
                                                                                                                </div>
                                                                                                                
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="col-xl-6 col-lg-6">
                                                                                                        <div class="card card-stats mb-4 mb-xl-0" style="background-color: #323946;">
                                                                                                            <div class="card-body">
                                                                                                                <div class="row">
                                                                                                                    <div class="col-auto">
                                                                                                                        <span><img src="{{ asset('assets/front/images/icons/Group 279.png') }}" class="img-fluid icon-shape shadow" style="width: 2rem;height: 2rem;"><span class="card-title">&nbsp; &nbsp; &nbsp;Products added this month</span></span> 
                                                                                                                    </div>
                                                                                                                    <div class="col">
                                                                                                                    </div>
                                                                                                                
                                                                                                                </div>
                                                                                                                <div class="row">
                                                                                                                
                                                                                                                    <div class="col coin">
                                                                                                                    <h2 class="h2 font-weight-bold mb-0">52,034.55  <span> SR</span></h2> 
                                                                                                                    <h5 class="h5 font-weight-bold mb-0" style="color:#E93F33;">-24.33  <span> %</span></h5>
                                                                                                                    </div>
                                                                                                                
                                                                                                                </div>
                                                                                                                
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="col-xl-6 col-lg-6">
                                                                                                        <div class="card card-stats mb-4 mb-xl-0" style="background-color: #323946;">
                                                                                                            <div class="card-body">
                                                                                                                <div class="row">
                                                                                                                    <div class="col-auto">
                                                                                                                        <span><img src="{{ asset('assets/front/images/icons/Group 297.png') }}" class="img-fluid icon-shape shadow" style="width: 2rem;height: 2rem;"><span class="card-title">&nbsp; &nbsp; &nbsp;Balance</span></span> 
                                                                                                                    </div>
                                                                                                                    <div class="col">
                                                                                                                    </div>
                                                                                                                
                                                                                                                </div>
                                                                                                                <div class="row">
                                                                                                                
                                                                                                                    <div class="col coin">
                                                                                                                    <h2 class="h2 font-weight-bold mb-0">52,034.55  <span> SR</span></h2> 
                                                                                                                    <h5 class="h5 font-weight-bold mb-0" style="color:#E93F33;">-24.33  <span> %</span></h5>
                                                                                                                    </div>
                                                                                                                
                                                                                                                </div>
                                                                                                                
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            
                                                                                            </div>
                                                                                </div>

                                                                            
                                                                        </div>
                                                                        <div class="col-xl-3 pt-2 side" style="background-color: #161C26;border-radius: 10px;">
                                                                            
                                                                            <h2 class="mb-0 text-sm"> Merchant data</h2>
                                                                            <div class="card mt-2" style="margin-bottom: 0px;">
                                                                                                <div class="card card-stats mb-4 mb-xl-0" style="padding: 2px;margin-top: 0px;background-color: #262C39;box-shadow: none;">
                                                                                                    <div class="card-body" style="padding: 10px 5px;">
                                                                                                    
                                                                                                            <p class="mb-0 text-sm">
                                                                                                                <span class="mr-5 text-uppercase mb-0 merchant_data">trader name</span>
                                                                                                                
                                                                                                            </p>
                                                                                                            <div class="trader_side">
                                                                                                            <span class="h4 font-weight-bold ft mb-0">turky <span><img src="{{ asset('assets/front/images/icons/user.png') }}" class="img-fluid btn" style="cursor: pointer;padding: 0px;"></span></span>
                                                                                                            </div>
                                                                                                    </div>
                                                                                        
                                                                                                </div>
                                                                                        
                                                                            </div>

                                                                            <div class="card mt-2" style="margin-bottom: 0px;">
                                                                                                <div class="card card-stats mb-4 mb-xl-0" style="padding: 2px;margin-top: 0px;background-color: #262C39;box-shadow: none;">
                                                                                                    <div class="card-body" style="padding: 10px 5px;">
                                                                                                    
                                                                                                            <p class="mb-0 text-sm">
                                                                                                                <span class="mr-5 text-uppercase mb-0 merchant_data">Mobile number</span>
                                                                                                                
                                                                                                            </p>
                                                                                                            <div class="trader_side">
                                                                                                            <span class="h4 font-weight-bold ft mb-0">000 000 000 00 <span><img src="{{ asset('assets/front/images/icons/phone-call.png') }}" class="img-fluid btn" style="cursor: pointer;padding: 0px;"></span></span>
                                                                                                            </div>
                                                                                                    </div>
                                                                                        
                                                                                                </div>
                                                                                        
                                                                            </div>
                                                                            <div class="card mt-2" style="margin-bottom: 0px;">
                                                                                                <div class="card card-stats mb-4 mb-xl-0" style="padding: 2px;margin-top: 0px;background-color: #262C39;box-shadow: none;">
                                                                                                    <div class="card-body" style="padding: 10px 5px;">
                                                                                                    
                                                                                                            <p class="mb-0 text-sm">
                                                                                                                <span class="mr-5 text-uppercase mb-0 merchant_data">E-mail</span>
                                                                                                                
                                                                                                            </p>
                                                                                                            <div class="trader_side">
                                                                                                            <span class="h4 font-weight-bold ft mb-0">example@gmail.com <span><img src="{{ asset('assets/front/images/icons/envelope.png') }}" class="img-fluid btn" style="cursor: pointer;padding: 0px;"></span></span>
                                                                                                            </div>
                                                                                                    </div>
                                                                                        
                                                                                                </div>
                                                                                        
                                                                            </div>
                                                                            <div class="card mt-2" style="margin-bottom: 5px;">
                                                                                                <div class="card card-stats mb-4 mb-xl-0" style="padding: 2px;margin-top: 0px;background-color: #262C39;box-shadow: none;">
                                                                                                    <div class="card-body" style="padding: 10px 5px;">
                                                                                                    
                                                                                                            <p class="mb-0 text-sm">
                                                                                                                <span class="mr-5 text-uppercase mb-0 merchant_data">address</span>
                                                                                                                
                                                                                                            </p>
                                                                                                            <div class="trader_side">
                                                                                                            <span class="h4 font-weight-bold ft mb-0">Riyadh - neighborhood <span><img src="{{ asset('assets/front/images/icons/marker.png') }}" class="img-fluid btn" style="cursor: pointer;padding: 0px;"></span></span>
                                                                                                            </div>
                                                                                                    </div>
                                                                                        
                                                                                                </div>
                                                                                        
                                                                            </div>
                                                                        
                                                                        </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-xl-12 mb-5 mb-xl-0">
                                                                        <div class="card bg-gradient-default">
                                                                            <div class="card-header bg-transparent pa">
                                                                                <div class="row align-items-center">
                                                                                    <div class="col-xl-10 col-md-10 col-10">
                                                                                        <h2 class="text-white mb-0 ht">Overview <span>
                                                                                             <!-- @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                                                                                                <li>
                                                                                                                    <a rel="alternate" hreflang="{{ $localeCode }}" style="font-size:16px;" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                                                                                                        {{ $properties['native'] }}
                                                                                                                    </a>
                                                                                                                </li><br>
                                                                                                            @endforeach  -->
                                                                                                        </span></h2>
                                                                                    </div>
                                                                                    <div class="col-xl-2 col-md-2 col-2 pd">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="card-body">
                                                                                <!-- Chart -->
                                                                                <div class="chart">
                                                                                    <!-- Chart wrapper -->
                                                                                    <canvas id="chart-sales" class="chart-canvas"></canvas>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                
                                                                </div>
                                                    
                                                        </div>
                                                             <!--  end card  -->
                                                    </div>
                                                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                                        @include('dashboard.payment')
                                                            <!-- /.box -->
                                                        
                                                    </div>
                                                    <div class="tab-pane fade" id="toprated" role="tabpanel" aria-labelledby="toprated-tab">
                                                        @include('dashboard.invoices')
                                                            <!-- /.box -->
                                                        
                                                    </div>
                                                       <!-- end col-md-12 -->
                                                </div>

                                <!-- end row -->
                            </div>
                            </div>
                            <!-- /.box -->
                        </div>
                       
                    </div>
        </div>
         
        </div>
    </div>

    <!-- modal new perfume -->
<div id="modalUser" class="modal fade" role="dialog" data-backdrop="false">
    <div class="modal-dialog perfume_modal">
        <div class="modal-content">
            <div id="OpenDialog" class="modal-body" style="background-color: #1B222C;border-radius: inherit;">
                <div class="card ">
                    <div class="card-header card-header-rose card-header-icon">
                        <div class="card-icon">
                          <img src="{{ asset('assets/front/images/icons/Group 200.png') }}" class="img-fluid" width="35px">
                        </div>
                        <div class="row">
                                <div class="col-md-10 col-9">
                                     <h4 class="card-title">Add a perfume</h4>
                                </div>
                                <div class="col-md-2 col-3">
                                      <button type="button" class="btn btn-fill" data-dismiss="modal" style="font-size: 25px;"><i class="fa fa-times-circle"></i></button>
                                </div>
                         </div>

                    </div>
                <form action="/Users/CreateUser" class="form-horizontal" enctype="multipart/form-data" id="FormProCreate" method="post">    
                       <div class="card-body ">
                           <div class="row">
                               <div class="col-xl-5">
                               <label for="photo-upload" class="custom-file-upload fas">
                                   <div class="img-wrap img-upload">
                                        <i class="fa-solid fa-camera"></i>                                    
                                   </div>
                                  <input id="photo-upload" type="file">
                                </label>

                               </div>
                               <div class="col-xl-7">
                        
                               <div class="row">
                            <div class="col-xl-6">
                                <div class="form-group bmd-form-group">
                                
                                                <label for="Name" class="bmd-label-floating">perfume name</label>
                                    
                                    <div class="row">
                                        <div class="col-md-12">
                                        <input class="form-control" maxlength="25" required="" type="text" data-val="true" data-val-required="The Name field is required." placeholder="perfume name" id="Name" name="Name" value="" spellcheck="false" data-ms-editor="true">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="form-group bmd-form-group">
                                    <label class="bmd-label-floating">category</label>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <select class="form-control" id="GenderId" name="GenderId" placeholder="choose validities">
                                                        <option value="1">niche perfumes</option>
                                                        <option value="2">French perfumes</option>
                                                        <option value="3">oriental perfumes</option>
                                                </select>
                                    </div>
                                </div>
                        
                                </div>
                                </div>
                        </div>

                        <div class="row">
                            <div class="col-xl-6">
                                <div class="form-group bmd-form-group">
                                
                                                <label for="Name" class="bmd-label-floating">stock</label>
                                    
                                    <div class="row">
                                        <div class="col-md-12">
                                        <input class="form-control" maxlength="25" required="" type="text" data-val="true" data-val-required="The Name field is required." placeholder="stock" id="Name" name="Name" value="" spellcheck="false" data-ms-editor="true">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="form-group bmd-form-group">
                                    
                                    <label for="Name" class="bmd-label-floating">note price</label>
                        
                                        <div class="row">
                                            <div class="col-md-12">
                                            <input class="form-control" maxlength="25" required="" type="text" data-val="true" data-val-required="The Name field is required." placeholder="note price" id="Name" name="Name" value="" spellcheck="false" data-ms-editor="true">
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="form-group bmd-form-group">
                                
                                                <label for="Name" class="bmd-label-floating">discount</label>
                                    
                                    <div class="row">
                                        <div class="col-md-12">
                                        <input class="form-control" maxlength="25" required="" type="text" data-val="true" data-val-required="The Name field is required." placeholder="add discount" id="Name" name="Name" value="" spellcheck="false" data-ms-editor="true">
                                        <span class="percent"> %</span>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="form-group bmd-form-group">
                                    
                                    <label for="Name" class="bmd-label-floating">price after discount</label>
                        
                                        <div class="row">
                                            <div class="col-md-12">
                                            <input class="form-control" maxlength="25" required="" type="text" data-val="true" data-val-required="The Name field is required." placeholder="note price" id="Name" name="Name" value="" spellcheck="false" data-ms-editor="true">
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                                <div class="col-xl-12">
                                    <div class="form-group bmd-form-group">
                                    
                                                    <label for="Name" class="bmd-label-floating">description</label>
                                        
                                        <div class="row">
                                            <div class="col-md-12">
                                            <input class="form-control" maxlength="25" required="" type="text" data-val="true" data-val-required="The Name field is required." placeholder=" write description" id="Name" name="Name" value="" spellcheck="false" data-ms-editor="true">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               
                        </div>
                        <div class="card-footer ">
                            <button class="btn btn-fill btn-rose pull-right" type="button" onclick="CreateUser()">Add a perfume</button>
                        </div>
                
                                </div>
                
                
                            </div>
                    </div>
                       
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')
   
@endpush