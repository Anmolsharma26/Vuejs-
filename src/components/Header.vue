<template>
    <header>
        <div class="main-header">
        <ul class="menu-image">
            <li><img alt="Vue logo" src="../assets/logo.png" height="50" width="50"></li>
        </ul>
        <ul class="menu-links">
            <li><router-link to="/">Home</router-link></li>
            <li><router-link to="/about">About</router-link></li>
            <li><router-link to="/destination">Destination</router-link></li>
            <li><router-link to="/contact-us">Contact us</router-link></li>
            <li><router-link to="/login">Login</router-link>/<router-link to="/Register">Register</router-link></li>
        </ul>
        </div>
    </header>
</template>
<script>


</script>
<style scoped>
header{
    background-color:#629a99;
}
.main-header {
    margin: 0;
    padding: 0;
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: space-around;
    background-image: url(../static/img/mount-1-header.png);
    height: 85px;
}
ul {
    display: flex;
    list-style: none;
}
.menu-links li{
    padding:10px 30px;
    margin: 20px 0 0 10px;
}
li:hover{
        background:#02a676;
    }
a {
    font-size: 18px;
    color: black;
}
</style>