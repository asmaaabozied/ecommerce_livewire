
{{--    editPopModal--}}

    <div id="modalCityEdit" class="modal" role="dialog" data-backdrop="true"

         style="display: block">
        <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                    <input hidden name="id" wire:model.defer="u_id">

                    <div id="OpenDialog1" class="modal-body"
                         style="background-color: #1B222C;">

                        <div class="card ">
                            <div
                                class="card-header card-header-rose card-header-icon">
                                <div class="card-icon">

                                    <img
                                        src="{{ asset('assets/front/images/icons/Group 119.png') }}"
                                        class="img-fluid" width="35px">
                                </div>
                                <div class="row">
                                    <div class="col-md-10 col-9">
                                        <h4 class="card-title"> {{$this->name_en}}</h4>
                                        <h5>@lang('lang.created_at')
                                            <span>{{$this->created_at}}</span></h5>
                                    </div>
                                    <div class="col-md-2 col-3">
                                        <button type="button" class="btn btn-fill"
                                                wire:click="toggleEditCloseModal()"
                                                data-dismiss="modal"
                                                style="font-size: 25px;"><i
                                                class="fa fa-times-circle"></i>
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
                                                    <input class="form-control"
                                                           maxlength="25"
                                                           type="text"
                                                           data-val="true"

                                                           placeholder="@lang('lang.ar.name')"
                                                           id="Name" name="name_ar"
                                                           spellcheck="false"
                                                           data-ms-editor="true"
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
                                                    <input class="form-control"
                                                           maxlength="25"
                                                           type="text"
                                                           data-val="true"

                                                           placeholder="@lang('lang.en.name')"
                                                           id="Name" name="name_en"
                                                           spellcheck="false"
                                                           data-ms-editor="true"
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
                                    <div class="col-xl-6">
                                        <div class="form-group bmd-form-group">

                                            <label for="Name"
                                                   class="bmd-label-floating">@lang('lang.country')</label>

                                            <div class="row">
                                                <div class="col-md-12">

                                                    <select class="form-control date date1" id="GenderId" name="GenderId" wire:model.defer="country_id">
                                                        <option selected >Select</option>
                                                        @foreach($data['countries']  as $country)
                                                            <option value="{{$country->id}}"  @if($this->country_id==$country->id) selected @endif >{{$country->name}}</option>
                                                        @endforeach

                                                    </select>

                                                    <span class="text-danger">
                                                       @error('country_id') {{$message}} @enderror
                                                   </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <label
                                            class="container">@lang('lang.status')
                                            <input type="checkbox"
                                                   name="status" value="1"
                                                   wire:model.defer="status"
                                                   @if($this->status==1) checked="checked" @endif>
                                            <span class="checkmark"></span>
                                        </label>

                                    </div>
                                </div>


                            </div>
                            <div class="card-footer ">
                                <button class="btn btn-fill btn-rose pull-right"
                                        wire:click="update()"
                                >@lang('lang.edit')
                                </button>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>


