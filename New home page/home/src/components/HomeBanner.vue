<template>
    <div class=" banner">
        <!-- <h1>
            Ghali Honeymoon
        </h1>
        <div class="offers">
            <div>
                <h3>آخر العروض</h3>
                <p>خصم 1 علي هاني مون</p>

            </div>
            <div>
                <h3>أخر العروض</h3>
                <p>خصم 1 علي هاني مون</p>

            </div>
                 
        </div> -->
       
    </div>
</template>
<script>
export default{
    name:"HomeBanner"
}
</script>
<style scoped>
.banner{
    position:relative;
    overflow: hidden;
    background: 
    url("../assets/images/final\ banner04.jpg");
    background-repeat: no-repeat, no-repeat;
    background-repeat: no-repeat;
    background-size: 100% 100%;
    height:500px;
    width:100%;
    margin:0 !important;
    padding: 0 !important
}
/* .banner::after {
  content: url("../assets/images/bottom_shape.png");
  width: 100%;
  position: absolute;
  left:0;
  top: 93%;
} */
.banner >h1 {   
    color:white;
    font-size: clamp(7vw, 8rem, 7vw);
    margin-top: 2rem;
    height:50%;
}
.banner >div{
    display: flex;
    justify-content: space-between;
    color:white;
    padding-right:2rem;
    padding-left:2rem
}
.offers >div , h3{
    font-size:clamp(2rem, 2vw, 7rem)
}
@media (max-width:622px){
    .banner >div{
        padding-right:0;
        padding-left:0
    }
  
}




</style>