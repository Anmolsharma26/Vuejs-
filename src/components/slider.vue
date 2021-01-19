<template>
<div v-on:mouseover="stopRotation" v-on:mouseout="startRotation" class="inner-slider">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <div v-bind:style="{width: innerWidth + 'px', marginLeft: '-' + slidemarginleft +'px' }" class="slider-inner">
        <slide v-for="slide in slider" :key="slide" v-bind:style="{ width:singleWidth + 'px'}" v-bind:slide="slide"></slide>
    </div>
    <div class="slider-navigation">
        <span class="prev" v-on:click="goToPrev"><i class="material-icons">&lt;</i></span>
        <span class="next" v-on:click="goToNext"><i class="material-icons">&gt;</i></span>
    </div>
</div>
</template>

<script>
import Slide from './slide.vue';
export default {
    data() {
        return {
            slider: [{
                    src: require("../static/img/Sangla-Valley-pic.jpg")
                },
                {
                    src: require("../static/img/Reckong-Peo-min.jpg")
                },
                {
                    src: require("../static/img/nako.jpg")
                },
                {
                    src: require("../static/img/Kamru-Fort-Sangla-Kinnaur-min-1.jpg")
                },
                {
                    src: require("../static/img/Kalpa_destination.jpg")
                },
                {
                    src: require("../static/img/Bhawa-Valley-Kinnaur-min.jpg")
                },
                {
                    src: require("../static/img/Chitkul-village-Kinnaur-min.jpg")
                }
            ],
            innerWidth: 0,
            singleWidth: 0,
            currentIndex: 0,
            timer: null
        }
    },
    computed: {
        slidemarginleft() {
            return this.currentIndex * this.singleWidth
        }
    },
    methods: {
        startRotation() {
            this.timer = setInterval(this.goToNext, 3000);
        },

        stopRotation() {
            clearTimeout(this.timer);
            this.timer = null;
        },
        goToPrev() {
            if (this.currentIndex === 0) {
                this.currentIndex = this.slider.length - 1;
            } else {
                this.currentIndex -= 1;
            }

        },
        goToNext() {
            if (this.currentIndex === this.slider.length - 1) {
                this.currentIndex = 0;
            } else {
                this.currentIndex += 1;
            }
        },

        goToSliderIndex(id) {
            this.currentIndex = id;
        },

    },
    props: {
        itemsPerSlider: {
            type: null,
            default: 1
        }
    },
    components: {
        Slide
    },
    mounted() {
        this.startRotation();
        this.$nextTick(() => {
            let singleWidth = this.$el.clientWidth / this.itemsPerSlider
            this.$set(this.$data, 'singleWidth', singleWidth);
            this.$set(this.$data, 'innerWidth', singleWidth * this.slider.length);
        });

    }
}
</script>

<style scoped>
.inner-slider {
    overflow: hidden;
    text-align: center;
}

.slider-inner {
    transition:1s ease-in-out;
}

.numbers {
    margin: 0 5px;
    background-color: white;
    padding: 0 5px;
    border: 1px solid black;
    cursor: pointer;
}

.slider-navigation {
    display: flex;
    justify-content: space-between;
    position: absolute;
    top: 45%;
    width: 95%;
    left: 55px;

}

.prev {
    padding: 0px 18px;
    line-height: 50px;
    border: 1px solid black;
    border-radius: 30px;
    background: aliceblue;
}

.next {
    padding: 0px 18px;
    line-height: 50px;
    border: 1px solid black;
    border-radius: 30px;
    position: relative;
    display: block;
    right: 2em;
    background: aliceblue;
}

i.material-icons {
    font-size: 20px;
}
</style>
