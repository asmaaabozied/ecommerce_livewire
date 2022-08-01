<div>
    <section class="roles">

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">

                    <div class="card">
                        <div class="card-header card-header-primary card-header-icon">
                            <div class="row">
                                <div class="col-xl-6 col-md-12 col-12 padding_side">

                                    <div class="row">
                                        <div class="col-xl-6 col-md-6 col-12">
                                            <div class="card-icon">
                                                <img src="{{ asset('assets/front/images/icons/Group 201.png') }}"
                                                     class="img-fluid" width="35px">
                                            </div>
                                            <h4 class="card-title">@lang('lang.Order') <span> </span>
                                            </h4>
                                        </div>
                                        <div class="col-xl-6 col-md-6 col-1 padding_side">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-md-12 col-12">
                                    <div class="row">
                                        <div class="col-xl-6 col-12">
<!-- 
                                            <h4 class="card-title date">@lang('lang.name') <span
                                                    style="margin-left: 20px;">
                                                    <input wire:model="name"
                                                           type="text" class="form-control"/></span></h4> -->

                                                    <input wire:model="search" type="text" class="form-control"/>
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
                            </div>
                            <div class="material-datatables table-responsive table">
                                <table id="datatables" class="table table-striped table-no-bordered table-hover"
                                       cellspacing="0" width="100%" style="width:100%">
                                    <thead>
                                    @if($data !== 'null' && count($data )>0)
                                        <tr>
                                            
                                            <td>@lang('lang.NO')</td>
                                            <td>@lang('lang.DATE')</td>
                                            <td>@lang('lang.TOTAL')</td>
                                            <td>@lang('lang.STATUS')</td>

                                            <th>@lang('lang.created_at')</th>

                                            <th class="disabled-sorting text-right"></th>
                                        </tr>

                                    </thead>

                                    <tbody>

                                    @foreach($data as $row)
                
                                            <tr>
                                                <td>{{$loop->index + 1}}</td>
                                                <td>{{$row->date}}</td>
                                                <td>{{$row->total}}</td>
                                                <td>{{$row->status}}</td>
                                                <td>{{$row->created_at}}</td>
                                                <td>
                                                    <a wire:click="destroy({{$row->id}})" class="btn"><img
                                                            src="{{ asset('assets/front/images/icons/trash1.png') }}"
                                                            class="img-fluid" width="25px"></a>
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

    </section>

</div>
 