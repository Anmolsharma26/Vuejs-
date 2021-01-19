<template>
    <footer>
         <ul class="menu-image">
            <li><img alt="Vue logo" src="../assets/logo.png" height="50" width="50"></li>
        </ul>
       <p> this is footer</p>
    </footer>
</template>
<style scoped>
footer{
    background-color:#02a676;
    display: flex;
    justify-content: space-around;
}
.main-header {
    margin: 0;
    padding: 0;
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: space-around;
}
ul {
    display: flex;
    list-style: none;
}
.menu-links li{
    margin: 0 0 0 10px;
}
</style>