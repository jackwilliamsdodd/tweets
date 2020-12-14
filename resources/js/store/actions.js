let actions = {
    SEARCH_TWEETS({commit}, query) {
        let params = {
            query
        };
        axios.get(`/api/search`, {params})
            .then(res => {
                if (res.data === 'ok')
                    console.log('request sent successfully')

            }).catch(err => {
            console.log(err)
        })
    },
    GET_TWEETS({commit}) {
        axios.get('/api/tweets')
            .then(res => {
                {
                    commit('SET_TWEETS', res.data)
                }
            })
            .catch(err => {
                console.log(err)
            })
    }
}

export default actions
