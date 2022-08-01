<tr>
                                        <td> <input type="checkbox" aria-label="Checkbox for following text input"></td>
                                        <td>ghali</td>
                                        <td>1/1/0001</td>
                                        <td>290<span>  note</span></td>
                                        <td>12<span>  note</span></td>
                                        <td>1200<span>  sr</span></td>
                                        <td>niche perfume</td>
                                        <td class="text-right">


                                             <a class="btn accept" style="padding:0;"> accept</a>
                                            <button type="button" rel="tooltip" class="btn remove reject">reject</button>
                                            <a data-toggle="modal" onclick="RenderActions('')" title="Click to edit" data-target="#modalUser1" class="btn" style="padding:0;"> <i class="material-icons"><img src="{{ asset('assets/front/images/icons/menu-dots-vertical.png') }}" class="img-fluid" width="25px"></i></a>

                                            </td>
                                    </tr>
<!-- edit -->

<div id="modalUser1" class="modal fade" role="dialog" data-backdrop="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div id="OpenDialog1" class="modal-body" style="background-color: #1B222C;">
                <button type="button" rel="tooltip" class="btn remove">
                    <i class="material-icons"><img src="{{ asset('assets/front/images/icons/trash1.png') }}" class="img-fluid" width="25px"></i>
                </button>
                <a data-toggle="modal"  title="Click to edit" data-target="#modalUser1" class="btn" style="padding:0;"> <i class="material-icons"><img src="{{ asset('assets/front/images/icons/edit1.png') }}" class="img-fluid" width="25px"></i></a>

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
                    @include('dashboard.viewordermodal')
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
