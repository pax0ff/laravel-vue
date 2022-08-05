import { ref } from 'vue'
import axios from "axios";
import { useRouter } from 'vue-router';

export default function useStore() {
    const products = ref([])
    const productsByCategory = ref([])
    const product = ref([])
    const router = useRouter()
    const errors = ref('')

    const getProducts = async () => {
        let response = await axios.get('/api/products')
        products.value = response.data;
    }

    const getProduct = async (id) => {
        let response = await axios.get('/api/products/' + id)
        product.value = response.data;
    }

    const getProductsByCategory = async (category) => {
        //console.log("storejs");
        let response = await axios.get('/api/products/category/' + category)
        console.log(response)
        productsByCategory.value = response.data
    }

    const storeProduct = async (data) => {
        errors.value = ''
        try {
            await axios.post('/api/products', data)
            await router.push({name: 'products.index'})
        } catch (e) {
            if (e.response.status === 422) {
                errors.value = e.response.data.errors
            }
        }
    }

    const updateProduct = async (id) => {
        errors.value = ''
        try {
            await axios.put('/api/products/' + id, product.value)
            await router.push({name: 'products.index'})
        } catch (e) {
            if (e.response.status === 422) {
                errors.value = e.response.data.errors
            }
        }
    }

    const destroyProduct = async (id) => {
        await axios.delete('/api/products/' + id)
    }
    const deleteProduct = async (id) => {
        if (!window.confirm('Stergi '+id+'?')) {
            return
        }

        await destroyProduct(id);
        await getProducts();
    }


    return {
        products,
        productsByCategory,
        product,
        errors,
        getProducts,
        getProduct,
        storeProduct,
        updateProduct,
        destroyProduct,
        deleteProduct,
        getProductsByCategory
    }
}
