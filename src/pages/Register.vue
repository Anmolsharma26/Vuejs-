<template>
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
</template>

<script>
import axios from 'axios'
// import VueAxios from 'vue-axios'

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
        formSubmit() {
            axios.post(`http://localhost/vueapp-routing/src/api.php?action=create`, null, {
                   params:{ firstname: this.firstname,
                    lastname: this.lastname,
                    email: this.email,
                    password: this.password}
                }).then(function (resp) {
                    console.log(resp);
                })
                .catch(function (error) {
                    console.log(error);
                });
        }
    }
}
</script>

<style scoped>
.register_form {
    width: 40%;
}
</style>
