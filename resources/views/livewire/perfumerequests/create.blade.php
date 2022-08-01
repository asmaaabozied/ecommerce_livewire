<a data-toggle="modal" data-target="#exampleModal" class="pull-right btn">@lang('lang.create new')<i
                                                    class="fa fa-arrow-circle-right"></i></a>
<!-- Modal -->
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

                                        <label for="exampleInputPassword1">Enter Request Name</label>
                                        <input type="text" wire:model="req_name" class="form-control input-sm"  placeholder="req_name">
                                        <span class="text-danger"> @error('req_name') {{$message}} @enderror </span>

                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="form-group bmd-form-group">

                                        <label>Enter quantity</label>
                                        <input type="number" class="form-control input-sm" placeholder="quantity" wire:model="quantity">
                                        <span class="text-danger"> @error('quantity') {{$message}} @enderror </span>

                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="form-group bmd-form-group">

                                        <label for="exampleInputPassword1">Enter category</label>
                                        <input type="text" wire:model="category" class="form-control input-sm"  placeholder="category">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="form-group bmd-form-group">

                                        <label for="exampleInputPassword1">Enter cost</label>
                                        <input type="text" wire:model="cost" class="form-control input-sm"  placeholder="cost">
                                    </div>
                                </div>

                            </div>

                            <div class="row">

                                <div class="col-xl-6">
                                    <div class="form-group bmd-form-group">
                                        <label for="exampleInputPassword1">Enter stock</label>
                                        <input type="text" wire:model="stock" class="form-control input-sm"  placeholder="stock">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="form-group bmd-form-group">
                                        <label for="exampleInputPassword1">Enter date</label>
                                        <input type="date" wire:model="date" class="form-control input-sm"  placeholder="date">
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="card-footer ">
                            <button class="btn btn-fill btn-rose pull-right" wire:click="save"
                            >@lang('lang.submit')
                            </button>
                        </div>
                    </div>
                </div>
         </div>
    </div>
</div>




<!--
