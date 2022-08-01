@extends('dashboard.layouts.app')
@section('title')
    @lang('lang.pages')
@endsection
@section('content')


    @livewire('pages.index')
@endsection

@section('scripts')



    <script>

        document.getElementById("myBtn").addEventListener("click",()=>
        {
            console.log("dsfd")
            document.getElementById("modal").classList.add('fade-scale.in')
        })

    </script>
    @endsection





