<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{--        {{ config('app.name', 'Dashboard') }}--}}
    <title> @yield('title')</title>
    <!-- Favicon -->
    <link href="{{ asset('assets/front/images/brand/favicon.png') }}" rel="icon" type="image/png">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!-- Extra details for Live View on GitHub Pages -->
    {{--//notify--}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="{{ asset('noty/noty.css') }}">
    <script src="{{ asset('noty/noty.min.js') }}"></script>
    {{--        end notify--}}
<!-- Icons -->
    <!-- Argon CSS -->
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="{{asset('assets/front/vendor/nucleo/css/nucleo.css')}}">
    <link rel="stylesheet" href="{{asset('assets/front/vendor/@fortawesome/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/front/css/argon.css')}}">

    @if(auth()->check())
        @php
            if(session('seen_notifications')==null)
                session(['seen_notifications'=>0]);
            $notifications=auth()->user()->notifications()->orderBy('created_at','DESC')->limit(50)->get();
            $unreadNotifications=auth()->user()->unreadNotifications()->count();
        @endphp
    @endif
    @livewireStyles
    {{--        <livewire:styles />--}}
    @yield('styles')
    @if(app()->getLocale()=='ar')

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css"
              integrity="sha384-gXt9imSW0VcJVHezoNQsP+TNrjYXoGcrqBZJpry9zJt8PCQjobwmhMGaDHTASo9N"
              crossorigin="anonymous">
        <link href="{{asset('assets/front/css/argon_rtl.css')}}" rel="stylesheet">
    @endif

<!-- Styles -->
<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" /> -->
<!-- Or for RTL support -->
<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.rtl.min.css" /> -->



    <!-- <link rel="stylesheet" href="http://harshniketseta.github.io/popupMultiSelect/dist/stylesheets/multiselect.min.css"> -->
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- <script src="http://harshniketseta.github.io/popupMultiSelect/dist/javascripts/multiselect.min.js"></script> -->
<link rel="stylesheet" href="{{asset('assets/front/select2/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/front/css/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
    <script src="{{ asset('assets/front/ckeditor/ckeditor.js') }}"></script>

</head>
<body>

@include('dashboard.layouts.sidebar')


<div class="main-content">
    <div class="container">
        @include('dashboard.layouts.navbar')

        @yield('content')
    </div>
</div>

<!-- Argon JS -->

<script src="{{asset('assets/front/vendor/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('assets/front/js/jquery-3.3.1.min.js')}}"></script>

<script src="{{asset('assets/front/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/front/js/popper1.16.min.js')}}"></script>
<script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>

<script src="{{asset('assets/front/js/argon.js')}}"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script> -->



<script>
    $('#datepicker').datepicker({
        uiLibrary: 'bootstrap4'
    });
</script>
   <!-- <script>
      $(document).ready(function () {
           $('#select2').select2();

      });


  </script> -->
<script>
    // password
    $(document).ready(function () {
        $("#show_hide_password a").on('click', function (event) {
            event.preventDefault();
            if ($('#show_hide_password input').attr("type") == "text") {
                $('#show_hide_password input').attr('type', 'password');
                $('#show_hide_password i').addClass("fa-eye-slash");
                $('#show_hide_password i').removeClass("fa-eye");
            } else if ($('#show_hide_password input').attr("type") == "password") {
                $('#show_hide_password input').attr('type', 'text');
                $('#show_hide_password i').removeClass("fa-eye-slash");
                $('#show_hide_password i').addClass("fa-eye");
            }
        });
    });
</script>
@stack('modals')
@livewireScripts

@powerGridScripts


@yield('scripts')
<!-- <script type="text/javascript">
    $("#my-language").multiselect(
        {
            title: "Select Language",
            maxSelectionAllowed: 5
        });
</script> -->

<!-- <script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        // $('.ckeditor').ckeditor();
        if ($('#summary-ckeditor').length) {
            CKEDITOR.replace('summary-ckeditor');
        }
        if ($('#summary-ckeditor2').length) {
            CKEDITOR.replace('summary-ckeditor2');
        }
    });
</script> -->
<script>
    $(document).ready(function () {
        jQuery('.delete').click(function (event) {
            event.preventDefault();
            console.log("Tapped Delete button")
            var that = $(this)
            // e.preventDefault();
            var n = new Noty({
                text: "@lang('lang.confirm_delete')",
                type: "error",
                killer: true,
                buttons: [
                    Noty.button("@lang('lang.yes')", 'btn btn-success mr-2', function () {
                        // that.click();
                        that.closest('form').submit();
                    }),
                    Noty.button("@lang('lang.no')", 'btn btn-primary mr-2', function () {
                        n.close();
                    })
                ]
            });
            n.show();
        });
    });
</script>

<script>


    // $(document).ready(function() {
    //     $('.select2').select2({
    //         closeOnSelect: false
    //     });
    // });

    // setTimeout(function () {
    //     $('.alert-box').remove();
    // }, 3000);


    // document.getElementById("myBtn").addEventListener("click",()=>
    // {
    //     document.getElementById("modalUser").classList.add('fade-scale.in')
    // })

</script>

<script src="{{asset('assets/front/select2/js/select2.full.min.js')}}"></script>

<script>
    $(function(){
        $('.select2').select2({
            theme: 'bootstrap4',
        });
    })

</script>
<script src="{{ asset('assets/front/ckeditor/adapters/jquery.js') }}"></script>

<script>
CKEDITOR.replace( 'summary-ckeditor' );
CKEDITOR.replace( 'summary-ckeditor1' );
CKEDITOR.replace( 'editor' );
CKEDITOR.replace( 'w3review' );
</script>
<script>
$(window).on('load', function (){
    $( '#editor' ).ckeditor();
});
</script>
<script type="text/javascript">
    window.livewire.on('userStore', () => {
        $('#exampleModal').modal('hide');
    });
</script>

<script type="text/javascript">
    window.livewire.on('userStore', () => {
        $('#updateModal').modal('hide');
    });
</script>
</body>
</html>
