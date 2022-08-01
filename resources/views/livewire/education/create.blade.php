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

                                    <label for="Name"
                                           class="bmd-label-floating">@lang('lang.ar.name')</label>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <input class="form-control" maxlength="25"
                                                   type="text" data-val="true"
                                                   :errors="$error"
                                                   placeholder="@lang('lang.ar.name')" id="Name"
                                                   name="name_ar"
                                                   spellcheck="false" data-ms-editor="true"
                                                   wire:model.defer="name_ar">

                                            <span class="text-danger">

                                                       @error('name_ar') {{$message}} @enderror
                                                   </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="form-group bmd-form-group">

                                    <label for="Name"
                                           class="bmd-label-floating">@lang('lang.en.name')</label>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <input class="form-control" maxlength="25"
                                                   type="text" data-val="true"
                                                   wire:errors="$errors"
                                                   placeholder="@lang('lang.en.name')" id="Name"
                                                   name="name_en"
                                                   spellcheck="false" data-ms-editor="true"
                                                   wire:model.defer="name_en">

                                            <span class="text-danger">
                                                       @error('name_en') {{$message}} @enderror
                                                   </span>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>


                        <div class="row">


                            <div class="col-xl-12">
                                <div wire:ignore class="form-group bmd-form-group">

                                    <label for="Name"
                                           class="bmd-label-floating">@lang('lang.en.description')</label>

                                    <textarea wire:model.defer="description_en" class="form-control"
                                               name=description_en"></textarea>

                                    <span class="text-danger"> @error('description_en') {{$message}} @enderror </span>

                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div wire:ignore class="form-group bmd-form-group">

                                    <label for="Name"
                                           class="bmd-label-floating">@lang('lang.ar.description')</label>
                                    <textarea wire:model.defer="description_ar" class="form-control"
                                               name="description_ar"></textarea>

                                    <span class="text-danger"> @error('description_ar') {{$message}} @enderror </span>

                                </div>
                            </div>

                        </div>

                        <div class="row">

                            <div class="col-xl-5">
                                <label for="photo-upload" class="custom-file-upload fas">
                                    <div class="img-wrap img-upload">
                                        <i class="fa-solid fa-camera"></i>
                                    </div>
                                    <input id="photo-upload" type="file" wire:model.defer="image">
                                </label>

                                <span class="text-danger">
                       @error('image') {{$message}} @enderror
                   </span>

                            </div>
                            <div class="col-xl-6">
                                <div class="form-group bmd-form-group">

                                    <label for="Name"
                                           class="bmd-label-floating">@lang('lang.type')</label>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <input class="form-control" maxlength="25"
                                                   type="text" data-val="true"
                                                   wire:errors="$errors"
                                                   placeholder="@lang('lang.type')" id="type"
                                                   name="type"
                                                   spellcheck="false" data-ms-editor="true"
                                                   wire:model.defer="type">

                                            <span class="text-danger">
                                                       @error('type') {{$message}} @enderror
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
                        <button class="btn btn-fill btn-rose pull-right" wire:click="save()"
                        >@lang('lang.submit')
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


