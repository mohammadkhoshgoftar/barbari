<template>
    <form @submit.prevent="submitForm">
        <div>
            <label>Title</label>
            <input v-model="form.title" type="text" />
        </div>
        <div>
            <label>Content</label>
            <textarea v-model="form.content"></textarea>
        </div>
        <button type="submit">{{ isEdit ? 'Update' : 'Create' }}</button>
    </form>
</template>

<script>
import { ref } from 'vue';
import axios from 'axios';
import { useRouter } from 'vue-router';

export default {
    props: {
        blogId: Number,
        isEdit: Boolean,
    },
    setup(props) {
        const form = ref({
            title: '',
            content: '',
        });
        const router = useRouter();

        const submitForm = async () => {
            if (props.isEdit) {
                await axios.put(`/api/user/${props.blogId}`, form.value);
            } else {
                await axios.post('/api/user', form.value);
            }
            router.push('/users');
        };

        if (props.isEdit) {
            const fetchBlog = async () => {
                const response = await axios.get(`/api/blogs/${props.blogId}`);
                form.value = response.data;
            };
            fetchBlog();
        }

        return { form, submitForm };
    },
};
</script>
