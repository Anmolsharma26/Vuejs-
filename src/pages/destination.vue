<template>
    <div class="banner-img">
    <img alt="Sangla Valley" src="../static/img/border.png" >
    <div class="heading">
    <h2 class="title-heading-center">Some Destinations in Kinnaur</h2>
    </div>

    <div class="home-discription">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

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
      <div class="discription">
      <router-link to="/Reckongpeo">
      <img class="discription-img" src="../static/img/Reckong-Peo-min.jpg" >
      <p>
        <strong>Reckongpeo</strong>
      </p>
      </router-link>
    </div>
    <div class="discription">
      <router-link to="/Bhawa-Valley">
      <img class="discription-img" src="../static/img/Bhawa-Valley-Kinnaur-min.jpg" >
      <p>
        <strong>Bhawa Valley</strong>
      </p>
      </router-link>
    </div>
    <div class="discription">
      <router-link to="/Kalpa">
      <img class="discription-img" src="../static/img/Kalpa_destination.jpg">
      <p>
        <strong>Kalpa</strong>
      </p>
      </router-link>
    </div>
    <div class="discription">
      <router-link to="/Nako">
        <img class="discription-img" src="../static/img/Nako-Lake-Kinnaur-min.jpg"> 
        <p>
        <strong>Nako</strong>
      </p>
      </router-link>
      </div>
    </div>
    </div>
</template>
<style scoped>
.banner-img{
    text-align: center;
}
.home-discription {
  display: flex;
  justify-content: space-between;
  flex-wrap: wrap;
}
.discription-img{
  height: 200px;
  width: 350px;
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