@extends('dashboard.layouts.app',['page_title' =>  'packagefeatures'])
@section('title')
    @lang('lang.packagefeatures')
@endsection
@section('content')


    @livewire('packagefeatures.index')
@endsection


