@extends('dashboard.layouts.app',['page_title' => 'الأخطاء'])

@section('content')
   <div class="container">
       <div class="row">
                <div class="col-xl-12">
                    @include('dashboard.layouts.headers.merchantcards')
                    
                    <div class="container-fluid mt--7">
                                <div class="row">
                                    <div class="col-md-12">
                                        
                                        <div class="card">
                                                <div class="card-header card-header-primary card-header-icon">
                                                    <div class="row">
                                                        <div class="col-xl-4 col-md-12 col-12">
                                                            
                                                            <h4 class="card-title">budding traders<span>   (290)</span> </h4>
                                                        </div>
                                                        
                                                        <div class="col-xl-2 col-12"></div>
                                                        <div class="col-xl-6 col-md-12 col-12 date3">
                                                        
                                                            <h4 class="card-title date">Date <span style="margin-left: 5px;"> <input id="datepicker" placeholder="Choose the time" /></span> <span style="margin-left: 5px;"><img src="{{ asset('assets/front/images/icons/Group 68.png') }}" class="img-fluid btn" width="35px" style="cursor: pointer;padding: 0px;"></span></h4>
                                                    
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                
                                                    <div class="material-datatables table-responsive table">
                                                        <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                                                            <thead>
                                                                <tr>
                                                                    <th></th>
                                                                    <th>Merchant name</th>
                                                                    <th>Date purchase</th>
                                                                    <th>Quantity</th>
                                                                    <th>price</th>
                                                                    <th>Discount</th>
                                                                    <th>paying</th>
                                                                    <th class="disabled-sorting text-right"></th>
                                                                </tr>
                                                            </thead>
                                                        
                                                            <tbody>
                                                                
                                                                @include('dashboard.rowmerchant')

                                                                @include('dashboard.rowmerchant')

                                                                @include('dashboard.rowmerchant')
                                                                @include('dashboard.rowmerchant')
                                                                @include('dashboard.rowmerchant')

                                                                
                                                            </tbody>
                                                        </table>
                                                    </div>
                                               
                                        </div>
                                        <!--  end card  -->
                                    </div>
                                    <!-- end col-md-12 -->
                                </div>
                                <!-- end row -->
                    </div>
                     <!-- /.box -->

                </div>
            
        </div>
    </div>
@endsection
