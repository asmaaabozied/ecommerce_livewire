<template>
  <div class="col-lg-3 col-md-4 perfumes_filter">
    <div class="row">
        <!-- For Mobile Design -->
        <div class="filter">
            <button class="btn btn-default" type="button" data-toggle="collapse" data-target="#mobile-filter" aria-expanded="false" aria-controls="mobile-filter">Filters<span class="fa fa-filter pl-1"></span></button>
        </div>
        <div id="mobile-filter" class="collapse">
            <div>
                <h6 class="p-1"><span><img class="img-fluid" src="{{asset('assets/front/images/apps.png')}}"></span>Categories</h6>
                <form class="ml-md-2">
                    <div class="form-inline p-sm-2 my-2">
                        <input type="checkbox" name="type" id="boring">
                        <label for="boring" class="pl-1 pt-sm-0 pt-1">ALL</label>
                    </div>
                    <div class="form-inline p-sm-2 my-2">
                        <input type="checkbox" name="type" id="ugly">
                        <label for="ugly" class="pl-1 pt-sm-0 pt-1">French perfumes</label>
                    </div>
                    <div class="form-inline p-md-2 p-sm-1">
                        <input type="checkbox" name="type" id="notugly">
                        <label for="notugly" class="pl-1 pt-sm-0 pt-1">niche perfumes</label>
                    </div>
                    <div class="form-inline p-sm-2 my-2">
                        <input type="checkbox" name="type" id="boring">
                        <label for="boring" class="pl-1 pt-sm-0 pt-1">oriental perfumes</label>
                    </div>
                    <div class="form-inline p-sm-2 my-2">
                        <input type="checkbox" name="type" id="ugly">
                        <label for="ugly" class="pl-1 pt-sm-0 pt-1">Perfume Sets</label>
                    </div>
                    
                </form>
            </div>
            <div>
            <h6 class="p-1"><span><img class="img-fluid" src="{{asset('assets/front/images/menu-burger.png')}}"></span>sort by</h6>
            <form class="ml-md-2">
                <div class="form-inline p-sm-2 my-2">
                    <input type="checkbox" name="type" id="boring">
                    <label for="boring" class="pl-1 pt-sm-0 pt-1">default order</label>
                </div>
                <div class="form-inline p-sm-2 my-2">
                    <input type="checkbox" name="type" id="ugly">
                    <label for="ugly" class="pl-1 pt-sm-0 pt-1">Sort by popularity</label>
                </div>
                <div class="form-inline p-md-2 p-sm-1">
                    <input type="checkbox" name="type" id="notugly">
                    <label for="notugly" class="pl-1 pt-sm-0 pt-1">Sort by rating</label>
                </div>
                <div class="form-inline p-sm-2 my-2">
                    <input type="checkbox" name="type" id="boring">
                    <label for="boring" class="pl-1 pt-sm-0 pt-1">Sort by latest</label>
                </div>
                <div class="form-inline p-sm-2 my-2">
                    <input type="checkbox" name="type" id="ugly">
                    <label for="ugly" class="pl-1 pt-sm-0 pt-1">Lowest price to the highest</label>
                </div>
                
            </form>
        </div>
        </div>
        <section id="sidebar">
            <div>
                <h6 class="p-1"><span><img class="img-fluid" src="{{asset('assets/front/images/apps.png')}}"></span>Categories</h6>
                <form class="ml-md-2">
                    <div class="form-inline p-sm-2 my-2">
                        <input type="checkbox" name="type" id="boring">
                        <label for="boring" class="pl-1 pt-sm-0 pt-1">ALL</label>
                    </div>
                    <div class="form-inline p-sm-2 my-2">
                        <input type="checkbox" name="type" id="ugly">
                        <label for="ugly" class="pl-1 pt-sm-0 pt-1">French perfumes</label>
                    </div>
                    <div class="form-inline p-md-2 p-sm-1">
                        <input type="checkbox" name="type" id="notugly">
                        <label for="notugly" class="pl-1 pt-sm-0 pt-1">niche perfumes</label>
                    </div>
                    <div class="form-inline p-sm-2 my-2">
                        <input type="checkbox" name="type" id="boring">
                        <label for="boring" class="pl-1 pt-sm-0 pt-1">oriental perfumes</label>
                    </div>
                    <div class="form-inline p-sm-2 my-2">
                        <input type="checkbox" name="type" id="ugly">
                        <label for="ugly" class="pl-1 pt-sm-0 pt-1">Perfume Sets</label>
                    </div>
                    
                </form>
            </div>
            <div>
                <h6 class="p-1"><span><img class="img-fluid" src="{{asset('assets/front/images/menu-burger.png')}}"></span>sort by</h6>
                <form class="ml-md-2">
                    <div class="form-inline p-sm-2 my-2">
                        <input type="checkbox" name="type" id="boring">
                        <label for="boring" class="pl-1 pt-sm-0 pt-1">default order</label>
                    </div>
                    <div class="form-inline p-sm-2 my-2">
                        <input type="checkbox" name="type" id="ugly">
                        <label for="ugly" class="pl-1 pt-sm-0 pt-1">Sort by popularity</label>
                    </div>
                    <div class="form-inline p-md-2 p-sm-1">
                        <input type="checkbox" name="type" id="notugly">
                        <label for="notugly" class="pl-1 pt-sm-0 pt-1">Sort by rating</label>
                    </div>
                    <div class="form-inline p-sm-2 my-2">
                        <input type="checkbox" name="type" id="boring">
                        <label for="boring" class="pl-1 pt-sm-0 pt-1">Sort by latest</label>
                    </div>
                    <div class="form-inline p-sm-2 my-2">
                        <input type="checkbox" name="type" id="ugly">
                        <label for="ugly" class="pl-1 pt-sm-0 pt-1">Low price to high</label>
                    </div>
                    
                </form>
            </div>
        </section>
    </div>
</div>
</template>

<script>
export default {
    name:"FilterComponent"

}
</script>

<style>
.perfumes_filter #sidebar {
    width: 100%;
    padding: 15px;
    margin: 0;
    float: left;
    background-color: #faf7f2;
    margin-top: 24px;
  /*   border :1px solid #c49346; */
    border-radius: 5px;
}
.perfumes_filter #sidebar h6 span {
    margin: 0px 5px;
}
.perfumes_filter #products {
    width: 80%;
    padding: 10px;
    margin: 0;
    float: right;
}
.perfumes_filter ul {
    list-style: none;
    padding: 5px;
}
.perfumes_filter li a {
    color: darkgray;
    text-decoration: none;
}
.perfumes_filter li a:hover {
    text-decoration: none;
    color: darksalmon;
}
.perfumes_filter .fa-circle {
    font-size: 20px;
}
.perfumes_filter #red {
    color: #e94545d7;
}
.perfumes_filter #teal {
    color: rgb(69, 129, 129);
}
.perfumes_filter #blue {
    color: #0000ff;
}
.perfumes_filter .card {
    width: 250px;
    display: inline-block;
    height: 300px;
}
.perfumes_filter .card-img-top {
    width: 250px;
    height: 210px;
}
.perfumes_filter .card-body p {
    margin: 2px;
}
.perfumes_filter .card-body {
    padding: 0;
    padding-left: 2px;
}
.perfumes_filter .filter {
    display: none;
    padding: 0;
    margin: 0;
}
.perfumes_filter .collapse {
    display: none;
}
.perfumes_filter .collapse.show {
    display: block;
}

@media (min-width: 991px) {
    .perfumes_filter #mobile-filter {
        display: none;
    }
}
@media (min-width: 768px) and (max-width: 991px) {
    .perfumes_filter #mobile-filter {
        display: none;
    }
}
@media (min-width: 568px) and (max-width: 767px) {
    .perfumes_filter .fa-circle {
        font-size: 15px;
    }
    .perfumes_filter #mobile-filter {
        display: none;
    }
}
@media (max-width:567px){
    .perfumes_filter #sidebar {
        width: 100%;
        padding: 10px;
        margin: 0;
        float: left;
    }
    .perfumes_filter #products {
        width: 100%;
        padding: 5px;
        margin: 0;
        float: right;
    }
    .perfumes_filter .list-group-item {
        padding: 3px;
    }
    .perfumes_filter .offset-1 {
        margin-left: 8%;
    }
    .perfumes_filter .filter {
        display: block;
        margin-left: 70%;
        margin-top: 0%;
        position: relative;
        top: -30px;
    }
    .perfumes_filter #sidebar {
        display: none;
    }
    .perfumes_filter #mobile-filter {
        padding: 10px;
    }
}

</style>