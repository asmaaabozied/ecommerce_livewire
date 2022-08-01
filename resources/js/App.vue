<template>
<div>
  <NavBar/>
 <!--  <HomePage/> -->
    <router-view/>
 <FooterComponent/>
</div>


</template>

<script>
import NavBar from './components/NavBar.vue';
import FooterComponent from './components/FooterComponent.vue';
import HomePage from "./views/HomePage.vue";
import HelloI18n from './components/HelloI18n.vue'


export default {
  name: 'App',
  components: {
    NavBar,
    FooterComponent,
    HelloI18n,
    HomePage
  }
}
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
}
</style>
