<template>
    <div class="slide">
        <img class="img-slider" v-bind:src="slide.src" alt="" height="500px">
    </div>
</template>
<script>
export default {
     data () {
         return {}
    },
    props: 
     ['slide']
    }

</script>
<style scoped>
 img {
    width: 100%;
    height: 600px;
    object-fit: cover;
}
.slide{
    display: inline-block;
    text-align: center;
    width: 100%;
}

</style>