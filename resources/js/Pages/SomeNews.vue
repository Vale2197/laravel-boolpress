<template>
    <div class="container">
        view news

        <div class="row">
            <div class="col-4">
                <div class="card" :key="post.title" v-for="post in posts">
                    <h4>
                        {{post.title}}
                    </h4>
                    <hr>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            posts: null
        }
    },
    mounted() {
        axios.get('/api/post/api').then(r => {
           
          this.posts = r.data.data
        })
    }
}
</script>

<style>

</style>