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

                                    <img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1562074043/234.png" class="card-img img-fluid" width="96" height="350" alt="">


                                </div>
                            </div>

                            <div class="card-body bg-light text-center">
                                <div class="mb-2">
                                    <h6 class="font-weight-semibold mb-2">
                                        <a href="#" class="text-default mb-2" data-abc="true">{{ item.name }}</a>
                                    </h6>

                                    <a href="#" class="text-muted" data-abc="true">{{ item.category_id }}</a>
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


<!--                <tbody class="bg-white divide-y divide-gray-200 divide-solid">-->
<!--                <template v-for="item in products" :key="item.id">-->
<!--                    <tr class="bg-white">-->
<!--                        <td class="px-6 py-4 text-sm leading-5 text-gray-900 whitespace-no-wrap">-->
<!--                            {{ item.name }}-->
<!--                        </td>-->
<!--&lt;!&ndash;                        <td class="px-6 py-4 text-sm leading-5 text-gray-900 whitespace-no-wrap">&ndash;&gt;-->
<!--&lt;!&ndash;                            {{ item.email }}&ndash;&gt;-->
<!--&lt;!&ndash;                        </td>&ndash;&gt;-->
<!--&lt;!&ndash;                        <td class="px-6 py-4 text-sm leading-5 text-gray-900 whitespace-no-wrap">&ndash;&gt;-->
<!--&lt;!&ndash;                            {{ item.address }}&ndash;&gt;-->
<!--&lt;!&ndash;                        </td>&ndash;&gt;-->
<!--&lt;!&ndash;                        <td class="px-6 py-4 text-sm leading-5 text-gray-900 whitespace-no-wrap">&ndash;&gt;-->
<!--&lt;!&ndash;                            {{ item.website }}&ndash;&gt;-->
<!--&lt;!&ndash;                        </td>&ndash;&gt;-->
<!--                        <td class="px-6 py-4 text-sm leading-5 text-gray-900 whitespace-no-wrap">-->
<!--                            <router-link :to="{ name: 'products.edit', params: { id: item.id } }"-->
<!--                                         class="mr-2 inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">-->
<!--                                Editeaza-->
<!--                            </router-link>-->
<!--                            <button @click="deleteProduct(item.id)"-->
<!--                                    class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">-->
<!--                                Sterge</button>-->
<!--                        </td>-->
<!--                    </tr>-->
<!--                </template>-->
<!--                </tbody>-->
<!--            </table>-->
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
    }
}
</script>

<style scoped>

</style>
