@extends('dashboard.layouts.app',['page_title' =>  'categories'])
@section('title')
    @lang('lang.categories')
@endsection
@section('content')


    @livewire('categories.index')
@endsection


