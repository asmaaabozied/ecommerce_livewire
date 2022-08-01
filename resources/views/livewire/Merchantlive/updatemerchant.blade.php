<a data-toggle="modal" data-target="#updateModal" wire:click="edit({{$row->id}})" title="Click to edit" class="btn" style="padding:0;"> <i
                                                        class="material-icons"><img
                                                            src="{{ asset('assets/front/images/icons/edit1.png') }}"
                                                            class="img-fluid" width="25px"></i></a>
<!-- Modal -->
<div wire:ignore.self class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                    <h4 class="card-title">@lang('lang.edit')</h4>


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

                                   <label for="exampleInputPassword1">@lang('lang.Enter Name')</label>
       <input type="text" wire:model="merchant_name" class="form-control input-sm"  placeholder="Name">
       <span class="text-danger"> @error('merchant_name') {{$message}} @enderror </span>

                                   </div>
                               </div>
                               <div class="col-xl-6">
                                   <div class="form-group bmd-form-group">

                                   <label>@lang('lang.Enter email')</label>
       <input type="email" class="form-control input-sm" placeholder="email" wire:model="merchant_email">
       <span class="text-danger"> @error('merchant_email') {{$message}} @enderror </span>

                                   </div>
                               </div>

                           </div>

                           <div class="row">
                           <div class="col-xl-6">
                                    <div class="form-group bmd-form-group">
                                    <label for="exampleInputPassword1">@lang('lang.Enter password')</label>
                                    <div class="input-group" id="show_hide_password" style="box-shadow: none;">
                                            <input wire:model.defer="m_password" class="form-control input-sm" type="password" placeholder="password">
                                            <div class="input-group-addon" style="position: relative;right: 40px;">
                                                <a href=""><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
                                            </div>
                                            <span class="text-danger"> @error('m_password') {{$message}} @enderror </span>
                                            </div>

                                    </div>
                                </div>
                           
                               <div class="col-xl-6">
                                   <div class="form-group bmd-form-group">

                                   <label for="exampleInputPassword1">@lang('lang.Enter package')</label>
                                   <select

                                        class="form-control date date1" id="GenderId"
                                        name="GenderId" placeholder="All" wire:model="package">
                                        <option selected disabled> Select</option>
                                        <option value="1">niche</option>
                                        <option value="0">french</option>
                                    </select>
       <span class="text-danger"> @error('package') {{$message}} @enderror </span>

                                   </div>
                               </div>

                            
                               <div class="col-xl-6">
                                   <div class="form-group bmd-form-group">

                                   <label>@lang('lang.Enter image')</label>
       <input type="file" class="form-control input-sm" placeholder="image" wire:model="image">
       <span class="text-danger"> @error('image') {{$message}} @enderror </span>

                                   </div>
                               </div>

                           </div>
                               </div>

                        <div class="card-footer ">
                            <button class="btn btn-fill btn-rose pull-right" wire:click="update()">@lang('lang.submit') </button>
                        </div>
                    </div>
                </div>
         </div>
    </div>
</div>






<!--
<div>
    <input type="hidden" wire:model="selected_id">
    <div class="form-group">
        <label for="exampleInputPassword1">Enter Name</label>
        <input type="text" wire:model="merchant_name" class="form-control input-sm"  placeholder="Name">
    </div>
    <div class="form-group">
        <label>Enter quantity</label>
        <input type="number" class="form-control input-sm" placeholder="quantity" wire:model="quantity">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Enter discount</label>
        <input type="text" wire:model="discount" class="form-control input-sm"  placeholder="discount">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Enter price</label>
        <input type="text" wire:model="price" class="form-control input-sm"  placeholder="price">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Enter pay</label>
        <input type="text" wire:model="pay" class="form-control input-sm"  placeholder="pay">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Enter date</label>
        <input type="date" wire:model="date" class="form-control input-sm"  placeholder="date">
    </div>
    <button wire:click="update()" class="btn btn-primary">Update</button>
</div>  -->
