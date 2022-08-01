 <div class="col-xl-2 pt-2 side" style="background-color: #161C26;">

                <h2 class="mb-0 text-sm"><span><img src="{{ asset('assets/front/images/icons/Group 200.png') }}" class="img-fluid" width="35px"></span> @lang('lang.perfume')</h2>
                <div class="card mt-4">
                                    <div class="card card-stats mb-4 mb-xl-0" style="padding: 2px;background-color: #262C39;box-shadow: none;">
                                        <div class="card-body" style="padding: 10px 5px;">

                                                <p class="mt--2 mb-0 text-sm">
                                                    <span class="mr-5 card-title text-uppercase mb-0">@lang('lang.roles')</span>
                                                    <span class="h4 font-weight-bold ft mb-0">{{\App\Models\role::count()}}</span>
                                                </p>
                                    </div>

                            </div>

              </div>
            <h2 class="mb-0 text-sm"><span><img src="{{ asset('assets/front/images/icons/Group 199.png') }}" class="img-fluid" width="35px"></span> stock</h2>

            <div class="card mt-4">
                                    <div class="card card-stats mb-4 mb-xl-0" style="padding: 2px 0;background-color: #262C39;box-shadow: none;">
                                        <div class="card-body" style="padding: 10px 3px;">

                                                <p class="mt--2 mb-0 text-sm">
                                                    <span class="mr-2 card-title text-lowercase mb-0">@lang('lang.services')</span>
                                                    <span class="h4 font-weight-bold ft mb-0">{{\App\Models\Service::count()}}</span>
                                                </p>
                                    </div>

                            </div>

              </div>
              <div class="card mt-4">
                                    <div class="card card-stats mb-4 mb-xl-0" style="padding: 2px 0;background-color: #262C39;box-shadow: none;">
                                        <div class="card-body" style="padding: 10px 3px;">

                                                <p class="mt--2 mb-0 text-sm">
                                                    <span class="mr-4 card-title text-lowercase mb-0">@lang('lang.articles')</span>
                                                    <span class="h4 font-weight-bold ft mb-0">{{\App\Models\Article::count()}}</span>
                                                </p>
                                    </div>

                            </div>

              </div>
              <div class="card mt-4">
                                    <div class="card card-stats mb-4 mb-xl-0" style="padding: 2px 0;background-color: #262C39;box-shadow: none;">
                                        <div class="card-body" style="padding: 10px 3px;">

                                                <p class="mt--2 mb-0 text-sm">
                                                    <span class="mr-4 card-title text-lowercase mb-0">@lang('lang.orderdetail')</span>
                                                    <span class="h4 font-weight-bold ft mb-0">{{\App\Models\order_detail::count()}}</span>
                                                </p>
                                    </div>

                            </div>

              </div>
              <div class="card mt-4">
                                    <div class="card card-stats mb-4 mb-xl-0" style="padding: 2px 0;background-color: #262C39;box-shadow: none;box-shadow: none;">
                                        <div class="card-body" style="padding: 10px 3px;">

                                                <p class="mt--2 mb-0 text-sm">
                                                    <span class="mr-4 card-title text-lowercase mb-0">@lang('lang.Downloads')</span>
                                                    <span class="h4 font-weight-bold ft mb-0">{{\App\Models\Download::count()}}</span>
                                                </p>
                                    </div>

                            </div>

              </div>
        </div>
