

<section class="position">

    <div class="container-fluid">
        <div class="row">
            <div class="card">
                <div class="card-header card-header-primary card-header-icon">
                    <div class="row">

                        <div class="col-xl-12 col-md-12 col-12">

                            <div class="row">
                                <div class="col-xl-6 col-md-8 col-7">
                                    <div class="card-icon">
                                        <img src="{{ asset('assets/front/images/icons/Group 201.png') }}"
                                             class="img-fluid" width="35px">
                                    </div>
                                    <h4 class="card-title">@lang('lang.positions') ({{$data['total']}})
                                        <span> </span>
                                    </h4>
                                </div>

                                <div class="col-xl-3 col-md-2 col-1">
                                    @can('create_position')
                                        <a wire:click="toggleAddModal"
                                           data-backdrop="static" data-keyboard="false"
                                           class="pull-right btn">@lang('lang.create new') <i
                                                class="fa fa-arrow-circle-right"></i></a>
                                    @endcan
                                </div>
                                <div class="col-xl-3 col-md-2 col-3">
                                    <button type="button" class="btn btn-info filter-btn" data-toggle="collapse"
                                            data-target="#demo" style="margin:14px 0px;">Filter
                                    </button>

                                </div>
                            </div>
                        </div>


                        <div id="demo" class="collapse row" style="width:100%;margin:1%">

                            <div class="col-xl-4  col-md-4 col-lg-4 col-12 form-group">

                                <label class="">@lang('lang.name') </label>
                                <input wire:model="position_name"
                                       type="text" class="form-control"/>
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
            <!--        Here you can write extra buttons/actions for the toolbar              -->



                <div class="row">

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


            </div>


            <div class="material-datatables table-responsive table">
                <table id="datatables" class="table table-striped table-no-bordered table-hover"
                       cellspacing="0" width="100%" style="width:100%">
                    <thead>
                    @if($data['position'] !== 'null' && count($data['position'] )>0)
                        <tr>
                            <th>@lang('lang.id')</th>
                            <td>@lang('lang.POSITION NAME')</td>
                            <td>@lang('lang.DATE')</td>
                            <td>@lang('lang.ALLOWED')</td>

                            <th>@lang('lang.created_at')</th>


                            <th class="disabled-sorting text-right"></th>
                        </tr>

                    </thead>

                    <tbody>


                    @foreach($data['position']  as $data)
                        <tr>
                            <td><input type="checkbox"
                                       aria-label="Checkbox for following text input"></td>
                            <td>{{$data->position_name}}</td>
                            <td>{{$data->date}}</td>
                            <td>{{$data->allowed}}</td>
                            <th>{{isset($data->created_at) ?$data->created_at->diffForHumans() :''}}

                            </th>


                            <td class="text-right">
                                @can('update_position')
                                    <a data-toggle="modal" onclick="RenderActions1('')"
                                       wire:click="edit({{$data->id}})"
                                       data-backdrop="static" data-keyboard="false"   title="Click to edit"
                                       class="btn" style="padding:0;"> <i
                                            class="material-icons"><img
                                                src="{{ asset('assets/front/images/icons/edit1.png') }}"
                                                class="img-fluid" width="25px"></i></a>
                                @endcan

                                @can('delete_position')
                                    <a onclick="confirm('Are you sure?') || event.stopImmediatePropagation()"
                                       wire:click="destroy({{$data->id}})"><i
                                            class="material-icons"><img
                                                src="{{ asset('assets/front/images/icons/trash1.png') }}"
                                                class="img-fluid" width="25px"></i>
                                    </a>
                                @endcan



                            </td>
                        </tr>
                    @endforeach

                    @else
                        <div class="col-12 d-flex justify-content-center align-items-center"
                             style="height: 300px;">
                            <div class="col-12 d-inline-block text-center">
                                <i class="fa fa-table fa-5x" aria-hidden="true"></i>
                                <br><br>
                                <p> @lang('lang.no_data') <p>
                            </div>
                        </div>
                    @endif

                    {{--//editpopModal--}}
                    @if($updateMode==true)
                        @include('livewire.position.edit')

                        {{--// showpopModal--}}



                        <!-- createpopModal -->
                    @elseif($AddModelOpened==true)

                        @include('livewire.position.create')
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

{{--@if(count($data['position'])>0)--}}
{{--    <div class="align-center">--}}
{{--        {!! $data['position']->links()  !!}--}}
{{--    </div>--}}
{{--    @endif--}}

    </section>

    </div>










