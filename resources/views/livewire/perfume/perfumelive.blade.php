@extends('dashboard.layouts.app',['page_title' => 'الأخطاء'])

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                @include('dashboard.layouts.headers.perfumecards')

                <div class="container-fluid mt-0 perfumes">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                               aria-controls="home" aria-selected="true">@lang('lang.Perfumes')</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                               aria-controls="profile" aria-selected="false">@lang('lang.best seller')</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="toprated-tab" data-toggle="tab" href="#toprated" role="tab"
                               aria-controls="toprated" aria-selected="false">@lang('lang.top rated')</a>
                        </li>

                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="container-fluid" style="padding: 0px !important;">
                                <div class="row">
                                    <div class="col-md-12">

                                        <div class="card">
                                            <div class="card-header card-header-primary card-header-icon">
                                                <div class="row">
                                                    <div class="col-xl-6 col-md-12 col-12">

                                                        <div class="row">
                                                            <div class="col-xl-5 col-md-12 col-xs-12">

                                                                <h4 class="card-title">@lang('lang.Perfumes')
                                                                    <span>()</span></h4>
                                                            </div>
                                                            <div class="col-xl-7 col-md-12 col-xs-12">
                                                                @include('livewire.perfume.createperfume')
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-1"></div>
                                                <div class="col-xl-4 col-md-2 col-2">
                                                    <button type="button" class="btn btn-info filter-btn"
                                                            data-toggle="collapse"
                                                            data-target="#demo"
                                                            style="margin:14px 0px;">@lang('lang.Filter')
                                                    </button>

                                                </div>
                                                <div id="demo" class="collapse row" style="width:100%;margin:1%">

                                                    <div class="col-xl-4  col-md-4 col-lg-4 col-12 form-group">

                                                        <label class="">@lang('lang.name') </label>
                                                        <input wire:model="name"
                                                               type="text" class="form-control"/>
                                                    </div>
                                                <!-- <div class="col-xl-4  col-md-4 col-lg-4 col-12 form-group">

                                                <label class="">Status

                                                </label>
                                                <select

                                                    class="form-control date date1" id="GenderId"
                                                    name="GenderId" placeholder="All" wire:model="active">
                                                    <option selected disabled> Select</option>
                                                    <option value="1">@lang('lang.active')</option>
                                                    <option value="0">@lang('lang.nonactive')</option>
                                                </select>

                                            </div> -->

                                                </div>

                                            <!-- <div class="col-xl-5 col-md-12 col-12">
                                                            <div class="row">
                                                                <div class="col-xl-4 offset-xl-1 col-12">

                                                                        <h4 class="card-title date">Date   <span style="margin-left: 5px;"> <input id="datepicker" placeholder="Choose the time" style="width: 180px;"/></span></h4>
                                                                </div>
                                                                <div class="col-xl-7 col-12">
                                                                    <div class="row">
                                                                        <div class="col-xl-12 col-12">
                                                                                <h4 class="card-title date date1">position <span style="margin-left: 5px;">
                                                                                        <select class="form-control date date1" id="GenderId" name="GenderId" placeholder="All">
                                                                                            <option value="1">one</option>
                                                                                            <option value="2">two</option>
                                                                                            <option value="3">three</option>
                                                                                    </select>
                                                                                    </span> <span style="margin-left: 5px;"> <img src="{{ asset('assets/front/images/icons/Group 68.png') }}" class="img-fluid btn date" width="35px" style="cursor: pointer;padding: 0px;"></span></h4>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div> -->
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="toolbar">
                                                @if (flash()->message)
                                                    <div class=" btn btn-success form-control  alert alert-box">
                                                        {{ flash()->message }}
                                                    </div>
                                                @endif

                                                <div class="row">

                                                    <div class="col-xl-2  col-lg-2 col-md-3 col-3">

                                                        <button wire:click="export"

                                                                class="form-control"> @lang('lang.export')</button>

                                                    </div>
                                                    <div class="col-xl-2  col-lg-2 col-md-3 col-3">

                                                        <button wire:click="exportCsv"

                                                                class="form-control"> @lang('lang.csv')</button>

                                                    </div>
                                                    <div class="col-xl-2 col-lg-2  col-md-3 col-3">

                                                        <button wire:click="exportPdf"

                                                                class="form-control"> @lang('lang.pdf')</button>

                                                    </div>
                                                </div>


                                            </div>

                                            <div class="material-datatables table-responsive table">
                                                <table id="datatables"
                                                       class="table table-striped table-no-bordered table-hover"
                                                       cellspacing="0" width="100%" style="width:100%">
                                                    <thead>
                                                    @if($data !== 'null' && count($data )>0)
                                                        <tr>

                                                            <td></td>

                                                            <td>@lang('lang.PERFUME NAME EN')</td>
                                                            <td>@lang('lang.date')</td>
                                                            <td>@lang('lang.STOCK')</td>
                                                            >
                                                            <td>@lang('lang.PRICE')</td>


                                                            <th class="disabled-sorting text-right"></th>
                                                        </tr>

                                                    </thead>

                                                    <tbody>

                                                    @foreach($data as $row)

                                                        <tr>
                                                            <td><input type="checkbox"
                                                                       aria-label="Checkbox for following text input">
                                                            </td>
                                                            <td>{{$row->perfume_name_en}}</td>

                                                            <td>{{$row->created_at}}</td>
                                                            <td>{{$row->stock}}</td>

                                                            <td>{{$row->price}}</td>


                                                            <td class="text-right">
                                                                @include('livewire.perfume.updateperfume')
                                                                <a wire:click="destroy({{$row->id}})" class="btn"><i
                                                                        class="material-icons"><img
                                                                            src="{{ asset('assets/front/images/icons/trash1.png') }}"
                                                                            class="img-fluid" width="25px"></i></a>
                                                            </td>
                                                        </tr>

                                                    @endforeach

                                                    @else
                                                        <div
                                                            class="col-12 d-flex justify-content-center align-items-center"
                                                            style="height: 300px;">
                                                            <div class="col-12 d-inline-block text-center">
                                                                <i class="fa fa-table fa-5x" aria-hidden="true"></i>
                                                                <br><br>
                                                                @lang('lang.no_data')
                                                            </div>
                                                        </div>
                                                    @endif

                                                    </tbody>
                                                </table>
                                            </div>

                                        </div>
                                        <!-- end content-->
                                    </div>
                                    <!--  end card  -->
                                </div>
                                <!-- end col-md-12 -->
                            </div>
                            <!-- end row -->
                        </div>
                        <!-- /.box -->
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    @include('dashboard.bestseller')
                    <!-- /.box -->

                    </div>
                    <div class="tab-pane fade" id="toprated" role="tabpanel" aria-labelledby="toprated-tab">
                    @include('dashboard.toprated')
                    <!-- /.box -->

                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
