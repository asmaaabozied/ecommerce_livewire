
@extends('dashboard.layouts.app',['page_title' => 'الأخطاء'])

@section('content')

<section class="roles">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Positions and roles</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">powers</a>
                    </li>

                </ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
   <div class="container-fluid">
    <div class="row">
        <div class="col-md-12">

            <div class="card">
                    <div class="card-header card-header-primary card-header-icon">
                        <div class="row">
                            <div class="col-xl-6 col-md-12 col-12">

                                    <div class="row">
                                        <div class="col-xl-7 col-md-12 col-xs-12">
                                                <div class="card-icon">
                                                <img src="{{ asset('assets/front/images/icons/Group 133.png') }}" class="img-fluid" width="35px">
                                                </div>
                                                <h4 class="card-title">Positions and roles<span>   (12)</span> </h4>
                                        </div>
                                        <div class="col-xl-5 col-md-12 col-xs-12">
                                        <a data-toggle="modal" onclick="RenderActions('')" data-target="#modalUser" class="pull-right btn">Create New <i class="fa fa-arrow-circle-right"></i></a>
                                        </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-12 col-12">
                                <h4 class="card-title date">Date <span style="margin-left: 5px;"> <input id="datepicker" placeholder="Choose the time" /></span> <span style="margin-left: 5px;"><img src="{{ asset('assets/front/images/icons/Group 68.png') }}" class="img-fluid btn" width="35px" style="cursor: pointer;padding: 0px;"></span></h4>

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
                                    <th></th>
                                    <th>position</th>
                                    <th>Date created</th>
                                    <th>allowed</th>
                                    <th class="disabled-sorting text-right"></th>
                                </tr>
                            </thead>

                            <tbody>
                                    <tr>
                                        <td> <input type="checkbox" aria-label="Checkbox for following text input"></td>
                                        <td>Admin</td>
                                        <td>1/1/0001</td>
                                        <td>06</td>
                                        <td class="text-right">

                                            <a data-toggle="modal" onclick="RenderActions('/Users/UserRoles/ed3256e3-9e4f-4ea4-a985-3f507ea89689')" id="btnUserRoles" title="Click add to role" data-target="#modalUser"  class="btn" style="padding:0;"> <img src="{{ asset('assets/front/images/icons/eye-crossed.png') }}" class="img-fluid" width="25px"></a>

                                            <a data-toggle="modal" onclick="RenderActions('/Users/EditUser/ed3256e3-9e4f-4ea4-a985-3f507ea89689')" title="Click to edit" data-target="#modalUser" class="btn" style="padding:0;"> <i class="material-icons"><img src="{{ asset('assets/front/images/icons/edit1.png') }}" class="img-fluid" width="25px"></i></a>

                                            <button type="button" rel="tooltip" class="btn remove">
                                                <i class="material-icons"><img src="{{ asset('assets/front/images/icons/trash1.png') }}" class="img-fluid" width="25px"></i>
                                            </button>
                                            <a data-toggle="modal" onclick="RenderActions('/Users/EditUser/ed3256e3-9e4f-4ea4-a985-3f507ea89689')" title="Click to edit" data-target="#modalUser" class="btn" style="padding:0;"> <i class="material-icons"><img src="{{ asset('assets/front/images/icons/menu-dots-vertical.png') }}" class="img-fluid" width="25px"></i></a>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td> <input type="checkbox" aria-label="Checkbox for following text input"></td>
                                        <td>Admin</td>
                                        <td>1/1/0001</td>
                                        <td>06</td>
                                        <td class="text-right">

                                            <a data-toggle="modal" onclick="RenderActions('/Users/UserRoles/ed3256e3-9e4f-4ea4-a985-3f507ea89689')" id="btnUserRoles" title="Click add to role" data-target="#modalUser"  class="btn" style="padding:0;"> <img src="{{ asset('assets/front/images/icons/eye-crossed.png') }}" class="img-fluid" width="25px"></a>

                                            <a data-toggle="modal" onclick="RenderActions('/Users/EditUser/ed3256e3-9e4f-4ea4-a985-3f507ea89689')" title="Click to edit" data-target="#modalUser" class="btn" style="padding:0;"> <i class="material-icons"><img src="{{ asset('assets/front/images/icons/edit1.png') }}" class="img-fluid" width="25px"></i></a>

                                            <button type="button" rel="tooltip" class="btn remove">
                                                <i class="material-icons"><img src="{{ asset('assets/front/images/icons/trash1.png') }}" class="img-fluid" width="25px"></i>
                                            </button>
                                            <a data-toggle="modal" onclick="RenderActions('/Users/EditUser/ed3256e3-9e4f-4ea4-a985-3f507ea89689')" title="Click to edit" data-target="#modalUser" class="btn" style="padding:0;"> <i class="material-icons"><img src="{{ asset('assets/front/images/icons/menu-dots-vertical.png') }}" class="img-fluid" width="25px"></i></a>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td> <input type="checkbox" aria-label="Checkbox for following text input"></td>
                                        <td>Admin</td>
                                        <td>1/1/0001</td>
                                        <td>06</td>
                                        <td class="text-right">

                                            <a data-toggle="modal" onclick="RenderActions('/Users/UserRoles/ed3256e3-9e4f-4ea4-a985-3f507ea89689')" id="btnUserRoles" title="Click add to role" data-target="#modalUser"  class="btn" style="padding:0;"> <img src="{{ asset('assets/front/images/icons/eye-crossed.png') }}" class="img-fluid" width="25px"></a>

                                            <a data-toggle="modal" onclick="RenderActions('/Users/EditUser/ed3256e3-9e4f-4ea4-a985-3f507ea89689')" title="Click to edit" data-target="#modalUser" class="btn" style="padding:0;"> <i class="material-icons"><img src="{{ asset('assets/front/images/icons/edit1.png') }}" class="img-fluid" width="25px"></i></a>

                                            <button type="button" rel="tooltip" class="btn remove">
                                                <i class="material-icons"><img src="{{ asset('assets/front/images/icons/trash1.png') }}" class="img-fluid" width="25px"></i>
                                            </button>
                                            <a data-toggle="modal" onclick="RenderActions('/Users/EditUser/ed3256e3-9e4f-4ea4-a985-3f507ea89689')" title="Click to edit" data-target="#modalUser" class="btn" style="padding:0;"> <i class="material-icons"><img src="{{ asset('assets/front/images/icons/menu-dots-vertical.png') }}" class="img-fluid" width="25px"></i></a>

                                        </td>
                                    </tr>

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
    @include('dashboard.validity')
  </div>
</div>
<div id="modalUser" class="modal fade" role="dialog" data-backdrop="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div id="OpenDialog" class="modal-body">
                <button type="button" rel="tooltip" class="btn remove">
                    <i class="material-icons"><img src="{{ asset('assets/front/images/icons/trash1.png') }}" class="img-fluid" width="25px"></i>
                </button>
                <a data-toggle="modal"  title="Click to edit" data-target="#modalUser1" class="btn" style="padding:0;"> <i class="material-icons"><img src="{{ asset('assets/front/images/icons/edit1.png') }}" class="img-fluid" width="25px"></i></a>

                <div class="card ">
                    <div class="card-header card-header-rose card-header-icon">
                        <div class="card-icon">
                        <img src="{{ asset('assets/front/images/icons/Group 131.png') }}" class="img-fluid" width="35px">
                        </div>
                        <div class="row">
                                <div class="col-md-10 col-9">
                                     <h4 class="card-title">Add a position</h4>
                                </div>
                            <div class="col-md-2 col-3">
                                      <button type="button" class="btn btn-fill" data-dismiss="modal" style="font-size: 25px;"><i class="fa fa-times-circle"></i></button>
                                    </div>
                         </div>

                    </div>
                <form action="/Users/CreateUser" class="form-horizontal" enctype="multipart/form-data" id="FormProCreate" method="post">
                       <div class="card-body ">

                        <div class="form-group bmd-form-group">

                                         <label for="Name" class="bmd-label-floating">Position name</label>

                            <div class="row">
                                <div class="col-md-7">
                                   <input class="form-control" maxlength="25" required="" type="text" data-val="true" data-val-required="The Name field is required." placeholder="Position name" id="Name" name="Name" value="" spellcheck="false" data-ms-editor="true">
                                </div>
                            </div>
                        </div>
                        <div class="form-group bmd-form-group">
                            <label class="bmd-label-floating">validities</label>
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
                                <input type="checkbox" checked="checked" name="radio">
                                <span class="checkmark"></span>
                            </label>
                            <label class="container">This text is an example of text that can be replaced by text .
                                <input type="checkbox" checked="checked" name="radio">
                                <span class="checkmark"></span>
                            </label>
                            <label class="container">This text is an example of text that can be replaced by text .
                                <input type="checkbox" checked="checked" name="radio">
                                <span class="checkmark"></span>
                            </label>
                            <label class="container">This text is an example of text that can be replaced by text .
                                <input type="checkbox" checked="checked" name="radio">
                                <span class="checkmark"></span>
                            </label>
                            </div>
                        </div>


                    </div>
                        <div class="card-footer ">
                            <button class="btn btn-fill btn-rose pull-right" type="button" onclick="CreateUser()">Add a position</button>
                        </div>
            </div>
        </div>
    </div>
</div>
<!-- valid -->
<div id="modalUser1" class="modal fade" role="dialog" data-backdrop="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div id="OpenDialog1" class="modal-body">
                <div class="card ">
                    <div class="card-header card-header-rose card-header-icon">
                        <div class="card-icon">
                        <img src="{{ asset('assets/front/images/icons/Group 133.png') }}" class="img-fluid" width="35px">
                        </div>
                        <div class="row">
                                <div class="col-md-10 col-9">
                                     <h4 class="card-title">Add a position</h4>
                                </div>
                            <div class="col-md-2 col-3">
                                      <button type="button" class="btn btn-fill" data-dismiss="modal" style="font-size: 25px;"><i class="fa fa-times-circle"></i></button>
                                    </div>
                         </div>

                    </div>
                <form action="" class="form-horizontal" enctype="" id="FormProCreate" method="post">
                       <div class="card-body ">

                        <div class="form-group bmd-form-group">

                                         <label for="Name" class="bmd-label-floating">Position name</label>

                            <div class="row">
                                <div class="col-md-9">
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="write the validity"></textarea>
                                </div>
                            </div>
                        </div>


                        </div>
                        <div class="card-footer ">
                            <button class="btn btn-fill btn-rose pull-right" type="button" onclick="CreateUser()">Add a validity</button>
                        </div>
                    </div>

            </div>
        </div>
    </div>
</div>
</section>

@endsection

@push('js')
<script src="{{asset('assets/front/js/jquery-3.3.1.min.js')}}"></script>
<script>
        $('#datepicker').datepicker({
            uiLibrary: 'bootstrap4'
        });

        // Render Actions to open Dialog when onclick
    function RenderActions(renderActionstring) {
        $("#OpenDialog").load(renderActionstring);
    };

     // Render Actions to open Dialog when onclick for valid
     function RenderActions1(renderActionstring1) {
        $("#OpenDialog1").load(renderActionstring1);
    };
    </script>

@endpush
