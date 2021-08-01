require('./bootstrap');

window.Vue = require('vue');

Vue.component('search-video', require('./components/VideoSearch.vue').default);
Vue.component('dynamic-search-fields', require('./components/DynamicSearchFields.vue').default);
// Search Input
Vue.component('search-order',require('./components/search/Order.vue').default);
Vue.component('search-q',require('./components/search/Q.vue').default);
Vue.component('search-channelId',require('./components/search/ChannelId.vue').default);
Vue.component('search-videoDuration',require('./components/search/VideoDuration.vue').default);
Vue.component('search-eventType',require('./components/search/EventType.vue').default);
Vue.component('search-location',require('./components/search/Location.vue').default);
Vue.component('search-maxResults',require('./components/search/MaxResults.vue').default);
Vue.component('search-locationRadius',require('./components/search/LocationRadius.vue').default);
Vue.component('search-publishedAfter', require('./components/search/PublishedAfter.vue').default);
Vue.component('search-publishedBefore', require('./components/search/PublishedBefore.vue').default);
Vue.component('search-regionCode', require('./components/search/RegionCode.vue').default);
Vue.component('search-relevanceLanguage', require('./components/search/RelevanceLanguage.vue').default);
Vue.component('search-safeSearch', require('./components/search/SafeSearch.vue').default);
Vue.component('search-topicId', require('./components/search/TopicId.vue').default);
Vue.component('search-videoCaption', require('./components/search/VideoCaption.vue').default);
Vue.component('search-videoCategoryId', require('./components/search/VideoCategoryId.vue').default);
Vue.component('search-videoDefinition', require('./components/search/VideoDefinition.vue').default);
Vue.component('search-videoDimension', require('./components/search/VideoDimension.vue').default);
Vue.component('search-videoDuration', require('./components/search/VideoDuration.vue').default);
Vue.component('search-videoEmbeddable', require('./components/search/VideoEmbeddable.vue').default);
Vue.component('search-videoLicense', require('./components/search/VideoLicense.vue').default);
Vue.component('search-videoSyndicated', require('./components/search/VideoSyndicated.vue').default);
Vue.component('search-videoType', require('./components/search/VideoType.vue').default);

Vue.component('search-channel', require('./components/ChannelSearch.vue').default);

Vue.component('search-playlist', require('./components/PlaylistSearch.vue').default);

Vue.component('search-results', require('./components/SearchResults.vue').default);

//Icons
Vue.component('icon-base', require('./components/icons/IconBase.vue').default);
Vue.component('icon-close', require('./components/icons/Close.vue').default);

const app = new Vue({
    el: '#app'
});
