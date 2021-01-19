<template>
  <div class="Home-page">
    <div class="slider-div">
      <Slider />
    </div>
          <img alt="Sangla Valley" src="../static/img/border.png" >
          <h2 class="title-heading-center" data-fontsize="28" data-lineheight="38">Some Destinations in Kinnaur</h2>
    <div class="home-discription">
      <div class="discription">
      <router-link to="/Sangla-Valley">
      <img class="discription-img" alt="Sangla Valley" src="../static/img/Sangla-in-Spring.jpg" >
      <p>
        <strong>Sangla Valley</strong>
      </p>
      </router-link>
    </div>
    <div class="discription">
      <router-link to="/Kamru">
      <img class="discription-img" alt="Sangla Valley" src="../static/img/Kamru-Fort-Sangla-Kinnaur-min-1.jpg">
      <p>
        <strong>Kamru</strong>
      </p>
      </router-link>
    </div>
    <div class="discription">
      <router-link to="/Chitkul">
      <img class="discription-img" alt="Sangla Valley" src="../static/img/Chitkul-village-Kinnaur-min.jpg">
      <p>
        <strong>Chitkul</strong>
      </p>
      </router-link>
      </div>
    </div>
  </div>
  
</template>
<script>
import Slider from "../components/slider.vue";
export default {
  components: {
    Slider,
  },
};
</script>
<style scoped>
.Home-page {
  width: 100%;
  text-align: center;
}
.slider-div {
  position: relative;
  display: block;
  margin: 10px 20px;
}
.home-discription {
  display: flex;
  justify-content: space-between;
}
.discription-img{
  height: 200px;
  width: 400px;
}
.discription{
  text-align: center;
}
p{
  text-align: center;
}
strong {
    font-weight: bolder;
}

</style>