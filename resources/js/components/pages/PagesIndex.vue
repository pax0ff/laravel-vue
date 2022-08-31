<template>
    <div class="container-fluid">
        <vueper-slides>
            <vueper-slide v-for="i in 5" :key="i" :image="`https://picsum.photos/id/`+i+`/1000/1000`" />
        </vueper-slides>
    </div>

    <div class="container">
        <h2 class="modal-title centered">Produse</h2>
        <vueper-slides
            class="no-shadow"
            :visible-slides="4"
            slide-multiple
            :gap="3"
            :slide-ratio="1 / 4"
            :dragging-distance="200"
            :breakpoints="{ 800: { visibleSlides: 2, slideMultiple: 2 } }">
            <vueper-slide v-for="item in products" :key="item.id" :title="item.name.toString()" :image="item.image" :link="`/products/`+item.id"/>
        </vueper-slides>
    </div>

    <div class="container">
        <h2 class="centered">Ultimele noutati</h2>

        <div class="overflow-hidden overflow-x-auto min-w-full align-middle sm:rounded-md">
            <div class="row">
                <template v-for="item in posts" :key="item.id">

                    <div class="col-md-4 mt-2">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-img-actions">

                                    <img :src="item.image" class="card-img img-fluid" style="height:400px;width:400px" alt="">


                                </div>
                            </div>

                            <div class="card-body bg-light text-center">
                                <div class="mb-2">
                                    <h6 class="font-weight-semibold mb-2">
                                        <a :href="`/posts/`+item.id" class="text-default mb-2" data-abc="true">{{ item.title }}</a>
                                    </h6>

                                    <a :href="`/products/category/`+item.categorie" class="text-muted" data-abc="true">{{ item.categorie }}</a>
                                </div>
                                <h3 class="mb-0 font-weight-semibold">{{ item.excerpt + "..."}}</h3>

                                <div>
                                    <i class="fa fa-star star"></i>
                                    <i class="fa fa-star star"></i>
                                    <i class="fa fa-star star"></i>
                                    <i class="fa fa-star star"></i>
                                </div>

                                <div class="text-muted mb-3">34 reviews</div>
                            </div>
                        </div>
                    </div>
                </template>
            </div>
        </div>
    </div>

</template>

<script>
import useStore from "../../composables/store";
import useBlog from "../../composables/blog";
import { VueperSlides, VueperSlide } from 'vueperslides'
import 'vueperslides/dist/vueperslides.css'
export default {
    components: { VueperSlides, VueperSlide },
    data() {
        return {
            images: [],
        };
    },
    setup() {
        return {
            ...useStore(),
            ...useBlog()
        }
    },
    mounted: function() {
        this.getProducts()
        this.getPosts()
    }
};
</script>

<style scoped>

</style>
