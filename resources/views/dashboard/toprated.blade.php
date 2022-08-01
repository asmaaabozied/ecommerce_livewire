<div class="container-fluid" style="padding: 0px !important;">
<div class="row">
                        <div class="col-xl-12 mb-5 mb-xl-0">
                            <div class="card bg-gradient-default">
                                <div class="card-header bg-transparent" style="border-bottom: 1px solid #1B222C;">
                                    <div class="row align-items-center">
                                        <div class="col-xl-6">
                                            <h2 class="text-white mb-0">@lang('lang.top rated perfumes') </h2>
                                        </div>
                                        <div class="col-xl-6 col-md-12 col-12" style="padding: 0;">
                                             <h4 class="card-title date">@lang('lang.Date') <span style="margin-left: 5px;"> <input id="datepicker1" placeholder="Choose the time" /></span> <span style="margin-left: 5px;"><img src="{{ asset('assets/front/images/icons/Group 68.png') }}" class="img-fluid btn" style="cursor: pointer;padding: 0px;" width="35px"></span></h4>

                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">


                                    <div class="row">
                                    @foreach($data as $review)
                                    <div class="col-xl-4 mb-5 mb-xl-0">
                                                    <div class="card bg-gradient-default" style="height: 250px;">
                                                        <div class="card-header bg-transparent" style="padding: 1.25rem 0.5rem;">
                                                            <div class="row align-items-center">
                                                                <div class="col-xl-5">
                                                                    <h2 class="text-white mb-0" style="font-size: 14px;">{{$review->perfume_name}}</h2>
                                                                </div>
                                                                <div class="col-xl-7">
                                                                    <span> <div class="rating-review">
                                                                                                <span>
                                                                                                                <div class="rate">

                                                                                                                    @for($i=1; $i<=$review->star_rating; $i++) 
                                                                                                                         <label for="star5" title="text"></label>
                                                                                                                    @endfor
                                                                                                                
                                                                                                                </div>
                                                                                                        </span>
                                                                                        </div>  {{$review->rate}}</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card-body">
                                                            <!-- Chart -->
                                                            <div class="chart">
                                                                <!-- Chart wrapper -->
                                                                <canvas id="chart-sales" class="chart-canvas"></canvas>
                                                            </div>
                                                        </div>
                                                    </div>
                                        </div>

                           @endforeach

                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                                <!-- end row -->
</div>
                            <!-- /.box -->

@push('js')
<script src="{{asset('assets/front/js/jquery-3.3.1.min.js')}}"></script>
<script>
        $('#datepicker1').datepicker({
            uiLibrary: 'bootstrap4'
        });

        // Render Actions to open Dialog when onclick
    function RenderActions(renderActionstring) {
        $("#OpenDialog").load(renderActionstring);
    };

     // Render Actions to open Dialog when onclick for valid
     function RenderActions1(renderActionstring1) {
        $("#OpenDialog1").load(renderActionstring1);
    };
    </script>

@endpush
