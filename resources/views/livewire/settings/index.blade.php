<div>
    <style>
        .card.card-large-icons .card-icon{     display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            width: 150px;
            border-radius: 3px 0 0 3px;
        }


        .setting_card {
            padding-bottom: 20px;
        }
    </style>
    <section class="settings">

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">

                    <div class="card">
                        <div class="card-header card-header-primary card-header-icon">
                            <div class="row">
                                <div class="col-xl-4 col-md-12 col-12">

                                    <div class="row">
                                        <div class="col-xl-6 col-md-6 col-6">
                                            <div class="card-icon">
                                                <img src="{{ asset('assets/front/images/icons/Group 201.png') }}"
                                                     class="img-fluid" width="35px">
                                            </div>
                                            <h4 class="card-title">@lang('lang.settings')
                                            </h4>
                                        </div>
                                        <div class="col-xl-6 col-md-6 col-6">

                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-12"></div>
                                <div class="col-xl-6 col-md-12 col-12">
                                    <div class="row">
                                        <div class="col-xl-4 offset-xl-3 col-12">

                                            <h4 class="card-title date"></h4>
                                        </div>
                                        <div class="col-xl-5 col-12">
                                            <div class="row">
                                                <div class="col-xl-12 col-12">


                                                    </h4>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="toolbar">
                                @if (flash()->message)
                                    <div class=" btn btn-success form-control  alert alert-box">
                                        {{ flash()->message }}
                                    </div>
                            @endif
                            <!--        Here you can write extra buttons/actions for the toolbar              -->
                            </div>

                            <div class="col-lg-12">
                                <div class="card card-large-icons col-12">
                                    <
                                    <div class=" setting_card ">
                                        <h4> <i class="fas fa-cog"></i> General Setting</h4>
                                        <p class="text-white">General settings such as, site title, site description, logo and so on.</p>
                                        <a href="#general-setting"  wire:click="generalSetting" aria-controls="general-setting" role="button" data-toggle="collapse" class="card-cta" aria-expanded="false">Change Setting <i class="fas fa-chevron-right"></i>
                                        </a>
                                        @if($GeneralSetting==true)
                                        <div class="collapse mt-3 show" >

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
                                                <div class="col-xl-6">
                                                    <div class="form-group bmd-form-group">

                                                        <label for="Name"
                                                               class="bmd-label-floating">@lang('lang.phone')</label>

                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <input class="form-control" maxlength="25"
                                                                       type="text" data-val="true"
                                                                       :errors="$error"
                                                                       placeholder="@lang('lang.phone')" id="Name"
                                                                       name="name_ar"
                                                                       spellcheck="false" data-ms-editor="true"
                                                                       wire:model.defer="phone">

                                                                <span class="text-danger">

                                                       @error('phone') {{$message}} @enderror
                                                   </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6">
                                                    <div class="form-group bmd-form-group">

                                                        <label for="Name"
                                                               class="bmd-label-floating">@lang('lang.address')</label>

                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <input class="form-control" maxlength="25"
                                                                       type="text" data-val="true"
                                                                       wire:errors="$errors"
                                                                       placeholder="@lang('lang.address')" id="Name"
                                                                       name="name_en"
                                                                       spellcheck="false" data-ms-editor="true"
                                                                       wire:model.defer="address">

                                                                <span class="text-danger">
                                                       @error('address') {{$message}} @enderror
                                                   </span>
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
                                                                <input class="form-control" maxlength="25"
                                                                       type="text" data-val="true"
                                                                       wire:errors="$errors"
                                                                       placeholder="@lang('lang.email')" id="Name"
                                                                       name="name_en"
                                                                       spellcheck="false" data-ms-editor="true"
                                                                       wire:model.defer="email">

                                                                <span class="text-danger">
                                                       @error('email') {{$message}} @enderror
                                                   </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6">
                                                    <div class="form-group bmd-form-group">

                                                        <label for="Name"
                                                               class="bmd-label-floating">@lang('lang.facebook')</label>

                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <input class="form-control" maxlength="25"
                                                                       type="text" data-val="true"
                                                                       wire:errors="$errors"
                                                                       placeholder="@lang('lang.facebook')" id="Name"
                                                                       name="name_en"
                                                                       spellcheck="false" data-ms-editor="true"
                                                                       wire:model.defer="facebook">

                                                                <span class="text-danger">
                                                       @error('facebook') {{$message}} @enderror
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
                                                               class="bmd-label-floating">@lang('lang.ar.description')</label>

                                                        <div class="row">
                                                            <div class="col-md-12">
                                                            <textarea wire:model.defer="description_ar" class="form-control" id="summary-ckeditor1" name="summary-ckeditor1"></textarea>

                                                                <span class="text-danger">
                                                       @error('description_ar') {{$message}} @enderror
                                                   </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-12">
                                                    <div wire:ignore class="form-group bmd-form-group">

                                                        <label for="Name"
                                                               class="bmd-label-floating">@lang('lang.en.description')</label>

                                                        <div class="row">
                                                            <div class="col-md-12">
                                                            <textarea wire:model.defer="description_en" class="form-control" id="summary-ckeditor" name="summary-ckeditor"></textarea>

                                                                <span class="text-danger">
                                                       @error('description_en') {{$message}} @enderror
                                                   </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>

                                            <div class="row">

                                                <div class="col-xl-5">
                                                    <label for="photo-upload" class="custom-file-upload fas">
                                                        <div class="img-wrap img-upload">
                                                            <i class="fa-solid fa-camera"></i>
                                                        </div>
                                                        <input id="photo-upload" type="file" wire:model.defer="logo">
                                                    </label>

                                                    <span class="text-danger">
                                                       @error('logo') {{$message}} @enderror
                                                   </span>

                                                </div>

                                                <div class="col-xl-5">
                                                    <label for="photo-upload" class="custom-file-upload fas">
                                                        <div class="img-wrap img-upload">
                                                            <i class="fa-solid fa-camera"></i>
                                                        </div>
                                                        <input id="photo-upload" type="file" wire:model.defer="favicon">
                                                    </label>

                                                    <span class="text-danger">
                                                       @error('favicon') {{$message}} @enderror
                                                   </span>

                                                </div>
                                            </div>

                                            <button class="btn btn-fill btn-rose pull-right" wire:click="update"
                                            >@lang('lang.edit')
                                            </button>
                                        </div>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="card card-large-icons col-12">
                                    <
                                    <div class=" setting_card ">
                                        <h4> <i class="fas fa-cog"></i> Payment Setting</h4>
                                        <p class="text-white">Payment settings such as , tap , paypal,</p>
                                        <a href="#payment-setting" wire:click="paymentSetting" aria-controls="payment-setting" role="button" data-toggle="collapse" class="card-cta" aria-expanded="false">Change Setting <i class="fas fa-chevron-right"></i>
                                        </a>
                                        @if($PaymentSetting==true)
                                        <div class="collapse show mt-3" >

                                            <div class="row">
                                                <div class="col-xl-6">
                                                    <div class="form-group bmd-form-group">

                                                        <label for="Name"
                                                               class="bmd-label-floating">@lang('lang.tab_secret_key')</label>

                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <input class="form-control" maxlength="25"
                                                                       type="text" data-val="true"
                                                                       :errors="$error"
                                                                       placeholder="@lang('lang.tab_secret_key')" id="tab_secret_key"
                                                                       name="name_ar"
                                                                       spellcheck="false" data-ms-editor="true"
                                                                       wire:model.defer="tab_secret_key">

                                                                <span class="text-danger">

                                                       @error('tab_secret_key') {{$message}} @enderror
                                                   </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6">
                                                    <div class="form-group bmd-form-group">

                                                        <label for="Name"
                                                               class="bmd-label-floating">@lang('lang.tab_public_key')</label>

                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <input class="form-control"
                                                                       type="text" data-val="true"
                                                                       wire:errors="$errors"
                                                                       placeholder="@lang('lang.tab_public_key')" id="tab_public_key"
                                                                       name="name_en"
                                                                       spellcheck="false" data-ms-editor="true"
                                                                       wire:model.defer="tab_public_key">

                                                                <span class="text-danger">
                                                       @error('tab_public_key') {{$message}} @enderror
                                                   </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6">
                                                    <div class="form-group bmd-form-group">

                                                        <label for="Name"
                                                               class="bmd-label-floating">@lang('lang.paypal_client_id')</label>

                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <input class="form-control"
                                                                       type="text" data-val="true"
                                                                       wire:errors="$errors"
                                                                       placeholder="@lang('lang.paypal_client_id')" id="paypal_client_id"
                                                                       name="name_en"
                                                                       spellcheck="false" data-ms-editor="true"
                                                                       wire:model.defer="paypal_client_id">

                                                                <span class="text-danger">
                                                       @error('paypal_client_id') {{$message}} @enderror
                                                   </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6">
                                                    <div class="form-group bmd-form-group">

                                                        <label for="Name"
                                                               class="bmd-label-floating">@lang('lang.paypal_secret_key')</label>

                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <input class="form-control"
                                                                       type="text" data-val="true"
                                                                       wire:errors="$errors"
                                                                       placeholder="@lang('lang.paypal_secret_key')" id="Name"
                                                                       name="paypal_secret_key"
                                                                       spellcheck="false" data-ms-editor="true"
                                                                       wire:model.defer="paypal_secret_key">

                                                                <span class="text-danger">
                                                       @error('paypal_secret_key') {{$message}} @enderror
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
                                                               class="bmd-label-floating">@lang('lang.tab')</label>

                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <label class="switch">
                                                                    <input type="checkbox"    wire:model.defer="tab" checked>
                                                                    <span class="slider round"></span>
                                                                </label>


                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6">
                                                    <div class="form-group bmd-form-group">

                                                        <label for="Name"
                                                               class="bmd-label-floating">@lang('lang.paypal')</label>

                                                        <div class="row">
                                                            <div class="col-md-12">

                                                                <label class="switch">
                                                                    <input type="checkbox"   style="background-color: #2196F3" wire:model.defer="paypal" checked>
                                                                    <span class="slider round" style="border-radius: 34px;"></span>
                                                                </label>


                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                            <button class="btn btn-fill btn-rose pull-right" wire:click="updatePayment"
                                            >@lang('lang.edit')
                                            </button>


                                        </div>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="card card-large-icons col-12">
                                    <
                                    <div class=" setting_card ">
                                        <h4> <i class="fas fa-cog"></i> Theme Setting</h4>
                                        <p class="text-white">Theme settings such as , footercolor , headercolor,hover</p>
                                        <a href="#theme-setting"    wire:click="themeSetting"  aria-controls="theme-setting" role="button" data-toggle="collapse" class="card-cta" aria-expanded="false">Change Setting <i class="fas fa-chevron-right"></i>
                                        </a>
                                        @if($ThemeSetting==true)
                                        <div class="collapse show mt-3" >


                                            <div class="row">
                                                <div class="col-xl-6">
                                                    <div class="form-group bmd-form-group">

                                                        <label for="Name"
                                                               class="bmd-label-floating">@lang('lang.hover')</label>

                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <input class="form-control"
                                                                       type="text" data-val="true"
                                                                       :errors="$error"
                                                                       placeholder="@lang('lang.hover')" id="Name"
                                                                       name="name_ar"
                                                                       spellcheck="false" data-ms-editor="true"
                                                                       wire:model.defer="hover">

                                                                <span class="text-danger">

                                                       @error('hover') {{$message}} @enderror
                                                   </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6">
                                                    <div class="form-group bmd-form-group">

                                                        <label for="Name"
                                                               class="bmd-label-floating">@lang('lang.header_color')</label>

                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <input class="form-control"
                                                                       type="color" data-val="true"
                                                                       wire:errors="$errors"
                                                                       placeholder="@lang('lang.header_color')" id="Name"
                                                                       name="name_en"

                                                                       spellcheck="false" data-ms-editor="true"
                                                                       wire:model.defer="header_color">

                                                                <span class="text-danger">
                                                       @error('header_color') {{$message}} @enderror
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
                                                               class="bmd-label-floating">@lang('lang.footer_color')</label>

                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <input class="form-control colorpicker" id="colorpicker"
                                                                       type="color" data-val="true"
                                                                       :errors="$error"
                                                                       placeholder="@lang('lang.footer_color')" id="Name"
                                                                       name="footer_color"
                                                                       spellcheck="false" data-ms-editor="true"
                                                                       wire:model.defer="footer_color">

                                                                <span class="text-danger">

                                                       @error('footer_color') {{$message}} @enderror
                                                   </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6">
                                                    <div class="form-group bmd-form-group">

                                                        <label for="Name"
                                                               class="bmd-label-floating">@lang('lang.color')</label>

                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <input class="form-control colorpicker" id="colorpicker"
                                                                       type="color" data-val="true"
                                                                       :errors="$error"
                                                                       placeholder="@lang('lang.color')" id="Name"
                                                                       name="color"
                                                                       spellcheck="false" data-ms-editor="true"
                                                                       wire:model.defer="color">

                                                                <span class="text-danger">

                                                       @error('color') {{$message}} @enderror
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
                                                               class="bmd-label-floating">@lang('lang.color-button')</label>

                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <input class="form-control colorpicker" id="colorpicker"
                                                                       type="color" data-val="true"
                                                                       :errors="$error"
                                                                       placeholder="@lang('lang.color-button')" id="Name"
                                                                       name="color-button"
                                                                       spellcheck="false" data-ms-editor="true"
                                                                       wire:model.defer="color_button">

                                                                <span class="text-danger">

                                                       @error('color_button') {{$message}} @enderror
                                                   </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6">
                                                    <div class="form-group bmd-form-group">

                                                        <label for="Name"
                                                               class="bmd-label-floating">@lang('lang.color-line')</label>

                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <input class="form-control colorpicker" id="colorpicker"
                                                                       type="color" data-val="true"
                                                                       :errors="$error"
                                                                       placeholder="@lang('lang.color-line')" id="Name"
                                                                       name="color_line"
                                                                       spellcheck="false" data-ms-editor="true"
                                                                       wire:model.defer="color_line">

                                                                <span class="text-danger">

                                                       @error('color_line') {{$message}} @enderror
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
                                                               class="bmd-label-floating">@lang('lang.size-header')</label>

                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <input class="form-control"
                                                                       type="text" data-val="true"
                                                                       :errors="$error"
                                                                       placeholder="@lang('lang.size-header')" id="Name"
                                                                       name="size-header"
                                                                       spellcheck="false" data-ms-editor="true"
                                                                       wire:model.defer="size_header">

                                                                <span class="text-danger">

                                                       @error('size_header') {{$message}} @enderror
                                                   </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-xl-6">
                                                    <div class="form-group bmd-form-group">

                                                        <label for="Name"
                                                               class="bmd-label-floating">@lang('lang.size-footer')</label>

                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <input class="form-control"
                                                                       type="text" data-val="true"
                                                                       :errors="$error"
                                                                       placeholder="@lang('lang.size-footer')" id="Name"
                                                                       name="size-footer"
                                                                       spellcheck="false" data-ms-editor="true"
                                                                       wire:model.defer="size_footer">

                                                                <span class="text-danger">

                                                       @error('size_footer') {{$message}} @enderror
                                                   </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>



                                            <button class="btn btn-fill btn-rose pull-right" wire:click="updateTheme"
                                            >@lang('lang.edit')
                                            </button>


                                        </div>

                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div>


                            </div>
                        </div>
                        <!-- end content-->
                    </div>
                    <!--  end card  -->
                </div>
                <!-- end col-md-12 -->
            </div>
            <!-- end row -->
        </div>
        <!-- /.box -->


    </section>

</div>










