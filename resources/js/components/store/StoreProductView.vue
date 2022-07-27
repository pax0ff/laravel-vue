<template>
<div class="container">
    <div class="left-2 col-4">
        <img :src="product.image" class="card-img img-fluid" width="96" height="350" alt="">
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

    // mounted() {
    //     this.getProduct(this.id)
    //    // console.log(this.getProduct(this.id));
    // }

}
</script>

<style scoped>

</style>
