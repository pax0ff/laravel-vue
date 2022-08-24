<template>
    <div class="container-fluid">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <div v-for="(image, id) in images" :key="id">
                    <li data-target="#indicator" :data-slide-to="id" :class=" id === 0? 'active' : '' "></li>
                </div>
            </ol>
            <div class="carousel-inner">
                <div v-for="(image, id) in images" :key="id" :class="id === 0 ? 'carousel-item active' : 'carousel-item'">
                    <img class="d-block w-100" :src="image.href" :alt="image.id" />
                </div>
            </div>
            <a class="carousel-control-prev" href="#indicator" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#indicator" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            images: [],
        };
    },
    mounted: function() {
        this.getItemsSlider();
    },
    methods: {
        getItemsSlider() {
           this.images=[
               {
                   id:1,
                   href:"https://random.imagecdn.app/1700/500"
               },
               {
                   id:2,
                   href:"https://random.imagecdn.app/1700/500"
               },
               {
                   id:3,
                   href:"https://random.imagecdn.app/1700/500"
               }
               ]
            console.log(this.images);
        },
    }
};
</script>

<style scoped>

</style>
