
<!-- Modal -->
<div  class="modal" wire:ignore.self role="dialog" data-backdrop="true"
      style="display: block">
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
                                    <h4 class="card-title">@lang('lang.edit') </h4>


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
                                   <input type="text" wire:model="work_name" class="form-control input-sm"  placeholder="Name">
                                   <span class="text-danger"> @error('work_name') {{$message}} @enderror </span>

                                   </div>
                               </div>
                               <div class="col-xl-6">
                                   <div class="form-group bmd-form-group">

                                   <label for="exampleInputPassword1">@lang('lang.Enter price')</label>
                                   <input type="text" class="form-control input-sm" placeholder="price" wire:model="price">
                                   <span class="text-danger"> @error('price') {{$message}} @enderror </span>

                                   </div>
                               </div>

                           </div>

                           <div class="row">
                               <div class="col-xl-6">
                                   <div class="form-group bmd-form-group">

                                   <label for="exampleInputPassword1">@lang('lang.Enter category')</label>
                                   <input type="text" wire:model="category" class="form-control input-sm"  placeholder="category">
                                   <span class="text-danger"> @error('category') {{$message}} @enderror </span>

                                   </div>
                               </div>

                               <div class="col-xl-6">
                                   <div class="form-group bmd-form-group">
                                       <label for="exampleInputPassword1">@lang('lang.Enter stock')</label>
                                       <input type="text" wire:model="stock" class="form-control input-sm"  placeholder="stock">
                                       <span class="text-danger"> @error('stock') {{$message}} @enderror </span>

                                   </div>
                               </div>
                               <div class="col-xl-6">
                                   <div class="form-group bmd-form-group">
                                       <label for="exampleInputPassword1">@lang('lang.Enter quantity')</label>
                                       <input type="number" wire:model="quantity" class="form-control input-sm"  placeholder="quantity">
                                       <span class="text-danger"> @error('quantity') {{$message}} @enderror </span>

                                   </div>
                               </div>
                               <div class="col-xl-6">
                                   <div class="form-group bmd-form-group">
                                   <label for="exampleInputPassword1">@lang('lang.Enter date')</label>
                                   <input type="date" wire:model="date" class="form-control input-sm"  placeholder="date">
                                   <span class="text-danger"> @error('date') {{$message}} @enderror </span>

                                   </div>
                               </div>
                               <div class="col-xl-12">
                                   <div wire:ignore class="form-group bmd-form-group">

                                   <label for="exampleInputPassword1">@lang('lang.Enter desc')</label>
                                   <textarea wire:model="desc" class="form-control" id="summary-ckeditor" name="summary-ckeditor"></textarea>
                                   <span class="text-danger"> @error('desc') {{$message}} @enderror </span>

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
        <input type="text" wire:model="name" class="form-control input-sm"  placeholder="Name">
    </div>
    <div class="form-group">
        <label>Enter price</label>
        <input type="number" class="form-control input-sm" placeholder="price" wire:model="price">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Enter category</label>
        <input type="text" wire:model="category" class="form-control input-sm"  placeholder="category">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Enter desc</label>
        <input type="text" wire:model="desc" class="form-control input-sm"  placeholder="desc">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Enter stock</label>
        <input type="text" wire:model="stock" class="form-control input-sm"  placeholder="stock">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Enter image</label>
        <input type="file" wire:model="image" class="form-control input-sm"  placeholder="image">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Enter date</label>
        <input type="date" wire:model="date" class="form-control input-sm"  placeholder="date">
    </div>
    <button wire:click="update()" class="btn btn-primary">Update</button>
</div>  -->
