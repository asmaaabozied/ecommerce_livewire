
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            
            <div class="card">
                    <div class="card-header card-header-primary card-header-icon">
                        <div class="row">
                            <div class="col-xl-5 col-md-12 col-12">
                                <div class="row">
                                    <div class="col-md-6">
                                                <div class="card-icon">
                                                    <img src="{{ asset('assets/front/images/icons/Group 133.png') }}" class="img-fluid" width="35px">
                                                </div>
                                            <h4 class="card-title">powers<span>   (40)</span></h4>
                                </div>
                                <div class="col-md-6">
                                        <a data-toggle="modal" onclick="RenderActions1('')" data-target="#modalUser1" class="pull-right btn">Create New <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                                </div>
                            </div>
                            <div class="col-xl-7 col-md-12 col-12">
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
                                    <th>validity</th>
                                    <th>Date created</th>
                                    <th>allowed</th>
                                    <th class="disabled-sorting text-right"></th>
                                </tr>
                            </thead>
                           
                            <tbody>
                                    <tr>
                                        <td> <input type="checkbox" aria-label="Checkbox for following text input"></td>
                                        <td>This text is an example of text that can be replaced by text in this space.</td>
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
                                        <td>This text is an example of text that can be replaced by text in this space.</td>
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
                                        <td>This text is an example of text that can be replaced by text in this space.</td>
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
                                        <td>This text is an example of text that can be replaced by text in this space.</td>
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
                                        <td>This text is an example of text that can be replaced by text in this space.</td>
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