<div>
    {{--     AddPopModal--}}
    <div class="modal" role="dialog" data-backdrop="true" style="display: block">
        <div class="modal-dialog modal-dialog-scrollable">

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
                                    <h4 class="card-title">@lang('lang.add')</h4>


                                </div>
                                <div class="col-md-2 col-3">
                                    <button type="button" class="btn btn-fill" data-dismiss="modal"
                                            wire:click="toggleAddModal"
                                            style="font-size: 25px;"><i class="fa fa-times-circle"></i>
                                    </button>
                                </div>
                            </div>

                        </div>
                        <div class="card-body ">


                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="form-group bmd-form-group">

                                        <label for="Name"
                                               class="bmd-label-floating">@lang('lang.name')</label>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <input class="form-control"
                                                       type="text" data-val="true"
                                                       :errors="$error"
                                                       placeholder="@lang('lang.name')" id="Name"
                                                       name="name"
                                                       spellcheck="false" data-ms-editor="true"
                                                       wire:model.defer="name">

                                                <span class="text-danger">

                                                       @error('name') {{$message}} @enderror
                                                   </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="form-group bmd-form-group">

                                        <label for="Name"
                                               class="bmd-label-floating">@lang('lang.code')</label>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <input class="form-control"
                                                       type="text" data-val="true"
                                                       wire:errors="$errors"
                                                       placeholder="@lang('lang.code')" id="Name"
                                                       name="code"
                                                       spellcheck="false" data-ms-editor="true"
                                                       wire:model.defer="code">

                                                <span class="text-danger">
                                                       @error('code') {{$message}} @enderror
                                                   </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="form-group bmd-form-group">

                                        <label for="Name"
                                               class="bmd-label-floating">@lang('lang.value')</label>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <input class="form-control"
                                                       type="text" data-val="true"
                                                       :errors="$error"
                                                       placeholder="@lang('lang.value')" id="value"
                                                       name="value"
                                                       spellcheck="false" data-ms-editor="true"
                                                       wire:model.defer="value">

                                                <span class="text-danger">

                                                       @error('value') {{$message}} @enderror
                                                   </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="form-group bmd-form-group">

                                        <label for="Name"
                                               class="bmd-label-floating">@lang('lang.number')</label>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <input class="form-control"
                                                       type="text" data-val="true"
                                                       wire:errors="$errors"
                                                       placeholder="@lang('lang.number')" id="number"
                                                       name="number"
                                                       spellcheck="false" data-ms-editor="true"
                                                       wire:model.defer="number">

                                                <span class="text-danger">
                                                       @error('number') {{$message}} @enderror
                                                   </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="form-group bmd-form-group">

                                        <label for="Name"
                                               class="bmd-label-floating">@lang('lang.start_date')</label>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <input class="form-control date"
                                                       type="date" data-val="true"
                                                       :errors="$error"
                                                       placeholder="@lang('lang.start_date')" id="start_date"
                                                       name="start_date"
                                                       spellcheck="false" data-ms-editor="true"
                                                       wire:model.defer="start_date">

                                                <span class="text-danger">

                                                       @error('start_date') {{$message}} @enderror
                                                   </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="form-group bmd-form-group">

                                        <label for="Name"
                                               class="bmd-label-floating">@lang('lang.end_date')</label>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <input class="form-control date"
                                                       type="date" data-val="true"
                                                       wire:errors="$errors"
                                                       placeholder="@lang('lang.end_date')" id="number"
                                                       name="end_date"
                                                       spellcheck="false" data-ms-editor="true"
                                                       wire:model.defer="end_date">

                                                <span class="text-danger">
                                                       @error('end_date') {{$message}} @enderror
                                                   </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="form-group bmd-form-group">

                                        <label for="Name"
                                               class="bmd-label-floating">@lang('lang.categories')</label>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <select class="form-control date date1" id="category_id"
                                                        name="category_id" wire:model.defer="category_id">
                                                    <option selected>Select</option>
                                                    @foreach($data['categories']  as $category)
                                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                                    @endforeach

                                                </select>

                                                <span class="text-danger">

                                                       @error('category_id') {{$message}} @enderror
                                                   </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="form-group bmd-form-group">

                                        <label for="Name"
                                               class="bmd-label-floating">@lang('lang.perfume')</label>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <select class="form-control date date1" id="product_id" name="product_id"
                                                        wire:model.defer="product_id">
                                                    <option selected>Select</option>
                                                    @foreach($data['perfumes']  as $perfume)
                                                        <option value="{{$perfume->id}}">{{$perfume->perfume_name}}</option>
                                                    @endforeach

                                                </select>

                                                <span class="text-danger">
                                                       @error('product_id') {{$message}} @enderror
                                                   </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>


                            <div class="row">
                                <div class="col-md-12">
                                    <label class="container">@lang('lang.status')
                                        <input type="checkbox" name="status" value="1"
                                               wire:model.defer="status">
                                        <span class="checkmark"></span>
                                    </label>

                                </div>
                            </div>


                        </div>
                        <div class="card-footer ">
                            <button class="btn btn-fill btn-rose pull-right" wire:click="save"
                            >@lang('lang.add')
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            {{--                    </form>--}}
        </div>
    </div>


</div>
