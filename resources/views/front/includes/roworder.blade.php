<tr>
                                        <td style="color:#FB0404;">20838</td>
                                        <td>05/05/2022</td>
                                        <td>Waiting for delivery</td>
                                        <td>188.60<span>  SR</span></td>
                                        <td class="text-right">
                                           
                                        <a href="{{ route('orderdetails') }}" class="btn" style="padding:0;"> View details</a>

                                            </td>
                                    </tr>
<!-- edit -->

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