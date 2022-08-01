


<nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light" id="sidenav-main" style="
    overflow: visible !IMPORTANT;

">
    <div class="container-fluid"  >
{{--        style="height: 100vh;--}}
{{--        overflow: visible--}}
{{--        <a class="navbar-brand pt-0" href="{{ url('/') }}">--}}
{{--            <img src="{{ asset('assets/front/images/logo-4.png') }}" class="navbar-brand-img" alt="...">--}}
{{--        </a>--}}
        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main"
                aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Brand -->
        <a class="navbar-brand pt-0" href="{{ url('/dashboard') }}">
            <img src="{{ asset('assets/front/images/logo-4.png') }}" class="navbar-brand-img" alt="...">
        </a>
        <!-- User -->
        <ul class="nav align-items-center d-md-none" >

{{--            style="overflow: scroll;--}}
{{--            height: 100vh"--}}
            <li class="nav-item dropdown">
                <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                   aria-expanded="false">
                    <div class="media align-items-center">
                        <span class="avatar avatar-sm rounded-circle">
                        <img alt="" src="{{ asset('assets/front/images/icons/image.png') }}">
                        </span>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                    <div class=" dropdown-header noti-title">
                        <h6 class="text-overflow m-0">Welcome!</h6>
                    </div>
                    <a href="#" class="dropdown-item">
                        <i class="ni ni-single-02"></i>
                        <span>My profile</span>
                    </a>
                    <a href="#" class="dropdown-item">
                        <i class="ni ni-settings-gear-65"></i>
                        <span>Settings</span>
                    </a>
                    <a href="#" class="dropdown-item">
                        <i class="ni ni-calendar-grid-58"></i>
                        <span>Activity</span>
                    </a>
                    <a href="#" class="dropdown-item">
                        <i class="ni ni-support-16"></i>
                        <span>Support</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="ni ni-user-run"></i>
                        <span>Logout</span>
                    </a>
                </div>
            </li>
        </ul>
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
            <!-- Collapse header -->
            <div class="navbar-collapse-header d-md-none">
                <div class="row">
                    <div class="col-6 collapse-brand">
                        <a href="{{ url('/dashboard') }}">
                            <img src="{{ asset('assets/front/images/logo-4.png') }}">
                        </a>
                    </div>
                    <div class="col-6 collapse-close">
                        <button type="button" class="navbar-toggler" data-toggle="collapse"
                                data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false"
                                aria-label="Toggle sidenav">
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Form -->
            <form class="mt-4 mb-3 d-md-none">
                <div class="input-group input-group-rounded input-group-merge">
                    <input type="search" class="form-control form-control-rounded form-control-prepended"
                           placeholder="{{ __('Search') }}" aria-label="Search">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <span class="fa fa-search"></span>
                        </div>
                    </div>
                </div>
            </form>
            <!-- Navigation -->
            <ul class="navbar-nav" style="
    height: 100vh;
    overflow: auto;
">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/dashboard') }}">
                        <span><img src="{{ asset('assets/front/images/icons/dashboard.png') }}"
                                   class="img-fluid"></span> @lang('lang.Dashboard')
                    </a>
                </li>

                @can('read_users')
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/admin/users') }}">
                        <span><img src="{{ asset('assets/front/images/icons/users (1).png') }}"
                                   class="img-fluid"></span> @lang('lang.users')
                    </a>
                </li>
                @endcan
                @can('read_roles')
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/admin/roles') }}">
                        <span><img src="{{ asset('assets/front/images/icons/users-alt.png') }}"
                                   class="img-fluid"></span> @lang('lang.roles')
                    </a>
                </li>
                @endcan
<!-- {{--categotries--}} -->
                @can('read_categories')
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/admin/categories') }}">
                        <span><img src="{{ asset('assets/front/images/icons/cube (1).png') }}"
                                   class="img-fluid"></span> @lang('lang.categories')
                    </a>
                </li>
                @endcan
<!-- {{--pages--}} -->
                @can('read_pages')
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/admin/pages') }}">
                        <span><img src="{{ asset('assets/front/images/icons/cube (1).png') }}"
                                   class="img-fluid"></span> @lang('lang.pages')
                    </a>
                </li>
                @endcan
                @can('read_countries')
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/admin/countries') }}">
                        <span><img src="{{ asset('assets/front/images/icons/cube (1).png') }}"
                                   class="img-fluid"></span> @lang('lang.countries')
                    </a>
                </li>
                @endcan

                @can('read_cities')
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/admin/cities') }}">
                        <span><img src="{{ asset('assets/front/images/icons/cube (1).png') }}"
                                   class="img-fluid"></span> @lang('lang.cities')
                    </a>
                </li>
                @endcan
                @can('read_sliders')
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/admin/sliders') }}">
                        <span><img src="{{ asset('assets/front/images/icons/cube (1).png') }}"
                                   class="img-fluid"></span> @lang('lang.sliders')
                    </a>
                </li>
                @endcan
                @can('read_brands')
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/admin/brands') }}">
                        <span><img src="{{ asset('assets/front/images/icons/cube (1).png') }}"
                                   class="img-fluid"></span> @lang('lang.brands')
                    </a>
                </li>
                @endcan
                @can('read_services')
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/admin/services') }}">
                        <span><img src="{{ asset('assets/front/images/icons/cube (1).png') }}"
                                   class="img-fluid"></span> @lang('lang.services')
                    </a>
                </li>

                @endcan

                @can('read_articles')
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/admin/articles') }}">
                        <span><img src="{{ asset('assets/front/images/icons/cube (1).png') }}"
                                   class="img-fluid"></span> @lang('lang.articles')
                    </a>
                </li>
                @endcan
                @can('read_packages')
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/admin/packages') }}">
                        <span><img src="{{ asset('assets/front/images/icons/cube (1).png') }}"
                                   class="img-fluid"></span> @lang('lang.packages')
                    </a>
                </li>
                @endcan
                {{--//packagefeatures--}}
                @can('read_packagefeatures')
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/admin/packagefeatures') }}">
                        <span><img src="{{ asset('assets/front/images/icons/cube (1).png') }}"
                                   class="img-fluid"></span> @lang('lang.packagefeatures')
                    </a>
                </li>
                @endcan
                {{--//notes--}}
                @can('read_notes')
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/admin/notes') }}">
                        <span><img src="{{ asset('assets/front/images/icons/cube (1).png') }}"
                                   class="img-fluid"></span> @lang('lang.notes')
                    </a>
                </li>
                @endcan
                {{--//coupons--}}
                @can('read_coupons')
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/admin/coupons') }}">
                        <span><img src="{{ asset('assets/front/images/icons/cube (1).png') }}"
                                   class="img-fluid"></span> @lang('lang.coupons')
                    </a>
                </li>
                @endcan
                {{--//partnerrequests--}}
                @can('read_partnerrequests')
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/admin/partnerrequests') }}">
                        <span><img src="{{ asset('assets/front/images/icons/cube (1).png') }}"
                                   class="img-fluid"></span> @lang('lang.partnerrequests')
                    </a>
                </li>
                @endcan
                @can('read_education')
        <li class="nav-item">
                    <li class="nav-item">   <a class="nav-link" href="{{ url('/admin/education') }}">
                        <span><img src="{{ asset('assets/front/images/icons/cube (1).png') }}"
                                   class="img-fluid"></span> @lang('lang.education')
                    </a>
                    </li>

                @endcan
                @can('read_bankaccounts')
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/admin/bankaccounts') }}">
                        <span><img src="{{ asset('assets/front/images/icons/cube (1).png') }}"
                                   class="img-fluid"></span> @lang('lang.bankaccounts')
                    </a>
                </li>
                @endcan
                @can('read_settings')
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/admin/settings') }}">
                        <span><img src="{{ asset('assets/front/images/icons/cube (1).png') }}"
                                   class="img-fluid"></span> @lang('lang.settings')
                    </a>
                </li>

                @endcan

                @can('read_position')
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/admin/position') }}">
                        <span><img src="{{ asset('assets/front/images/icons/users-alt.png') }}"
                                   class="img-fluid"></span>@lang('lang.Positions')
                    </a>
                </li>
                @endcan
{{--                @can('read_perfumerequest')--}}
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/admin/perfumerequest') }}">
                    <span><img src="{{ asset('assets/front/images/icons/users-alt.png') }}" class="img-fluid"></span> @lang('lang.Perfume requests')
                    </a>
                </li>
{{--                @endcan--}}
{{--                @can('read_perfume')--}}
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/admin/perfume') }}">
                    <span><img src="{{ asset('assets/front/images/icons/medicine.png') }}" class="img-fluid"></span> @lang('lang.perfumes')
                    </a>
                </li>
{{--                @endcan--}}
{{--                @can('read_merchant')--}}
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/admin/merchant') }}">
                    <span><img src="{{ asset('assets/front/images/icons/shop.png') }}" class="img-fluid"></span> @lang('lang.merchants')
                    </a>
                </li>
{{--                @endcan--}}
                @can('read_workshop')
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/admin/workshop') }}">
                    <span><img src="{{ asset('assets/front/images/icons/medicine.png') }}" class="img-fluid"></span>@lang('lang.workshop')
                    </a>
                </li>
                @endcan
{{--                @can('read_bill')--}}
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/admin/bill') }}">
                    <span><img src="{{ asset('assets/front/images/icons/medicine.png') }}" class="img-fluid"></span> @lang('lang.Bill')
                    </a>
                </li>
{{--                @endcan--}}

{{--                @can('read_accountdetail')--}}
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/admin/Tickets') }}">
                    <span><img src="{{ asset('assets/front/images/icons/medicine.png') }}" class="img-fluid"></span> @lang('lang.Tickets')
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/admin/Downloads') }}">
                    <span><img src="{{ asset('assets/front/images/icons/medicine.png') }}" class="img-fluid"></span> @lang('lang.Downloads')
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/admin/accountdetail') }}">
                    <span><img src="{{ asset('assets/front/images/icons/medicine.png') }}" class="img-fluid"></span> @lang('lang.AccountDetail')
                    </a>
                </li>
{{--                @endcan--}}

                @can('read_address')
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/admin/address') }}">
                    <span><img src="{{ asset('assets/front/images/icons/medicine.png') }}" class="img-fluid"></span> @lang('lang.Address')
                    </a>
                </li>
                @endcan
{{--                @can('read_order')--}}
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/admin/order_detail') }}">
                    <span><img src="{{ asset('assets/front/images/icons/medicine.png') }}" class="img-fluid"></span> @lang('lang.OrderDetail')
                    </a>
                </li>
{{--                @endcan--}}
{{--                @can('read_order')--}}
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/admin/order') }}">
                    <span><img src="{{ asset('assets/front/images/icons/medicine.png') }}" class="img-fluid"></span> @lang('lang.Order')
                    </a>
                </li>
{{--                @endcan--}}
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <span><img src="{{ asset('assets/front/images/icons/truck-side (1).png') }}" class="img-fluid"></span>
                        shipping companies
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <span><img src="{{ asset('assets/front/images/icons/cube (1).png') }}" class="img-fluid"></span>
                        Inventory
                    </a>
                </li>
            </ul>
            <!-- Divider -->
            <div class="col-12">
                <img src="{{ asset('assets/front/images/icons/Mask Group 2.png') }}" class="img-fluid">
            </div>

        </div>
    </div>
</nav>
