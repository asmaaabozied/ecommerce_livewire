<tr>
                                                                    <td> <input type="checkbox" aria-label="Checkbox for following text input"></td>
                                                                    <td> <img src="{{ asset('assets/front/images/icons/small.png') }}" class="" width="40px"> </td>
                                                                    <td>ghali</td>
                                                                    <td>1/1/0001</td>
                                                                    <td>290  <span>note</span></td>
                                                                    <td>300  <span>sr</span></td>
                                                                    <td>3  <span>%</span></td>
                                                                    <td>niche perfumes</td>
                                                                    <td><label class="switch">
                                                                        <input type="checkbox" checked>
                                                                        <span class="slider round"></span>
                                                                        </label></td>
                                                                    <td class="text-right">


                                                                        <a data-toggle="modal" onclick="RenderActions('/Users/EditUser/ed3256e3-9e4f-4ea4-a985-3f507ea89689')" title="Click to edit" data-target="#modalUser" class="btn" style="padding:0;"> <i class="material-icons"><img src="{{ asset('assets/front/images/icons/edit1.png') }}" class="img-fluid" width="25px"></i></a>

                                                                        <button type="button" rel="tooltip" class="btn remove">
                                                                            <i class="material-icons"><img src="{{ asset('assets/front/images/icons/trash1.png') }}" class="img-fluid" width="25px"></i>
                                                                        </button>
                                                                        <a data-toggle="modal" onclick="RenderActions1('')" title="Click to edit" data-target="#modalUser1" class="btn" style="padding:0;"> <i class="material-icons"><img src="{{ asset('assets/front/images/icons/menu-dots-vertical.png') }}" class="img-fluid" width="25px"></i></a>

                                                                    </td>
</tr>

<!-- perfume details -->

<div id="modalUser1" class="modal fade" role="dialog" data-backdrop="false">

    <div class="modal-dialog perfume_modal">
        <div class="modal-content">


            <div id="OpenDialog1" class="modal-body" style="background-color: #1B222C;border-radius: inherit;">
                <button type="button" rel="tooltip" class="btn remove">
                    <i class="material-icons"><img src="{{ asset('assets/front/images/icons/trash1.png') }}" class="img-fluid" width="25px"></i>
                </button>
                <a data-toggle="modal"  title="Click to edit" data-target="#modalUser1" class="btn" style="padding:0;"> <i class="material-icons"><img src="{{ asset('assets/front/images/icons/edit1.png') }}" class="img-fluid" width="25px"></i></a>

                <div class="card">

                <div class="card-header card-header-rose card-header-icon">



                    <div class="card-icon">



                    <img src="{{ asset('assets/front/images/icons/Group 200.png') }}" class="img-fluid" width="35px">



                </div>
                        <div class="row">


                            <div class="col-md-10 col-9">
                                     <h4 class="card-title"> perfume details</h4>
                                </div>
                                <div class="col-md-2 col-3">
                                      <button type="button" class="btn btn-fill" data-dismiss="modal" style="font-size: 25px;"><i class="fa fa-times-circle"></i></button>
                                </div>
                         </div>

                    </div>

                   <div class="card-body ">
                       <div class="row">
                               <div class="col-xl-5">
                                   <img src="{{ asset('assets/front/images/icons/cermo.png') }}" class="img-fluid">
                               </div>
                               <div class="col-xl-7">
                                   <div class="row">
                                       <div class="col-xl-6">
                                           <div class="form-group bmd-form-group">

                                                           <label for="Name" class="bmd-label-floating">Perfume name</label>

                                               <div class="row">
                                                   <div class="col-md-12">
                                                   <label for="Name" class="bmd-label-floating bord">ghali</label>
                                                   </div>
                                               </div>
                                           </div>
                                       </div>
                                       <div class="col-xl-6">
                                           <div class="form-group bmd-form-group">
                                               <label class="bmd-label-floating">Category</label>
                                               <div class="row">
                                                   <div class="col-md-12">
                                                       <select class="form-control" id="GenderId" name="GenderId" placeholder="choose validities">
                                                                   <option value="1">French perfumes</option>
                                                                   <option value="2">niche perfumes</option>
                                                                   <option value="3">oriental perfumes</option>
                                                           </select>
                                               </div>
                                           </div>

                                           </div>
                                           </div>
                                   </div>

                                   <div class="row">

                                       <div class="col-xl-6">
                                           <div class="form-group bmd-form-group">

                                                           <label for="Name" class="bmd-label-floating">stock</label>

                                               <div class="row">
                                                   <div class="col-md-12">
                                                   <label for="Name" class="bmd-label-floating bord">12  note</label>
                                                   </div>
                                               </div>
                                           </div>
                                       </div>
                                       <div class="col-xl-6">
                                           <div class="form-group bmd-form-group">

                                                           <label for="Name" class="bmd-label-floating">note price</label>

                                               <div class="row">
                                                   <div class="col-md-12">
                                                   <label for="Name" class="bmd-label-floating bord">20  sr</label>
                                                   </div>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                                   <div class="row">
                            <div class="col-xl-6">
                                <div class="form-group bmd-form-group">

                                                <label for="Name" class="bmd-label-floating">discount</label>

                                    <div class="row">
                                        <div class="col-md-12">
                                        <label for="Name" class="bmd-label-floating bord">5 </label>
                                        <span class="percent"> %</span>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="form-group bmd-form-group">

                                    <label for="Name" class="bmd-label-floating">price after discount</label>

                                        <div class="row">
                                            <div class="col-md-12">
                                            <label for="Name" class="bmd-label-floating bord">19  sr</label>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                                <div class="col-xl-12">
                                    <div class="form-group bmd-form-group">

                                                    <label for="Name" class="bmd-label-floating">description</label>

                                        <div class="row">
                                            <div class="col-md-12">
                                            <label for="Name" class="bmd-label-floating bord">note note note note note note note note note</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                        </div>


                                   </div>

                               </div>

                           </div>

                   </div>

            </div>
        </div>
    </div>
</div>

@push('js')

<script>


     // Render Actions to open Dialog when onclick edit
     function RenderActions1(renderActionstring1) {
        $("#OpenDialog1").load(renderActionstring1);
    };

    </script>
@endpush
