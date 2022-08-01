<tr>
                                        <td style="color:#FB0404;">20838</td>
                                        <td>05/05/2022</td>
                                        <td>complaint</td>
                                        <td>Text content Text content</td>
                                        <td>Administrative</td>
                                        <td class="text-right">
                                           
                                        <a data-toggle="modal" onclick="RenderActions1('')" title="View details" data-target="#modalUser1" class="btn" style="padding:0;"> View details</a>

                                            </td>
                                    </tr>
<!-- edit -->

<div id="modalUser1" class="modal fade" role="dialog" data-backdrop="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div id="OpenDialog1" class="modal-body">
                <div class="card ">
                    <div class="card-header card-header-rose card-header-icon">
                       
                        <div class="row">
                                <div class="col-md-6 col-6">
                                     <h4 class="card-title">Support Request</h4>
                                     <h5><span>2/2/2022</span></h5>
                                </div>
                                <div class="col-md-5 col-4">
                                     <h3>Order number <span>20838</span></h3>
                                </div>
                            <div class="col-md-1 col-2">
                                      <button type="button" class="btn btn-fill" data-dismiss="modal" style="font-size: 25px;"><i class="fa fa-times-circle"></i></button>
                                    </div>
                         </div>

                    </div>
                <form action="" class="form-horizontal" enctype="" id="FormProCreate" method="post">    
                       <div class="card-body ">
                       <div class="form-group bmd-form-group">
                                
                                <label for="Name" class="bmd-label-floating">Order address</label>
                    
                            <div class="row">
                                <div class="col-md-12">
                                    <input class="form-control" maxlength="25" required="" type="text" data-val="true" data-val-required="The Name field is required." placeholder="Position name" id="Name" name="Name" value="" spellcheck="false" data-ms-editor="true">
                                </div>
                            </div>
                        </div>
                        <div class="form-group bmd-form-group">
                                
                                <label for="Name" class="bmd-label-floating">Order type</label>
                    
                            <div class="row">
                                <div class="col-md-12">
                                    <input class="form-control" maxlength="25" required="" type="text" data-val="true" data-val-required="The Name field is required." placeholder="Position name" id="Name" name="Name" value="" spellcheck="false" data-ms-editor="true">
                                </div>
                            </div>
                        </div>
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
                            <button class="btn btn-fill btn-rose pull-right" type="button" onclick="CreateUser()">Send</button>
                        </div>
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