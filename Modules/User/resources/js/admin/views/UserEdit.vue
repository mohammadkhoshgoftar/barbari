<template>
    <BlogForm :isEdit="true" :blogId="$route.params.id" />
</template>

<script>
import BlogForm from '../components/BlogForm.vue';

export default {
    components: {
        BlogForm,
    },
};
</script>
