<template>
    <div>
        <h1>users </h1>
        <ul>
            <li v-for="blog in blogs" :key="blog.id">
                <router-link :to="`/blogs/${blog.id}`">{{ blog.title }}</router-link>
                <button @click="deleteBlog(blog.id)">Delete</button>
            </li>
        </ul>
        <router-link to="/blogs/create">Create New Blog</router-link>
    </div>
</template>

<script>
import { ref, onMounted } from 'vue';
import axios from 'axios';

export default {
    setup() {
        const blogs = ref([]);

        const fetchBlogs = async () => {
            const response = await axios.get('/api/blogs');
            blogs.value = response.data;
        };

        const deleteBlog = async (id) => {
            await axios.delete(`/api/blogs/${id}`);
            fetchBlogs();
        };

        onMounted(fetchBlogs);

        return { blogs, deleteBlog };
    }
};
</script>
