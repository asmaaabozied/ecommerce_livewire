

    <section class="articles">

        <div class="container-fluid">
            <div class="row">
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
                                        <h4 class="card-title">@lang('lang.education') ({{$data['total']}})
                                            <span> </span>
                                        </h4>
                                    </div>

                                    <div class="col-xl-2 col-md-2 col-2">

                                        @can('create_education')
                                    @include('livewire.education.create')
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
                                    <input wire:model="name"
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
                <!--        Here you can write extra buttons/actions for the toolbar              -->


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
                    <table id="datatables" class="table table-striped table-no-bordered table-hover"
                           cellspacing="0" width="100%" style="width:100%">
                        <thead>
                        @if($data['education'] !== 'null' && count($data['education'] )>0)
                            <tr>
                                <th>@lang('lang.id')</th>
                                <th>@lang('lang.name')</th>

                                <th>@lang('lang.created_at')</th>
                                <th>@lang('lang.image')</th>

                                <th class="disabled-sorting text-right"></th>
                            </tr>

                        </thead>

                        <tbody>


                        @foreach($data['education']  as $education)
                            <tr>
                                <td><input type="checkbox"
                                           aria-label="Checkbox for following text input"></td>
                                <th>{{$education->name}}</th>
                                <th>{{isset($education->created_at) ?$education->created_at->diffForHumans() :''}}

                                </th>

                                <td><span><img
                                            src="{{ $education->image_path }}"
                                            class="img-fluid" width="100px"></span></td>
                                <td class="text-right">
                                    @can('update_education')
                                    <a data-toggle="modal" onclick="RenderActions1('')"
                                       wire:click="toggleEditModal({{$education->id}})"
                                       title="Click to edit"
                                       data-backdrop="static" data-keyboard="false"
                                       class="btn" style="padding:0;"> <i
                                            class="material-icons"><img
                                                src="{{ asset('assets/front/images/icons/edit1.png') }}"
                                                class="img-fluid" width="25px"></i></a>
                                    @endcan
                                        @can('delete_education')
                                    <a onclick="confirm('Are you sure?') || event.stopImmediatePropagation()"
                                       wire:click="destroy({{$education->id}})"><i
                                            class="material-icons"><img
                                                src="{{ asset('assets/front/images/icons/trash1.png') }}"
                                                class="img-fluid" width="25px"></i>
                                    </a>
                                    @endcan


                                        @can('read_education')
                                        <a data-toggle="modal" wire:click="toggleShowModal({{$education->id}})"
                                       onclick="RenderActions('/Users/EditUser/ed3256e3-9e4f-4ea4-a985-3f507ea89689')"
                                       data-backdrop="static" data-keyboard="false"       title="Click to edit" data-target="#modalUser1" class="btn"
                                       style="padding:0;"> <i class="material-icons"><img
                                                src="{{ asset('assets/front/images/icons/menu-dots-vertical.png') }}"
                                                class="img-fluid" width="25px"></i></a>
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
                        @if($EditModelOpened==true)
                            @include('livewire.education.edit')

                            {{--// showpopModal--}}
                        @elseif($ShowModelOpened==true)

                            @include('livewire.education.show')


                            <!-- createpopModal -->
                        @elseif($AddModelOpened==true)

                            @include('livewire.education.create')
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

@if(count($data['education'] )>0)
    <div class="align-center">
        {!! $data['education']->links()  !!}
    </div>
    @endif

    </section>

    </div>










