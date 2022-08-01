@extends('dashboard.layouts.app')
@section('title')
    @lang('lang.settings')
@endsection
@section('content')


    @livewire('settings.index')
@endsection

<!-- {{--@section('scripts')--}}
{{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/2.5.3/js/bootstrap-colorpicker.min.js"></script>--}}
{{--    <script>--}}
{{--        $('#colorpicker').colorpicker();--}}
{{--    </script>--}}
{{--@endsection--}}
 -->

 <script src="{{ asset('assets/front/ckeditor/ckeditor.js') }}"></script>
<script>
CKEDITOR.replace( 'summary-ckeditor' );
CKEDITOR.replace( 'summary-ckeditor1' );
</script>


