
@extends('dashboard.layouts.app',['page_title' => 'الأخطاء'])

@section('content')

<section class="roles">

  <div class="container-fluid">
    <div class="row">
        <div class="col-md-12">

            <div class="card">
                    <div class="card-header card-header-primary card-header-icon">
                        <div class="row">
                            <div class="col-xl-4 col-md-12 col-12">

                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-12">
                                        <div class="card-icon">
                                        <img src="{{ asset('assets/front/images/icons/Group 66.png') }}" class="img-fluid" width="35px">
                                    </div>
                                <h4 class="card-title">Perfume requests<span>   (998)</span> </h4>
                                </div>

                                </div>
                            </div>
                            <div class="col-xl-1 col-12"></div>
                            <div class="col-xl-7 col-md-12 col-12">
                                <div class="row">

                                    <div class="col-xl-4 offset-xl-3 col-12">

                                        <h4 class="card-title date">Date   <span style="margin-left: 5px;"> <input id="datepicker" placeholder="Choose the time" /></span></h4>
                                    </div>
                                    <div class="col-xl-5 col-12">
                                        <div class="row">
                                            <div class="col-xl-12 col-12">
                                                <h4 class="card-title date date1">classification <span style="margin-left: 5px;"> <select class="form-control date date1" id="GenderId" name="GenderId" placeholder="All">
                                                <option value="1">all</option>
                                                                <option value="2">two</option>
                                                                <option value="3">three</option>
                                                        </select>
                                                </span> <span style="margin-left: 5px;">  <img src="{{ asset('assets/front/images/icons/Group 68.png') }}" class="img-fluid btn date" width="35px" style="cursor: pointer;padding: 0px;"></span></h4>
                                            </div>

                                        </div>
                                    </div>
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
                                    <th></th>
                                    <th>Perfume name</th>
                                    <th>Date</th>
                                    <th>stock</th>
                                    <th>Quantity</th>
                                    <th>Cost</th>
                                    <th>perfume category</th>
                                    <th class="disabled-sorting text-right"></th>
                                </tr>
                            </thead>

                            <tbody>

                            @include('dashboard.roworder')

                            @include('dashboard.roworder')

                            @include('dashboard.roworder')
                            @include('dashboard.roworder')
                            @include('dashboard.roworder')


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
<div id="modalUser" class="modal fade" role="dialog" data-backdrop="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div id="OpenDialog" class="modal-body" style="background-color: #1B222C;">

                <button type="button" rel="tooltip" class="btn remove">
                    <i class="material-icons"><img src="{{ asset('assets/front/images/icons/trash1.png') }}" class="img-fluid" width="25px"></i>
                </button>
                <a data-toggle="modal"  title="Click to edit" data-target="#modalUser1" class="btn" style="padding:0;"> <i class="material-icons"><img src="{{ asset('assets/front/images/icons/edit1.png') }}" class="img-fluid" width="25px"></i></a>

                <div class="card ">
                    <div class="card-header card-header-rose card-header-icon">
                        <div class="card-icon">
                        <img src="{{ asset('assets/front/images/icons/Group 109.png') }}" class="img-fluid" width="35px">
                        </div>
                        <div class="row">
                                <div class="col-md-10 col-9">
                                     <h4 class="card-title">Add user</h4>
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

@endpush
