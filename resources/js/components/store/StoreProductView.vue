<template>
<div class="container p-32">
    <div v-for="item in product" class="d-flex">
        <div class="d-flex col-5">
            <img :src="item.image" class="card-img img-fluid" style="height:400px;width:400px" alt="">
        </div>
        <div class="d-flex col-1"><div class="vr"></div></div>

        <div class="d-block col-6">
            <h1 class="card-title uppercase">{{item.name}} - {{item.sku}}</h1>

            <span>{{item.description}}</span>


            <div class="d-flex">
                <h1 class="uppercase">Pret: </h1>
                <h1>{{item.price}}</h1>
                <h1 class="uppercase">{{item.currency}}</h1>
            </div>

            <div class="d-flex space-x-12">
                <button class="btn btn-outline-danger" v-on:click="addProductCart">Adauga in cos</button>
                <a href="#"><i class="bi bi-heart black-outline h2" id="cart"></i></a>
            </div>

        </div>
    </div>
</div>
</template>

<script>
import useStore from "../../composables/store";
import {onMounted} from "vue";
export default {
    props: {
        id: {
        required: true,
        type: String
        }
    },


    setup(props) {
        const { errors, product,getProduct } = useStore()
        onMounted(getProduct(props.id))

        return {
            errors,
            product,
            getProduct
        }
},
    methods: {
        addProductCart() {
            let currentProduct = JSON.parse(JSON.stringify(this.product))
            console.log(currentProduct)
        }
    }
    // mounted() {
    //     this.getProduct(this.props.id)
    //     console.log(this.getProduct(this.props.id));
    // }

}
</script>

<style scoped>

</style>
