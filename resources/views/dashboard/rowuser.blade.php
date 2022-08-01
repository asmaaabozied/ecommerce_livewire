<tr>
                                        <td> <input type="checkbox" aria-label="Checkbox for following text input"></td>
                                        <td>admin</td>
                                        <td>1/1/0001</td>
                                        <td>hanan</td>
                                        <td>......<span style="margin-left: 5px;cursor: pointer;"><img src="{{ asset('assets/front/images/icons/eye-crossed.png') }}" class="img-fluid" width="25px"></span></td>
                                        <td class="text-right">


                                        <a data-toggle="modal" onclick="RenderActions1('')" title="Click to edit" data-target="#modalUser1" class="btn" style="padding:0;"> <i class="material-icons"><img src="{{ asset('assets/front/images/icons/edit1.png') }}" class="img-fluid" width="25px"></i></a>

                                            <button type="button" rel="tooltip" class="btn remove">
                                                <i class="material-icons"><img src="{{ asset('assets/front/images/icons/trash1.png') }}" class="img-fluid" width="25px"></i>
                                            </button>
                                            <a data-toggle="modal" onclick="RenderActions('/Users/EditUser/ed3256e3-9e4f-4ea4-a985-3f507ea89689')" title="Click to edit" data-target="#modalUser" class="btn" style="padding:0;"> <i class="material-icons"><img src="{{ asset('assets/front/images/icons/menu-dots-vertical.png') }}" class="img-fluid" width="25px"></i></a>

                                            </td>
                                    </tr>
<!-- edit -->

<div id="modalUser1" class="modal fade" role="dialog" data-backdrop="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div id="OpenDialog1" class="modal-body" style="background-color: #1B222C;">
                <div class="card ">
                    <div class="card-header card-header-rose card-header-icon">
                        <div class="card-icon">

                        <img src="{{ asset('assets/front/images/icons/Group 119.png') }}" class="img-fluid" width="35px">
                        </div>
                        <div class="row">
                                <div class="col-md-10 col-9">
                                     <h4 class="card-title">user data</h4>
                                     <h5>Added date <span>2/2/2022</span></h5>
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
                                                        <option value="1">admin</option>
                                                        <option value="2">admin</option>
                                                        <option value="3">admin</option>
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
                            <button class="btn btn-fill btn-rose pull-right" type="button" onclick="CreateUser()">Save edits</button>
                        </div>
            </div>
        </div>
    </div>
</div>

@push('js')

<script>


     // Render Actions to open Dialog when onclick edit
     function RenderActions1(renderActionstring1) {
        $("#OpenDialog1").load(renderActionstring1);
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
