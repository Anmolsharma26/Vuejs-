<template>
<div class="login-page">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"> -->
    <div class="page-container">
        <h3>Login Page</h3>
        <form>
            <b-form-input class="my-3" v-model="text" placeholder="Enter your Username"></b-form-input>
            <b-form-input class="my-3" v-model="text" placeholder="Enter your Password"></b-form-input>
            <b-button type="submit" class="submit_button" variant="success">Login</b-button>
            <router-link to="/Register">Register</router-link>
            <div class="container">
                <span class="psw"><a href="#"> Forgot password?</a></span>
  </div>
        </form>
    </div>
</div>
</template>

<script></script>

<style scoped>
.login-page{
    height: 71vh;
    width: 33%;
}
.page-container {
    margin-top: 20% ;
    border: 2px solid #4ca776;
    border-radius: 15px;
    height: 250px;
    padding: 10px 20px 0 20px;
}
.container{
    margin-top: 10px;
    text-align: center;
    background-color:#f1f1f1;
}
.submit_button {
    margin: 0 10px 0 0;
}
.register_link{
    margin: 0 10px 0 0;
}
</style>
