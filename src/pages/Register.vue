<template>
<div class="form">
<div class="register_form">
    <form @submit="formSubmit">
        <div class="form-group">
            <div>
                <b-input-group prepend class="mb-2">
                    <b-form-input v-model="firstname" required class="mr-2" placeholder="First name"></b-form-input>
                    <b-form-input v-model="lastname" required placeholder="Last name"></b-form-input>
                </b-input-group>
            </div>
            <b-form-input v-model="email" type="email" required placeholder="Enter Email"></b-form-input>
            <b-form-input type="password" class="my-3" v-model="password" required placeholder="Password"></b-form-input>
            <b-button type="submit"> Register </b-button>
        </div>
    </form>
</div>
</div>
</template>

<script>
//import axiox library
import axios from 'axios'


export default {
    name: "Register",
    data() {
        return {
            firstname: "",
            lastname: "",
            email: "",
            password: "",
        }
    },
    mounted: function () {
        console.log('Hello from Vue!')
    },
    methods: {
        //create function for resister user
        formSubmit() {
            //axios request form vue to php
            axios.post(`http://localhost/vueapp-routing/src/api.php?action=create`, null, {
                //params for sending data from front-end to back-end
                   params:{ firstname: this.firstname,
                    lastname: this.lastname,
                    email: this.email,
                    password: this.password}
                }).then(function (resp) {
                    //checking responce
                    console.log(resp);
                })
                .catch(function (error) {
                    //checking error
                    console.log(error);
                });
        }
    }
}
</script>

<style scoped>
.form{
    height: 71vh;
}
.register_form {
    margin-top:20% ;
    border: 3px solid #4ca776;
    padding: 25px;
    border-radius: 5px;
}
</style>
