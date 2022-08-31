import { ref } from 'vue'
import axios from "axios";
import { useRouter } from 'vue-router';

export default function useBlog() {
    const posts = ref([])
    const postsByCategory = ref([])
    const post = ref([])
    const router = useRouter()
    const errors = ref('')

    const getPosts = async () => {
        let response = await axios.get('/api/posts')
        posts.value = response.data;
    }

    const getPost = async (id) => {
        let response = await axios.get('/api/posts/' + id)
        post.value = response.data;
    }

    const getPostsByCategory = async (category) => {
        let response = await axios.get('/api/posts/category/' + category)
        console.log(response)
        postsByCategory.value = response.data
    }

    const storePost = async (data) => {
        errors.value = ''
        try {
            await axios.post('/api/posts', data)
            await router.push({name: 'posts.index'})
        } catch (e) {
            if (e.response.status === 422) {
                errors.value = e.response.data.errors
            }
        }
    }

    const updatePosts = async (id) => {
        errors.value = ''
        try {
            await axios.put('/api/posts/' + id, post.value)
            await router.push({name: 'posts.index'})
        } catch (e) {
            if (e.response.status === 422) {
                errors.value = e.response.data.errors
            }
        }
    }

    const destroyPost = async (id) => {
        await axios.delete('/api/posts/' + id)
    }
    const deletePost = async (id) => {
        if (!window.confirm('Stergi '+id+'?')) {
            return
        }

        await destroyPost(id);
        await getPosts();
    }


    return {
        posts,
        postsByCategory,
        post,
        errors,
        getPosts,
        getPost,
        storePost,
        updatePosts,
        destroyPost,
        deletePost,
        getPostsByCategory
    }
}
