
{{--@can('create-roles')--}}

<a data-toggle="modal" data-target="#exampleModal" class="pull-right btn">@lang('lang.create new')<i
                                                    class="fa fa-arrow-circle-right"></i></a>
{{--@endcan--}}
 <div wire:ignore.self class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                    <h4 class="card-title">@lang('lang.add')</h4>


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

                                        <label for="exampleInputPassword1">@lang('lang.name')</label>
                                        <input type="text" wire:model.defer="name" class="form-control input-sm"  placeholder="name">
                                        <span class="text-danger">

                                                       @error('name') {{$message}} @enderror
                                                   </span>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="form-group bmd-form-group">

                                        <label for="exampleInputPassword1">@lang('lang.guard_name')</label>
                                        <input type="text" wire:model.defer="guard_name" class="form-control input-sm"  placeholder="guard_name">
                                        <span class="text-danger">

                                                       @error('guard_name') {{$message}} @enderror
                                                   </span>
                                    </div>
                                </div>

                            </div>


                            <div wire:ignore class="form-group bmd-form-group">
                                <label for="exampleInputPassword1">@lang('lang.permissions')</label>

                                <select class="select2" id="" multiple="multiple" wire:model.defer="permissions" placeholder="Select Option" name="permissions[]">
                                                    <option value="">Select Option</option>
                                    @foreach ($data['models'] as $index=>$model)
                                        @foreach ($data['maps'] as $map)
                                            <option value="{{ $map . '_' . $model }}"> @lang('lang.' . $map)_ @lang('lang.' . $model) </option>

                                        @endforeach
                                    @endforeach

                                    </select>
                                </div>

                                <!-- <select class="select2" id="" multiple="multiple" wire:model.defer="permissions">
>>>>>>> 18c5c583fbe30503a9ac1e8f0fde280093c2a2c9
                                    <option value="">Select Option</option>
{{--                                    @foreach($data['models'] as $item)--}}
{{--                                        <option value="{{ $item }}">{{ $item }}</option>--}}
{{--                                    @endforeach--}}

{{--                                    @foreach ($data['models'] as $index=>$model)--}}
{{--                                        @foreach ($data['maps'] as $map)--}}
{{--                                            <option value="{{ $map . '_' . $model }}"> @lang('lang.' . $map)_ @lang('lang.' . $model) </option>--}}

{{--                                        @endforeach--}}
{{--                                    @endforeach--}}

                                </select> -->
                            </div>


                            <div wire:ignore class="form-group bmd-form-group">
                                    <label for="exampleInputPassword1">@lang('lang.DESC')</label>
                                    <textarea class="form-control" id="summary-ckeditor" name="summary-ckeditor"></textarea>

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


@push('js')
<script src="{{asset('assets/front/select2/js/select2.full.min.js')}}"></script>
<script>
     $(function(){
        $('.select2').select2({
            theme: 'bootstrap4',
        });
    })

</script>

@endpush
