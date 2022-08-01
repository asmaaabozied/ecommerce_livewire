@extends('dashboard.layouts.app')
@section('title')
    @lang('lang.roles')
@endsection
@section('content')


    @livewire('roles.index')
@endsection





@push('js')
<script src="{{asset('assets/front/select2/js/select2.full.min.js')}}"></script>
<script>
     $(function(){
        $('.select2').select2({
            theme: 'bootstrap4',
        });
    })

</script>

@endpush
