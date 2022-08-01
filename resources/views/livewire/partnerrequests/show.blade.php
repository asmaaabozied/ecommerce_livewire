<div>
    {{--    showPopModal--}}

    <div  class="modal" role="dialog" data-backdrop="true"
         style="display: block">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div id="OpenDialog1" class="modal-body"
                     style="background-color: #1B222C;">
                    <div class="card ">
                        <div class="card-header card-header-rose card-header-icon">
                            <div class="card-icon">

                                <img
                                    src="{{ asset('assets/front/images/icons/Group 119.png') }}"
                                    class="img-fluid" width="35px">
                            </div>
                            <div class="row">
                                <div class="col-md-10 col-9">
                                    <h4 class="card-title"> {{$this->full_name}}</h4>
                                    <h5>@lang('lang.created_at')
                                        <span>{{$this->created_at}}</span></h5>
                                </div>
                                <div class="col-md-2 col-3">
                                    <button type="button" class="btn btn-fill"
                                            wire:click="ShowModalClose()"
                                            data-dismiss="modal"
                                            style="font-size: 25px;"><i
                                            class="fa fa-times-circle"></i></button>
                                </div>
                            </div>

                        </div>
                        <div class="card-body">

                        <div class="row">
                            <div class="col-xl-6">
                                <div class="form-group bmd-form-group">

                                    <label for="Name"
                                           class="bmd-label-floating">@lang('lang.ar.name')</label>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <input class="form-control"
                                                   maxlength="25"
                                                   type="text"
                                                   data-val="true"

                                                   placeholder="@lang('lang.ar.name')"
                                                   id="Name" name="name_ar"
                                                   spellcheck="false"
                                                   data-ms-editor="true"
                                                   wire:model.defer="full_name"
                                                   readonly>


                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="form-group bmd-form-group">

                                    <label for="Name"
                                           class="bmd-label-floating">@lang('lang.email')</label>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <input class="form-control"
                                                   maxlength="25"
                                                   type="text"
                                                   data-val="true"

                                                   placeholder="@lang('lang.email')"
                                                   id="email" name="email"
                                                   spellcheck="false"
                                                   data-ms-editor="true"
                                                   wire:model.defer="email"
                                                   readonly>


                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-xl-6">
                                <div class="form-group bmd-form-group">

                                    <label for="Name"
                                           class="bmd-label-floating">@lang('lang.phone')</label>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <input class="form-control"
                                                   maxlength="25"
                                                   type="text"
                                                   data-val="true"

                                                   placeholder="@lang('lang.phone')"
                                                   id="phone" name="phone"
                                                   spellcheck="false"
                                                   data-ms-editor="true"
                                                   wire:model.defer="phone"
                                                   readonly>


                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="form-group bmd-form-group">

                                    <label for="Name"
                                           class="bmd-label-floating">@lang('lang.age')</label>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <input class="form-control"
                                                   maxlength="25"
                                                   type="text"
                                                   data-val="true"

                                                   placeholder="@lang('lang.age')"
                                                   id="age" name="age"
                                                   spellcheck="false"
                                                   data-ms-editor="true"
                                                   wire:model.defer="age"
                                                   readonly>


                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="form-group bmd-form-group">

                                    <label for="Name"
                                           class="bmd-label-floating">@lang('lang.money')</label>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <input class="form-control"
                                                   maxlength="25"
                                                   type="text"
                                                   data-val="true"

                                                   placeholder="@lang('lang.money')"
                                                   id="money" name="money"
                                                   spellcheck="false"
                                                   data-ms-editor="true"
                                                   wire:model.defer="money"
                                                   readonly>


                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="form-group bmd-form-group">

                                    <label for="Name"
                                           class="bmd-label-floating">@lang('lang.experience')</label>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <input class="form-control"
                                                   maxlength="25"
                                                   type="text"
                                                   data-val="true"

                                                   placeholder="@lang('lang.experience')"
                                                   id="age" name="experience"
                                                   spellcheck="false"
                                                   data-ms-editor="true"
                                                   wire:model.defer="experience"
                                                   readonly>


                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        </div>





                    </div>


                </div>
            </div>
        </div>
    </div>


</div>
