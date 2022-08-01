<div class="header bg-gradient-primary pb-1 pt-2">
    <div class="container-fluid">
        <div class="header-body">
         
            <div class="mt-3">
                    <div class="card card-stats mb-4 mb-xl-0">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-xl-2">
                                        <div class="row">
                                            <div class="col-auto">
                                                    <span><img src="{{ asset('assets/front/images/icons/Group 200.png') }}" class="img-fluid icon icon-shape shadow"></span> 
                                                </div>
                                                <div class="col">
                                                </div>
                                            
                                       </div>
                                        <p class="mt-1 mb-0 text-sm">
                                            <span class="mr-3 card-title text-uppercase mb-0">@lang('lang.perfumes')</span>
                                            <span class="h2 font-weight-bold mb-0"></span>
                                        </p>
                                 </div>
                                 @foreach($cats as $row)
                                           
                                            <div class="col-xl-2 col-lg-6 space_card1">
                                    <div class="card card-stats mb-4" style="background-color:#1B222C;">
                                        <div class="card-body body1">
                                            <div class="row">
                                                    <div class="col-auto" style="padding: 0px 7px;">
                                                    <span class="mr-1 text-xs card-title text-uppercase mb-0">{{$row->name_en}}</span>
                                                        </div>
                                            
                                                    </div>
                                                    <div class="col-auto text-end mt-2" style="padding: 0px 20px;">
                                                    <span class="mr--4 card-title text-uppercase mb-0">{{ $row->perfumesCount }}</span>
                                                        </div>
                                        </div>
                                    </div>
                                </div>
                                        @endforeach
                                <!-- <div class="col-xl-2 col-lg-6 space_card1">
                                    <div class="card card-stats mb-4" style="background-color:#1B222C;">
                                        <div class="card-body body1">
                                            <div class="row">
                                                    <div class="col-auto" style="padding: 0px 7px;">
                                                    <span class="mr-1 text-xs card-title text-uppercase mb-0">oriental perfumes</span>
                                                        </div>
                                            
                                                    </div>
                                                    <div class="col-auto text-end mt-2" style="padding: 0px 20px;">
                                                    <span class="mr--4 card-title text-uppercase mb-0">08</span>
                                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-lg-6 space_card2">
                                    <div class="card card-stats mb-4" style="background-color:#1B222C;">
                                        <div class="card-body body1">
                                            <div class="row">
                                                    <div class="col-auto" style="padding: 0px 7px;">
                                                    <span class="mr-1 text-xs card-title text-uppercase mb-0">oriental perfumes</span>
                                                        </div>
                                            
                                                    </div>
                                                    <div class="col-auto text-end mt-2" style="padding: 0px 20px;">
                                                    <span class="mr--4 card-title text-uppercase mb-0">20</span>
                                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-lg-6 space_card2">
                                    <div class="card card-stats mb-4" style="background-color:#1B222C;">
                                        <div class="card-body body1">
                                            <div class="row">
                                                    <div class="col-auto" style="padding: 0px 7px;">
                                                    <span class="mr-1 text-xs card-title text-uppercase mb-0">niche perfumes</span>
                                                        </div>
                                            
                                                    </div>
                                                    <div class="col-auto text-end mt-2" style="padding: 0px 20px;">
                                                    <span class="mr--4 card-title text-uppercase mb-0">13</span>
                                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-lg-6 space_card2">
                                    <div class="card card-stats mb-4" style="background-color:#1B222C;">
                                        <div class="card-body body1">
                                            <div class="row">
                                                    <div class="col-auto" style="padding: 0px 7px;">
                                                    <span class="mr-1 text-xs card-title text-uppercase mb-0">Perfume Sets</span>
                                                        </div>
                                            
                                                    </div>
                                                    <div class="col-auto text-end mt-2" style="padding: 0px 20px;">
                                                    <span class="mr--4 card-title text-uppercase mb-0">01</span>
                                                        </div>
                                        </div>
                                    </div>
                                </div> -->
                          </div>
                          <div class="cube1">
                               <img src="{{ asset('assets/front/images/icons/Mask Group 19.png') }}" class="img-fluid">
                                </div>
                               
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>