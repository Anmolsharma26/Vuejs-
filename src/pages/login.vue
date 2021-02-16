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
        </form>
        </div>
    </div>
</template>
<script>
    // console.log("hdafglfalihfshfuhfsafohu");
</script>
<style scoped>
.login-page{
    width: 25%;
    border: 5px solid #51a846;
    border-radius: 25px;
    height: 300px;
    padding: 20px;
}
.page-container{
    margin: 20px;
}
.submit_button{
    margin: 0 10px 0 0 ;
}

</style>