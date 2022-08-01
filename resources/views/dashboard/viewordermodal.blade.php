
<ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Order details</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Information about the customer</a>
                    </li>
                
                </ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
            
            <div class="card">
                   
            <div class="card-body ">
                <div class="row">
                        <div class="col-xl-5">
                            <img src="{{ asset('assets/front/images/icons/SECRET23.png') }}" class="img-fluid">
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
                                    
                                                    <label for="Name" class="bmd-label-floating">Required quantity</label>
                                        
                                        <div class="row">
                                            <div class="col-md-12">
                                            <label for="Name" class="bmd-label-floating bord">300  note</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
                            </div>
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="form-group bmd-form-group">
                                    
                                                    <label for="Name" class="bmd-label-floating">Shipping way</label>
                                        
                                        <div class="row">
                                            <div class="col-md-12">
                                            <label for="Name" class="bmd-label-floating bord">note note note note</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="form-group bmd-form-group">
                                    
                                                    <label for="Name" class="bmd-label-floating">Total</label>
                                        
                                        <div class="row">
                                            <div class="col-md-12">
                                            <label for="Name" class="bmd-label-floating bord">2000  sr</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="form-group bmd-form-group">
                                    
                                                    <label for="Name" class="bmd-label-floating">details</label>
                                        
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
                    <div class="card-footer ">
                            <button class="btn btn-fill btn-rose pull-right accept" type="button" style ="margin-left: 15px;" onclick="CreateUser()">accept</button>
                            <button class="btn btn-fill btn-rose pull-right reject" style ="margin-left: 15px;"type="button" onclick="CreateUser()">reject</button>

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
 
 <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
 <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
            
            <div class="card">
                   
            <div class="card-body ">
                <div class="row">
                      
                        <div class="col-xl-12">
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="form-group bmd-form-group">
                                    
                                                    <label for="Name" class="bmd-label-floating">customer name</label>
                                        
                                        <div class="row">
                                            <div class="col-md-12">
                                            <label for="Name" class="bmd-label-floating bord">hanan</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                <div class="form-group bmd-form-group">
                                    
                                    <label for="Name" class="bmd-label-floating">E-mail</label>
                        
                                <div class="row">
                                    <div class="col-md-12">
                                    <label for="Name" class="bmd-label-floating bord">hananhanan@gmail.com</label>
                                    </div>
                        </div>
                    </div>
                            </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="form-group bmd-form-group">
                                    
                                                    <label for="Name" class="bmd-label-floating">Mobile number</label>
                                        
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label for="Name" class="bmd-label-floating bord"> 00 000 000 000</label>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="col-xl-6">
                                    <div class="form-group bmd-form-group">
                                    
                                                    <label for="Name" class="bmd-label-floating">Payment method</label>
                                        
                                        <div class="row">
                                            <div class="col-md-12">
                                               <label for="Name" class="bmd-label-floating bord">visa</label>
                                            </div>
                                        </div>
                                    </div>
                                
                                </div>
                            </div>            
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="form-group bmd-form-group">
                                    
                                                    <label for="Name" class="bmd-label-floating">address</label>
                                        
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
                        
                <!-- end content-->
            </div>
            <!--  end card  -->
        </div>
        <!-- end col-md-12 -->
      </div>
    <!-- end row -->
  </div>
</div>