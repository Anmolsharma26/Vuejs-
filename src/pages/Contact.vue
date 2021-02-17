<template>
<div class="Contact_Form">
    <h3>Contact Form</h3>

<div class="container">
  <form  action="/action_page.php">
    <b-form-input class="mb-2" v-model="firstname" required placeholder="First name"></b-form-input>
    <b-form-input class="mb-2" v-model="lastname" required placeholder="Last name"></b-form-input>
    <b-form-textarea id="subject" class="mb-2" name="subject" placeholder="Write something.." style="height:200px"></b-form-textarea>
    <b-button type="submit"> Submit </b-button>
  </form>
</div>
</div>
</template>
<script>
export default {
    
}
</script>
<style scoped>
.Contact_Form {
    width: 60%;
    height: 72vh;
}
h3{
    text-align: center;
}
</style>