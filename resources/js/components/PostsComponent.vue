<template>
    <div class="container">
        <div class="row justify-content-center">
            <div v-for="post in posts" :key="post.id" class="col-md-4">
                <div class="card">
                    <img class="img-fluid" :src="'/storage/' + post.image" alt="#">
                    <div class="card-header">{{post.title}}</div>

                    <div class="card-body">
                        {{post.subtitle}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {return {
            posts: null,
        }},
        mounted() {
            axios.get('/api/post/api').then(response => {
                
               return this.posts = response.data.data;
               
            })
        }
    }
</script>
