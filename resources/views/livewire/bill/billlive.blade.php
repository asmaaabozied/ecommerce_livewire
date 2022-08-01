<div>
    <section class="roles">

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">

                    <div class="card">

                        <div class="card-header card-header-primary card-header-icon">
                            <div class="row">

                                <div class="col-xl-12 col-md-12 col-12">

                                    <div class="row">
                                        <div class="col-xl-8 col-md-8 col-12">
                                            <div class="card-icon">
                                                <img src="{{ asset('assets/front/images/icons/Group 201.png') }}"
                                                     class="img-fluid" width="35px">
                                            </div>
                                            <h4 class="card-title">@lang('lang.bills') ({{$data['total']}})
                                                <span> </span>
                                            </h4>
                                        </div>

                                        <div class="col-xl-2 col-md-2 col-1">

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
                                        <input wire:model="username"
                                               type="text" class="form-control"/>
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
                                    @if($data['bill'] !== 'null' && count($data['bill'] )>0)
                                        <tr>

                                            <td>NO</td>
                                            <td>CLIENT NAME</td>
                                            <td>EMAIL</td>
                                            <td>PHONE</td>
                                            <td>ADDRESS</td>


                                            <th class="disabled-sorting text-right"></th>
                                        </tr>

                                    </thead>

                                    <tbody>

                                    @foreach($data['bill'] as $row)

                                            <tr>
                                                <td>{{$loop->index + 1}}</td>
                                                <td>{{$row->username}}</td>
                                                <td>{{$row->client_email}}</td>
                                                <td>{{$row->phone}}</td>
                                                <td>{{$row->address}}</td>

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



        @if(count($data['bill'] )>0)
            <div class="align-center">
                {!! $data['bill']->links()  !!}
            </div>
        @endif
    </section>

</div>
