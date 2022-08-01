<div>
    <section class="address">

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">

                    <div class="card">

                        <div class="card-header card-header-primary card-header-icon">
                            <div class="row">

                                <div class="col-xl-12 col-md-12 col-12">

                                    <div class="row">
                                        <div class="col-xl-8 col-md-8 col-8">
                                            <div class="card-icon">
                                                <img src="{{ asset('assets/front/images/icons/Group 201.png') }}"
                                                     class="img-fluid" width="35px">
                                            </div>
                                            <h4 class="card-title">@lang('lang.Adress') ({{$data['total']}})
                                                <span> </span>
                                            </h4>
                                        </div>

                                        <div class="col-xl-2 col-md-2 col-2">
                                            @can('create_address')
                                                @include('livewire.Address.createaddress')

                                            @endcan
                                        </div>
                                        <div class="col-xl-2 col-md-2 col-2">
                                            <button type="button" class="btn btn-info filter-btn" data-toggle="collapse"
                                                    data-target="#demo" style="margin:14px 0px;">Filter
                                            </button>

                                        </div>
                                    </div>
                                </div>


                                <div id="demo" class="collapse row" style="width:100%;margin:1%">

                                    <div class="col-xl-4  col-md-4 col-lg-4 col-12 form-group">

                                        <label class="">@lang('lang.name') </label>
                                        <input wire:model="block"
                                               type="text" class="form-control"/>
                                    </div>
                                    <div class="col-xl-4  col-md-4 col-lg-4 col-12 form-group">


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
                            </div>
                            <div class="material-datatables table-responsive table">
                                <table id="datatables" class="table table-striped table-no-bordered table-hover"
                                       cellspacing="0" width="100%" style="width:100%">
                                    <thead>
                                    @if($data['address']  !== 'null' && count($data['address']  )>0)
                                        <tr>

                                            <td>@lang('lang.NO')</td>
                                            <td>@lang('lang.BLOCK')</td>
                                            <td>@lang('lang.STREET')</td>
                                            <td>@lang('lang.APARTMENT')</td>
                                            <td>@lang('lang.CITY')</td>
                                            <td>@lang('lang.REGION')</td>
                                            <td>@lang('lang.GOVERNORATE')</td>

                                            <th>@lang('lang.created_at')</th>

                                            <th class="disabled-sorting text-right"></th>
                                        </tr>

                                    </thead>

                                    <tbody>

                                    @foreach($data['address'] as $row)

                                            <tr>
                                                <td>{{$loop->index + 1}}</td>
                                                <td>{{$row->block}}</td>
                                                <td>{{$row->street}}</td>
                                                <td>{{$row->apartment}}</td>
                                                <td>{{$row->city}}</td>
                                                <td>{{$row->region}}</td>
                                                <td>{{$row->governorate}}</td>
                                                <td>{{$row->created_at}}</td>
                                                <td>
                                       @can('update_address')

                                                    @include('livewire.Address.updateaddress')
                                                    @endcan
                                           @can('delete_address')

                                           <a      onclick="confirm('Are you sure?') || event.stopImmediatePropagation()" wire:click="destroy({{$row->id}})" class="btn"><img
                                                            src="{{ asset('assets/front/images/icons/trash1.png') }}"
                                                            class="img-fluid" width="25px"></a>
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


        @if(count($data['address'] )>0)
            <div class="align-center">
                {!! $data['address']->links()  !!}
            </div>
        @endif
    </section>

</div>
