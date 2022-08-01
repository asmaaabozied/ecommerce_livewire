<a data-toggle="modal" data-target="#exampleModal" class="pull-right btn">@lang('lang.create new')<i
        class="fa fa-arrow-circle-right"></i></a>
<!-- Modal -->
<div wire:ignore.self class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
     aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <div id="OpenDialog" class="modal-body" style="background-color: #1B222C;">

                <div class="card ">

                    <div class="card-header card-header-rose card-header-icon">

                        <div class="card-icon">
                            <img src="{{ asset('assets/front/images/icons/Group 109.png') }}"
                                 class="img-fluid"
                                 width="35px">
                        </div>
                        <div class="row">

                            <div class="col-md-10 col-9">
                                <h4 class="card-title">@lang('lang.create new')</h4>

                            </div>
                            <div class="col-md-2 col-3">
                                <button type="button" class="btn btn-fill close" data-dismiss="modal" aria-label="Close"
                                        style="font-size: 25px;"><i class="fa fa-times-circle"></i>
                                </button>
                            </div>
                        </div>

                    </div>
                    <div class="card-body ">


                        <div class="row">

                            <div class="col-xl-6">
                                <div class="form-group bmd-form-group">

                                    <label for="exampleInputPassword1">@lang('lang.Enter Name en')</label>
                                    <input type="text" wire:model.defer="perfume_name_en" class="form-control input-sm"
                                           placeholder="Name">
                                    <span class="text-danger"> @error('perfume_name_en') {{$message}} @enderror </span>

                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="form-group bmd-form-group">

                                    <label for="exampleInputPassword1">@lang('lang.Enter Name ar')</label>
                                    <input type="text" wire:model.defer="perfume_name_ar" class="form-control input-sm"
                                           placeholder="Name">
                                    <span class="text-danger"> @error('perfume_name_ar') {{$message}} @enderror </span>

                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div wire:ignore class="form-group bmd-form-group">

                                    <label for="exampleInputPassword1">@lang('lang.Enter desc en')</label>
                                    <textarea wire:model.defer="desc_en" class="form-control" id="summary-ckeditor"
                                              name="summary-ckeditor"></textarea>

                                    <span class="text-danger"> @error('desc_en') {{$message}} @enderror </span>

                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div wire:ignore class="form-group bmd-form-group">

                                    <label for="exampleInputPassword1">@lang('lang.Enter desc ar')</label>
                                    <textarea wire:model.defer="desc_ar" class="form-control" id="summary-ckeditor1"
                                              name="summary-ckeditor1"></textarea>

                                    <span class="text-danger"> @error('desc_ar') {{$message}} @enderror </span>

                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-xl-6">
                                <div class="form-group bmd-form-group">

                                    <label for="exampleInputPassword1">@lang('lang.Enter price')</label>
                                    <input type="number" class="form-control input-sm" placeholder="price"
                                           wire:model.defer="price">
                                    <span class="text-danger"> @error('price') {{$message}} @enderror </span>

                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="form-group bmd-form-group">

                                    <label for="exampleInputPassword1">@lang('lang.Enter category')</label>
                                    <select

                                        class="form-control date date1" id="GenderId"
                                        name="GenderId" placeholder="All" wire:model.defer="category">
                                        <option selected disabled> all</option>
                                        @foreach($cats as $row)
                                            <option value="{{$row->id}}">{{$row->name_en}}</option>
                                            <!-- <option value="french">french</option> -->
                                        @endforeach
                                    </select>
                                    <span class="text-danger"> @error('category') {{$message}} @enderror </span>

                                </div>
                            </div>

                            <div class="col-xl-6">
                                <div class="form-group bmd-form-group">
                                    <label for="exampleInputPassword1">@lang('lang.Enter stock')</label>
                                    <input type="text" wire:model.defer="stock" class="form-control input-sm"
                                           placeholder="stock">
                                    <span class="text-danger"> @error('stock') {{$message}} @enderror </span>

                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="form-group bmd-form-group">
                                    <label for="exampleInputPassword1">@lang('lang.Enter image')</label>
                                    <input type="file" wire:model.defer="image" class="form-control input-sm"
                                           placeholder="image">
                                    <span class="text-danger"> @error('image') {{$message}} @enderror </span>

                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="form-group bmd-form-group">
                                    <label for="exampleInputPassword1">@lang('lang.Enter Discount')</label>
                                    <input type="text" wire:model.defer="discount" class="form-control input-sm"
                                           placeholder="discount">
                                    <span class="text-danger"> @error('discount') {{$message}} @enderror </span>

                                </div>




                                            </div>



                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group bmd-form-group">
                                        <label for="exampleInputPassword1">@lang('lang.start_date')</label>
                                        <input type="date" wire:model.defer="start_date" class="form-control input-sm"
                                               placeholder="start_date">
                                        <span class="text-danger"> @error('start_date') {{$message}} @enderror </span>

                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group bmd-form-group">
                                        <label for="exampleInputPassword1">@lang('lang.end_date')</label>
                                        <input type="date" wire:model.defer="end_date" class="form-control input-sm"
                                               placeholder="end_date">
                                        <span class="text-danger"> @error('end_date') {{$message}} @enderror </span>

                                    </div>
                                </div>

                            </div>
                                            <div class="col-md-12">
                                                <label class="container">@lang('lang.status')
                                                    <input type="checkbox" name="status" value="1"
                                                           wire:model.defer="status">
                                                    <span class="checkmark"></span>
                                                </label>

                                            </div>

                            <div class="col-md-12">
                                <div class="form-group bmd-form-group">
                                    <label for="exampleInputPassword1">@lang('lang.offers')</label>
                                    <input type="checkbox" name="offers" value="1"
                                           wire:model.defer="offers">

                                </div>
                            </div>


                                        </div>

                                        <div class="card-footer ">
                                            <button class="btn btn-fill btn-rose pull-right" wire:click="store()"
                                            >@lang('lang.submit')
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

