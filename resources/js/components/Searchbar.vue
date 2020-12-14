<template>
    <div class="container col-lg-6">
        <div class="input-group mb-3">
            <input v-model="query" type="text" class="form-control search-box" placeholder="Search tweet contents"
                   aria-label="Tweet contents"
                   aria-describedby="basic-addon2">
            <div class="input-group-append">
                <button class="btn btn-primary search-button" @click="searchTweets" @keyup.enter="searchTweets" type="button">
                    Search
                </button>
                <a class="clear-searches" onclick="window.location.href=this">Clear searches</a>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "Searchbar",
        data() {
            return {
                query: '',
            }
        },
        watch: {
            query: {
                handler: _.debounce(function () {
                    this.searchTweets()
                }, 100)
            }
        },
        methods: {
            searchTweets() {
                this.$store.dispatch('SEARCH_TWEETS', this.query)
            }
        }
    }
</script>

<style scoped>

</style>
