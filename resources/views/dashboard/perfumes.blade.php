@extends('dashboard.layouts.app',['page_title' => 'الأخطاء'])

@section('content')
   <div class="container">
       <div class="row">
           <div class="col-xl-12">
                @include('dashboard.layouts.headers.perfumecards')

                <div class="container-fluid mt-0 perfumes">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Perfumes</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">best seller</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="toprated-tab" data-toggle="tab" href="#toprated" role="tab" aria-controls="toprated" aria-selected="false">top rated</a>
                        </li>

                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="container-fluid" style="padding: 0px !important;">
                                <div class="row">
                                    <div class="col-md-12">

                                        <div class="card">
                                                <div class="card-header card-header-primary card-header-icon">
                                                    <div class="row">
                                                        <div class="col-xl-6 col-md-12 col-12">

                                                                <div class="row">
                                                                    <div class="col-xl-5 col-md-12 col-xs-12">

                                                            <h4 class="card-title">oriental perfumes<span>   (08)</span> </h4>
                                                            </div>
                                                            <div class="col-xl-7 col-md-12 col-xs-12">
                                                            <a data-toggle="modal" onclick="RenderActions('')" data-target="#modalUser" class="pull-right btn">Create New perfume <i class="fa fa-arrow-circle-right"></i></a>
                                                            </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-1"></div>
                                                        <div class="col-xl-5 col-md-12 col-12">
                                                            <div class="row">
                                                           <div class="col-xl-4 offset-xl-1 col-12">

                                                                <h4 class="card-title date">Date   <span style="margin-left: 5px;"> <input id="datepicker" placeholder="Choose the time" style="width: 180px;"/></span></h4>
                                                            </div>
                                                            <div class="col-xl-7 col-12">
                                                                <div class="row">
                                                                    <div class="col-xl-12 col-12">
                                                                            <h4 class="card-title date date1">position <span style="margin-left: 5px;">
                                                                                    <select class="form-control date date1" id="GenderId" name="GenderId" placeholder="All">
                                                                                        <option value="1">one</option>
                                                                                        <option value="2">two</option>
                                                                                        <option value="3">three</option>
                                                                                </select>
                                                                                </span> <span style="margin-left: 5px;"> <img src="{{ asset('assets/front/images/icons/Group 68.png') }}" class="img-fluid btn date" width="35px" style="cursor: pointer;padding: 0px;"></span></h4>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                            </div>
                                                        </div>
                                                </div>
                                                </div>
                                            <div class="card-body">

                                                <div class="material-datatables table-responsive table">
                                                    <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                                                        <thead>
                                                            <tr>
                                                                <th></th>
                                                                <th></th>
                                                                <th>perfume name</th>
                                                                <th>Date created</th>
                                                                <th>stock</th>
                                                                <th>price</th>
                                                                <th>discount</th>
                                                                <th>category</th>
                                                                <th>activation</th>
                                                                <th class="disabled-sorting text-right"></th>
                                                            </tr>
                                                        </thead>

                                                        <tbody>
                                                        @include('dashboard.rowperfume')
                                                        @include('dashboard.rowperfume')
                                                        @include('dashboard.rowperfume')
                                                        @include('dashboard.rowperfume')
                                                        @include('dashboard.rowperfume')

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
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                           @include('dashboard.bestseller')
                            <!-- /.box -->

                        </div>
                        <div class="tab-pane fade" id="toprated" role="tabpanel" aria-labelledby="toprated-tab">
                        @include('dashboard.toprated')
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
                <button type="button" rel="tooltip" class="btn remove">
                    <i class="material-icons"><img src="{{ asset('assets/front/images/icons/trash1.png') }}" class="img-fluid" width="25px"></i>
                </button>
                <a data-toggle="modal"  title="Click to edit" data-target="#modalUser1" class="btn" style="padding:0;"> <i class="material-icons"><img src="{{ asset('assets/front/images/icons/edit1.png') }}" class="img-fluid" width="25px"></i></a>

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
