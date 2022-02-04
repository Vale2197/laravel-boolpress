<template>
    <div class="container">
        view news

         <p v-if="posts == null">
            🦄 loading..
        </p>

        <div class="row g-3" v-else>
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

        <div class="row" style="
            position: fixed;
            bottom: 0;"
            >
            <nav aria-label="Page navigation example">
                <ul class="pagination" v-if="page">
                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                    <li v-for="page in page.last_page" :key="page" class="page-item"><a class="page-link" href="#">{{page}}</a></li>
                    <li class="page-item"><a class="page-link" @click="nextPage()" href="#">Next</a></li>
                </ul>
            </nav>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            posts: null,
            links: null,
            page: null,
        }
    },
    methods: {
        nextPage(){
           axios.get('api/post/api?page=' + (this.page.current_page == 8 ? this.page.current_page = 1 : 1 +this.page.current_page++)).then(r => {
               this.posts = r.data.data
           })
        }
    },
    mounted() {
        axios.get('api/post/api').then(r => {
            console.log(r.data.links, r.data.meta);
            this.posts = r.data.data;
            this.links = r.data.links;
            this.page = r.data.meta;
        })
    }
}
</script>

<style>

</style>