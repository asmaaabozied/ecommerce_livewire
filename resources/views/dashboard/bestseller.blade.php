<div class="container-fluid" style="padding: 0px !important;">
                                <div class="row">
                                    <div class="col-md-12">

                                        <div class="card">
                                                <div class="card-header card-header-primary card-header-icon">
                                                    <div class="row">
                                                        <div class="col-xl-6 col-md-12 col-12">

                                                                <div class="row">
                                                                    <div class="col-xl-5 col-md-12 col-xs-12">

                                                                        <h4 class="card-title">@lang('lang.best seller') <span></span> </h4>
                                                                    </div>
                                                                    <div class="col-xl-7 col-md-12 col-xs-12">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-1"></div>
                                                        <div class="col-xl-4 col-md-2 col-2">
                                       

                                   
                                  

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
                            <!--        Here you can write extra buttons/actions for the toolbar              -->
                            </div>

                                            <div class="material-datatables table-responsive table">
                                <table id="datatables" class="table table-striped table-no-bordered table-hover"
                                       cellspacing="0" width="100%" style="width:100%">
                                    <thead>
                                    @if($data !== 'null' && count($data )>0)
                                        <tr>
                                            
                                        <td></td>
                                        <td></td>
                                        <td>@lang('lang.PERFUME NAME')</td>
                                        <td>@lang('lang.DATE CREATED')</td>
                                        <td>@lang('lang.STOCK')</td>
                                        <td>@lang('lang.PRICE')</td>
                                        <td>@lang('lang.DISCOUNT')</td>
                                        <td>@lang('lang.CATEGORY')</td>
                                      
                                            <th class="disabled-sorting text-right"></th>
                                        </tr>

                                    </thead>

                                    <tbody>
                                    @if($status == false )

                                    @foreach($data as $row)
                
                                            <tr>
                                            <td><input type="checkbox" aria-label="Checkbox for following text input"></td>
                                            <td><span><img src="{{ $row->image_path }}" class="img-fluid" width="100px"></span></td>
                                            <td>{{$row->perfume_name}}</td>
                                            <td>{{$row->created_at}}</td>
                                            <td>{{$row->stock}}</td>
                                            <td>{{$row->price}}</td>
                                            <td>{{$row->discount}}</td>
                                            <td>{{$row->category}}</td>
                                            
                                                <td class="text-right">
                                                @include('livewire.perfume.updateperfume')
                                                    <a wire:click="destroy({{$row->id}})" class="btn"><i class="material-icons"><img
                                                            src="{{ asset('assets/front/images/icons/trash1.png') }}"
                                                            class="img-fluid" width="25px"></i></a>
                                                </td>
                                            </tr>

                                           

                                    @endforeach
                                    @endif

                                    @else
                                        <div class="col-12 d-flex justify-content-center align-items-center"
                                             style="height: 300px;">
                                            <div class="col-12 d-inline-block text-center">
                                                    <i class="fa-brands fa-searchengin"></i>
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
                            
