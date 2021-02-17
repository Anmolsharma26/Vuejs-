<template>
  <div id="app">
    <Header />
    <div id="router-container">
      <router-view></router-view>
    </div>
    <Footer />
  </div>
</template>

<script>
import Header from './components/Header.vue'
import Footer from './components/Footer.vue'
export default {
  name: 'App',
  components: {
    Header,
    Footer
  }
}
</script>
<style scoped>
#router-container{
  margin: 0 5%;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 20px;

}
#app{
  height: 100vh;
}
</style>

