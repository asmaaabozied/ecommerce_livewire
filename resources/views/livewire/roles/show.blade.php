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
                                    <h4 class="card-title"> {{$this->name}}</h4>
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
                                           class="bmd-label-floating">@lang('lang.name')</label>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <input class="form-control" maxlength="25"
                                                   type="text" data-val="true"
                                                   :errors="$error" readonly
                                                   placeholder="@lang('lang.name')" id="Name"
                                                   name="name_ar"
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
                                           class="bmd-label-floating">@lang('lang.guard_name')</label>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <input class="form-control" maxlength="25"
                                                   type="text" data-val="true" readonly
                                                   wire:errors="$errors"
                                                   placeholder="@lang('lang.guard_name')" id="guard_name"
                                                   name="guard_name"
                                                   spellcheck="false" data-ms-editor="true"
                                                   wire:model.defer="guard_name">

                                            <span class="text-danger">
                                                       @error('guard_name') {{$message}} @enderror
                                                   </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="form-group bmd-form-group">
                                    <select class="form-control select2 select2-hidden-accessible"    readonly="" multiple="" wire:model.defer="permissions"  name="permissions[]" data-placeholder="{{trans('site.select')}}" style="width: 100%;" tabindex="-1" aria-hidden="true">

                                        @foreach ($data['models'] as $index=>$model)
                                            @foreach ($data['maps'] as $map)
                                                <option value="{{ $map . '_' . $model }}"> @lang('lang.' . $map)_ @lang('lang.' . $model) </option>

                                            @endforeach
                                        @endforeach


                                    </select>

{{--                                    @foreach ($data['models'] as $index=>$model)--}}
{{--                                        <span>--}}
{{--                                                <li class="form-group {{ $index == 0 ? 'active' : '' }}">@lang('lang.' . $model)</li>--}}
{{--                                       </span>--}}

{{--                                        <div--}}
{{--                                            class="form-group {{ $index == 0 ? 'active' : '' }}"--}}
{{--                                            id="{{ $model }}">--}}
{{--                                            <div class="row">--}}
{{--                                                <div class="col-md-12">--}}
{{--                                                    @foreach ($data['maps'] as $map)--}}
{{--                                                        --}}{{--                                                                {{ $this->role ->hasPermission($map . '_' . $model) ? 'checked' : '' }}--}}
{{--                                                        <input type="checkbox"  value="{{ $map . '_' . $model }}"    wire:model.lazy="permissions"  name="permissions[]" readonly>--}}

{{--                                                        @lang('lang.' . $map)--}}



{{--                                                    @endforeach--}}
{{--                                                </div>--}}
{{--                                            </div>--}}

{{--                                        </div>--}}
{{--                                        </td>--}}

{{--                                        </tr>--}}
{{--                                    @endforeach--}}


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
