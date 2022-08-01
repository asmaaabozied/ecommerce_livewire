@extends('dashboard.layouts.app')

@section('content')
   <div class="container">
       <div class="row">
           <div class="col-xl-10">
                @include('dashboard.layouts.cards')
                @include('dashboard.layouts.statics')
            </div>
                @include('dashboard.layouts.side_statics')
    </div>
@endsection

@push('js')
    <script src="{{asset('assets/front/vendor/vendor/chart.js/dist/Chart.min.js')}}"></script>
    <script src="{{asset('assets/front/vendor/chart.js/dist/Chart.extension.js')}}"></script>

@endpush