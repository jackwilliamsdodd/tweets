<template>

    <div>
        <div class="card-body" style="position: relative;">

            <p class="card-text">{{ tweet.text }}</p>

            <p class="card-text" style="font-size: 0.7rem;">{{ tweet.createdat }}</p>

        </div>
        <div class="card-footer bg-transparent border-0"><p style="font-size: 60px; font-family:'GalanoGrotesqueBold';display: table-cell; vertical-align: bottom; line-height: 5px;">.</p><a href="https://twitter.com/kroweast" target="_blank" class="card-link" style="float: right; display: table-cell; vertical-align: bottom; color: #31a4a3!important;"><span>@</span>{{ tweet.screenname }}</a></div>
    </div>

</template>

<script>

    export default {
        name: "Tweet",
        props: ['tweet']
    }

</script>

