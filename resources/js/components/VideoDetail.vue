<template>
    <div class="h-full border-2 border-gray-200 rounded-lg overflow-hidden">
        <img class="lg:h-48 md:h-36 w-full object-cover object-center"
             :src="this.searchResult.snippet.thumbnails.high.url" alt="blog">
        <div class="p-6">
            <!--                            <h2 class="tracking-widest text-xs title-font font-medium text-gray-500 mb-1">-->
            <!--                                CATEGORY</h2>-->
            <h1 class="title-font text-lg font-medium text-gray-900 mb-3" v-html="this.searchResult.snippet.title"></h1>
            <p class="leading-relaxed mb-3" v-html="this.searchResult.snippet.description"></p>
            <div class="flex flex-wrap flex-col">
                <ul v-if="statistic !== undefined" v-for="(statistic,name) in statistics">
                    <li v-if="name !== 'dislikeCount' && name !== 'favoriteCount'" class="mr-1">
                        {{ name.toString().charAt(0).toUpperCase() + name.toString().slice(1) }}: {{ new Intl.NumberFormat().format(statistic) }}
                    </li>
                </ul>
                <a class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0"
                   :href="getUrl(this.searchResult.id.videoId,this.searchResult.id.channelId,this.searchResult.id.playlistId)">
                    View
                    <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor"
                         stroke-width="2" fill="none" stroke-linecap="round"
                         stroke-linejoin="round">
                        <path d="M5 12h14"></path>
                        <path d="M12 5l7 7-7 7"></path>
                    </svg>
                </a>
                <a v-if="this.searchResult.id.channelId !== null"
                   class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0"
                   :href="getVideosUrlChannel(this.searchResult.id.channelId)"> View channel videos
                    <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor"
                         stroke-width="2" fill="none" stroke-linecap="round"
                         stroke-linejoin="round">
                        <path d="M5 12h14"></path>
                        <path d="M12 5l7 7-7 7"></path>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: ['searchResult'],
    data() {
        return {
            statistics: {
                views: Number,
                likes: Number,
                comments: Number,
            }
        }
    },
    mounted() {
        this.getVideoDetails(this.searchResult.id.videoId);
    },
    watch: {
        searchResult: function (val, oldVal) {
            this.getVideoDetails(val.id.videoId);
        }
    },
    methods: {
        getUrl(videoId, channelId, playlistId) {
            if (videoId !== null) {
                return 'https://www.youtube.com/watch?v=' + videoId
            }
            if (channelId !== null) {
                return 'https://www.youtube.com/channel/' + channelId
            }
            return 'https://www.youtube.com/playlist?list=' + playlistId;
        },
        getVideosUrlChannel(channelId) {
            if (channelId === null) {
                return;
            }
            return location.origin + '/?type=video&order=date&maxResults=45&channelId=' + channelId;
        },
        getVideoDetails(videoId) {
            let url = location.pathname + 'videos/' + videoId;
            axios.get(url).then((response) => {
                if (response.data.length !== 0) {
                    this.statistics.views = response.data.viewCount;
                    this.statistics.likes = response.data.likeCount;
                    this.statistics.comments = response.data.commentCount;
                    // console.log(this.statistics);
                } else {
                    return "views not found";
                }
            }).catch(error => {
                console.log(error);
                this.errors = error.response.data.errors;
            });
        }
    }
}
</script>
