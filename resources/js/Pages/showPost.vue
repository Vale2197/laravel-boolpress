<template>
  <div class="container">
      <div v-if="post" class="row">
            <div class="card text-start">
                <img class="card-img-top" :src="'Storage/' + post.image" alt="">
                <div class="card-body">
                    <h4 class="card-title">{{post.title}}</h4>
                    <p class="card-text">{{post.subtitle}}</p>
                </div>
            </div>
      </div>
      <p v-else>
          🦄 loading..
      </p>
  </div>
</template>

<script>
export default {
    data() {
        return {
            post: null
        }
    },
    mounted() {
        axios.get('api/post/' + this.$route.params.id).then(r => {
            this.post = r.data.data
        })
    }
}
</script>

<style>

</style>