<template>
<div class="container">
        <div class="overflow-hidden overflow-x-auto min-w-full align-middle sm:rounded-md">
            <div class="flex place-content-end mb-4">
                <div class="px-4 py-3 text-white bg-auto hover:bg-indigo-100 cursor-pointer">
<!--                    <router-link :to="{ name: 'store.create' }" class="text-sm font-medium">Adauga produs</router-link>-->
                </div>
            </div>

                <div class="row">
                    <template v-for="item in products" :key="item.id">

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
                                        <a :href="`/products/`+item.id" class="text-default mb-2" data-abc="true">{{ item.name }}</a>
                                    </h6>

                                    <a href="#" class="text-muted" data-abc="true">{{ item.categorie }}</a>
                                </div>

                                <h3 class="mb-0 font-weight-semibold">{{ item.price + " lei"}}</h3>

                                <div>
                                    <i class="fa fa-star star"></i>
                                    <i class="fa fa-star star"></i>
                                    <i class="fa fa-star star"></i>
                                    <i class="fa fa-star star"></i>
                                </div>

                                <div class="text-muted mb-3">34 reviews</div>

                                <button type="button" class="btn bg-cart"><i class="fa fa-cart-plus mr-2"></i> Add to cart</button>
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
export default {
    setup() {

        return {
            ...useStore(),
        }
    },
    mounted() {
        this.getProducts()
        //console.log(this.getProducts());
    }
}
</script>

<style scoped>

</style>
