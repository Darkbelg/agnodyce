<template>
    <div>
        <!-- main -->
        <div class="flex justify-center pt-20">
            <div>
                <ul>
                    <li v-for="error in errors">
                        <ul>
                            <li v-for="message in error">
                                {{ message }}
                            </li>
                        </ul>
                    </li>
                </ul>
                <!--                <search-location></search-location>-->
                <div class="flex border border-gray-200 rounded-full p-4 shadow text-xl">
                    <div>🕵️‍</div>
                    <input type="text" name="search" v-model="search" class="w-full outline-none px-3">
                    <div>🎤</div>
                </div>
                <div>
                    <component v-for="(field,index) in fields" :is="field.type" :key="field.id"
                               @delete-row="deleteThisRow(index)"></component>
                </div>
                <div>
                    <select name="dynamicInput" id="dynamicInput" v-model="selected">
                        <option v-for="option in options" :value="option.value">
                            {{ option.text }}
                        </option>
                    </select>
                    <button
                        class="mr-3 bg-gray-200 border border-gray-300 py-3 px-4 rounded hover:bg-gray-400 hover:border-gray-500"
                        @click="addInputSelected">Add input
                    </button>
                </div>

                <div class="mt-8 text-center">
                    <button
                        class="mr-3 bg-gray-200 border border-gray-300 py-3 px-4 rounded hover:bg-gray-400 hover:border-gray-500"
                        @click="loadSearchResults">Search
                    </button>
                    <!--                <button class="bg-gray-200 border border-gray-300 py-3 px-4 rounded hover:bg-gray-400 hover:border-gray-500">I'm Feeling Lucky</button>-->
                </div>
            </div>
        </div>
        <search-results :searchResults="this.searchResults"></search-results>
    </div>
</template>
<script>
export default {
    data() {
        return {
            search: "",
            searchResults: [],
            rows: [],
            dynamicInputs: [],
            selected: 'order',
            errors: [],
            options: [
                {text: 'Order', value: 'order'},
                {text: 'Channel Id', value: 'channelId'},
                {text: 'Video Duration', value: 'videoDuration'},
                {text: 'Event Type', value: 'eventType'},
                {text: 'Location', value: 'location'},
                {text: 'Location Radius', value: 'locationRadius'},
                {text: 'Published After', value: 'publishedAfter'},
                {text: 'Published Before', value: 'publishedBefore'},
                {text: 'Region Code', value: 'regionCode'},
                {text: 'Relevance Language', value: 'relevanceLanguage'},
                {text: 'Safe Search', value: 'safeSearch'},
                {text: 'Topic Id', value: 'topicId'},
                {text: 'Video Caption', value: 'videoCaption'},
                {text: 'Video Category Id', value: 'videoCategoryId'},
                {text: 'Video Definition', value: 'videoDefinition'},
                {text: 'Video Dimension', value: 'videoDimension'},
                {text: 'Video Embeddable', value: 'videoEmbeddable'},
                {text: 'Video License', value: 'videoLicense'},
                {text: 'Video Syndicated', value: 'videoSyndicated'},
                {text: 'Video Type', value: 'videoType'},
            ],
            fields: [],
            count: 0,
        }
    },
    methods: {
        loadSearchResults() {
            let searchQuery = location.pathname + 'search?maxResults=9&q=' + this.search + '&type=video';
            this.options.forEach(function (item, index) {
                //console.log(document.getElementById('search-' + item.value));
                if (document.getElementById('search-' + item.value)) {
                    let e = document.getElementById('search-' + item.value);

                    if (e.type === "date") {
                        searchQuery += "&" + item.value + "=" + e.value + "T00:00:00Z";
                    } else {
                        searchQuery += "&" + item.value + "=" + e.value;
                    }

                }
            })

            axios.get(searchQuery).then(response => {
                this.searchResults = response.data.items;
            }).catch(error => {
                this.errors = error.response.data.errors;
            });
        },
        addInputSelected() {
            if (document.getElementById('search-' + this.selected) === null) {
                this.fields.push({
                    'type': 'search-' + this.selected,
                });
                console.log(this.fields);
            }
        },
        deleteThisRow: function (index) {
            this.fields.splice(index, 1);
        }
    }
};
</script>
