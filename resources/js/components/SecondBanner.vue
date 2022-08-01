<template>
    <div class="container-xl second-banner">
       <!--  <p>
           بيع علي متجرك الخاص 
        </p> -->

    </div>
</template>
<script>
export default{
    name:"SecondBanner"
}

</script>

<style scoped>
.second-banner{
     position:relative;
    overflow: hidden;
  background-image: url("../assets/images/final banner05.jpg");
    background-repeat: no-repeat, no-repeat;
   background-repeat: no-repeat;
  background-size: 100% 100%;
    height:500px;
    width:100vw;
    margin-bottom: 70px;
    margin-top:70px
}
.second-banner::after {
  content: url("../assets/images/bottom_shape.png");
  width: 100%;
  position: absolute;
  left:0;
  top: 93%;
}
.second-banner >p {
    /* height:100%; */
    color:white;
    font-size: 3rem;
    text-align:right ;
    margin-top:18rem;
    margin-right:2rem;
    font-weight: 700;
}
</style>