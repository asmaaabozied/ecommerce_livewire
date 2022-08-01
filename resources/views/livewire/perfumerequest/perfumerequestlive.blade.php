{{--<div>--}}
{{--    <section class="perfumerequest">--}}

{{--        <div class="container-fluid">--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-12">--}}

{{--                    <div class="card">--}}
{{--                        <div class="card-header card-header-primary card-header-icon">--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-xl-6 col-md-12 col-12 padding_side">--}}

{{--                                    <div class="row">--}}
{{--                                        <div class="col-xl-6 col-md-6 col-6">--}}
{{--                                            <div class="card-icon">--}}
{{--                                                <img src="{{ asset('assets/front/images/icons/Group 201.png') }}"--}}
{{--                                                     class="img-fluid" width="35px">--}}
{{--                                            </div>--}}
{{--                                            <h4 class="card-title">perfume request <span> </span>--}}
{{--                                            </h4>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-xl-6 col-md-6 col-6 padding_side">--}}
{{--                                                    <!-- @include('livewire.perfumerequest.createrequest') -->--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                              </div>--}}
{{--                              </div>--}}
{{--                                <div class="col-xl-6 col-md-12 col-12">--}}
{{--                                    <div class="row">--}}
{{--                                        <div class="col-xl-6 col-12">--}}

{{--                                            <h4 class="card-title date">name <span--}}
{{--                                                    style="margin-left: 20px;">--}}
{{--                                                    <input wire:model="name"--}}
{{--                                                           type="text" class="form-control"/></span></h4>--}}
{{--                                        </div>--}}
{{--                                      --}}
{{--                                    </div>--}}

{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}


<section class="pages">

    <div class="container-fluid">
        <div class="row">
            <div class="card">
                <div class="card-header card-header-primary card-header-icon">
                    <div class="row">

                        <div class="col-xl-12 col-md-12 col-12">

                            <div class="row fold_size">
                                <div class="col-xl-8 col-md-8 col-12">
                                    <div class="card-icon">
                                        <img src="{{ asset('assets/front/images/icons/Group 201.png') }}"
                                             class="img-fluid" width="35px">
                                    </div>
                                    <h4 class="card-title">@lang('lang.perfumerequest') ({{$data['total']}})
                                        <span> </span>
                                    </h4>
                                </div>

                                <div class="col-xl-2 col-md-2 col-7">
                                    <a data-toggle="modal" data-target="#exampleModal" class="pull-right btn">@lang('lang.create new')<i
                                            class="fa fa-arrow-circle-right"></i></a>
                                </div>
                                <div class="col-xl-2 col-md-2 col-4">
                                    <button type="button" class="btn btn-info filter-btn" data-toggle="collapse"
                                            data-target="#demo" style="margin:14px 0px;">Filter
                                    </button>

                                </div>
                            </div>
                        </div>


                        <div id="demo" class="collapse row" style="width:100%;margin:1%">

                            <div class="col-xl-4  col-md-4 col-lg-4 col-12 form-group">

                                <label class="">@lang('lang.name') </label>
                                <input wire:model="req_name"
                                       type="text" class="form-control"/>
                            </div>
                            <div class="col-xl-4  col-md-4 col-lg-4 col-12 form-group">

                                <label class="">Status

                                </label>
                                <select

                                    class="form-control date date1" id="GenderId"
                                    name="GenderId" placeholder="All" wire:model="active">
                                    <option selected disabled> Select</option>
                                    <option value="1">@lang('lang.active')</option>
                                    <option value="0">@lang('lang.nonactive')</option>
                                </select>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

                        <div class="card-body">
                            <div class="toolbar">
                                @if (flash()->message)
                                    <div class=" btn btn-success form-control  alert alert-box">
                                        {{ flash()->message }}
                                    </div>
                            @endif



                                    <div class="row fold_size">

                                        <div class="col-xl-2  col-lg-2 col-md-3 col-4">

                                            <button wire:click="export"

                                                    class="form-control"> @lang('lang.export')</button>

                                        </div>
                                        <div class="col-xl-2  col-lg-2 col-md-3 col-4">

                                            <button wire:click="exportCsv"

                                                    class="form-control"> @lang('lang.csv')</button>

                                        </div>
                                        <div class="col-xl-2 col-lg-2  col-md-3 col-4">

                                            <button wire:click="exportPdf"

                                                    class="form-control"> @lang('lang.pdf')</button>

                                        </div>
                                    </div>

                            <!--        Here you can write extra buttons/actions for the toolbar              -->
                            </div>
                            <div class="material-datatables table-responsive table">
                                <table id="datatables" class="table table-striped table-no-bordered table-hover"
                                       cellspacing="0" width="100%" style="width:100%">
                                    <thead>
                                    @if($data['perfumerequest'] !== 'null' && count($data['perfumerequest'] )>0)
                                        <tr>

                                            <td>NO</td>
                                            <td>@lang('lang.name')</td>
                                            <td>@lang('lang.quantity')</td>

                                            <td>@lang('lang.cost')</td>
                                            <td>@lang('lang.stock')</td>
                                            <td>@lang('lang.date')</td>



                                            <th class="disabled-sorting text-right"></th>
                                        </tr>

                                    </thead>

                                    <tbody>

                                    @foreach($data['perfumerequest'] as $row)

                                            <tr>
                                                <td>{{$loop->index + 1}}</td>
                                                <td>{{$row->req_name}}</td>
                                                <td>{{$row->quantity}}</td>
                                                <td>{{$row->cost}}</td>
                                                <td>{{$row->stock}}</td>
                                                <td>{{$row->date}}</td>

                                                <td>
                                               
                                                    <a data-toggle="modal" data-target="#updateModal" wire:click="edit({{$row->id}})" title="Click to edit" class="btn" style="padding:0;"> <i
                                                            class="material-icons"><img
                                                                src="{{ asset('assets/front/images/icons/edit1.png') }}"
                                                                class="img-fluid" width="25px"></i></a>

                                                    <a onclick="confirm('Are you sure?') || event.stopImmediatePropagation()"
                                                       wire:click="destroy({{$row->id}})"><i
                                                            class="material-icons"><img
                                                                src="{{ asset('assets/front/images/icons/trash1.png') }}"
                                                                class="img-fluid" width="25px"></i>
                                                    </a>
                                                </td>
                                            </tr>

                                    @endforeach

                                    @else
                                        <div class="col-12 d-flex justify-content-center align-items-center"
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
    </div>

    <!-- end content-->

    <!--  end card  -->


</section>


<!-- end row -->

<!-- /.box -->

@if(count($data['perfumerequest'] )>0)
    <div class="align-center">
        {!! $data['perfumerequest']->links()  !!}
    </div>
    @endif

    </section>

    </div>







