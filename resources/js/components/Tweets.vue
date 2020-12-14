<template>
<div>
        <div class="container flex-container">
            <div class = "flex-inner" v-for="tweet in tweets" >
                <tweet class="card tweet-box animated fadeIn" :tweet="tweet"></tweet>
            </div>
        </div>
</div>
</template>

<script>
    import {mapGetters} from 'vuex'
    import tweet from '../components/Tweet'

    export default {
        name: "Tweets",
        components: {
            tweet
        },
        mounted() {
            this.$store.dispatch('GET_TWEETS')

            window.Echo.channel('search')
                .listen('.searchResults', (e) => {
                    this.$store.commit('SET_TWEETS', e.tweets)
                })

        },
        computed: {
            ...mapGetters([
                'tweets'
            ])
        }
    }
</script>
