<template>
    <div class="container">
        view news

        <div class="row g-3">
            <div class="col-4" v-for="post in posts" :key="post.id"> 
               <div class="card" style="width: 18rem; height: 100%;">
                    <img :src="'storage/' + post.image" class="card-img-top" alt="#">
                    <div class="card-body d-flex flex-column justify-content-between">
                        <h5 class="card-title">{{post.title}}</h5>
                        <p class="card-text">{{post.subtitle}}</p>
                        <a href="#" class="btn btn-primary">#</a>
                    </div>
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
        axios.get('api/post/api').then(r => {
           
            this.posts = r.data.data
        })
    }
}
</script>

<style>

</style>