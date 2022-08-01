<div class="header bg-gradient-primary pb-8 pt-2">
    <div class="container-fluid">
        <div class="header-body">
            <!-- Card stats -->
            <div class="row">
                <div class="col-xl-4 col-lg-6">
                    <div class="card card-stats mb-4 mb-xl-0">
                        <div class="card-body">
                            <div class="row">
                            <div class="col-auto">
                                    <span><img src="{{ asset('assets/front/images/icons/Group 197.png') }}" class="img-fluid icon icon-shape shadow"></span>
                                </div>
                                <div class="col">
                                <span><img src="{{ asset('assets/front/images/icons/users.png') }}" class="img-fluid icon icon-shape" style="z-index: -1;width: 100px;height: 90px;margin-left: 40px;"></span>
                                </div>

                            </div>
                            <p class="mt--4 mb-0 text-sm">
                                <span class="mr-6 card-title text-uppercase mb-0">@lang('lang.users')<br></span>
                                <span class="h2 font-weight-bold ft mb-0">({{\App\Models\User::count()}})</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6">
                    <div class="card card-stats mb-4 mb-xl-0">
                        <div class="card-body">
                            <div class="row">
                            <div class="col-auto">
                                    <span><img src="{{ asset('assets/front/images/icons/Group 196.png') }}" class="img-fluid icon icon-shape shadow"></span>
                                </div>
                                <div class="col">
                                <span><img src="{{ asset('assets/front/images/icons/Mask Group 6.png') }}" class="img-fluid icon icon-shape" style="z-index: -1;width: 100px;height: 90px;margin-left: 40px;"></span>
                                </div>

                            </div>
                            <p class="mt--4 mb-0 text-sm">
                                <span class="mr-6 card-title text-uppercase mb-0">@lang('lang.merchant')<br></span>
                                <span class="h2 font-weight-bold ft mb-0">({{\App\Models\merchant::count()}})</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6">
                    <div class="card card-stats mb-4 mb-xl-0">
                        <div class="card-body">
                            <div class="row">
                            <div class="col-auto">
                                    <span><img src="{{ asset('assets/front/images/icons/Group 66.png') }}" class="img-fluid icon icon-shape shadow"></span>
                                </div>
                                <div class="col">
                                <span><img src="{{ asset('assets/front/images/icons/Mask Group 13.png') }}" class="img-fluid icon icon-shape" style="z-index: -1;width: 100px;height: 90px;margin-left: 40px;"></span>
                                </div>

                            </div>
                            <p class="mt--4 mb-0 text-sm">
                                <span class="mr-4 card-title text-uppercase mb-0">@lang('lang.perfume')<br></span>
                                <span class="h2 font-weight-bold ft mb-0">({{\App\Models\Perfume::count()}})</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-3">
                    <div class="card card-stats mb-4 mb-xl-0">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-xl-2">
                                        <div class="row">
                                            <div class="col-auto">
                                                    <span><img src="{{ asset('assets/front/images/icons/Group 198.png') }}" class="img-fluid icon icon-shape shadow"></span>
                                                </div>
                                                <div class="col">
                                                </div>

                                       </div>
                                        <p class="mt-1 mb-0 text-sm">
                                            <span class="mr-3 card-title text-uppercase mb-0">@lang('lang.merchant')</span>
                                            <span class="h2 font-weight-bold mb-0"></span>
                                        </p>
                                 </div>
                                 <div class="col-xl-3 col-lg-6 space_card">
                                    <div class="card card-stats mb-4 card-sm" style="background-color:#1B222C;">
                                        <div class="card-body body1">
                                            <div class="row">
                                                    <div class="col-auto">
                                                    <span class="mr-1 text-xs card-title text-uppercase mb-0">@lang('lang.brands')</span>
                                                        </div>

                                                    </div>
                                                    <div class="col-auto text-end mt-2">
                                                    <span class="mr--4 card-title text-uppercase mb-0">{{\App\Models\Brand::count()}}</span>
                                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-6 space_card">
                                    <div class="card card-stats mb-4 card-sm" style="background-color:#1B222C;">
                                        <div class="card-body body1">
                                            <div class="row">
                                                    <div class="col-auto">
                                                    <span class="mr-1 text-xs card-title text-uppercase mb-0">@lang('lang.packages')</span>
                                                        </div>

                                                    </div>
                                                    <div class="col-auto text-end mt-2">
                                                    <span class="mr--4 card-title text-uppercase mb-0">{{\App\Models\Package::count()}}</span>
                                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-6 space_card">
                                    <div class="card card-stats mb-4 card-sm" style="background-color:#1B222C;">
                                        <div class="card-body body1">
                                            <div class="row">
                                                    <div class="col-auto">
                                                    <span class="mr-1 text-xs card-title text-uppercase mb-0">@lang('lang.Tickets')</span>
                                                        </div>

                                                    </div>
                                                    <div class="col-auto text-end mt-2">
                                                    <span class="mr--4 card-title text-uppercase mb-0">{{\App\Models\Ticket::count()}}</span>
                                                        </div>
                                        </div>
                                    </div>
                                </div>
                          </div>
                          <div class="cube">
                               <img src="{{ asset('assets/front/images/icons/pngtree-2-5d-flat-house-png-image_905412-removebg-preview.png') }}" class="img-fluid">
                                </div>

                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>
