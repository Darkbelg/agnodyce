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
                <search-q v-model="search"></search-q>
                <div>
                    <component v-for="(field,index) in fields" :is="field.type" :key="field.id" v-model="field.value"
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
                {text: 'Maximum Results', value: 'maxResults'},
                {text: 'Channel Id', value: 'channelId'},
                {text: 'Location', value: 'location'},
                {text: 'Location Radius', value: 'locationRadius'},
                {text: 'Published After', value: 'publishedAfter'},
                {text: 'Published Before', value: 'publishedBefore'},
                {text: 'Region Code', value: 'regionCode'},
                {text: 'Relevance Language', value: 'relevanceLanguage'},
                {text: 'Safe Search', value: 'safeSearch'},
                {text: 'Topic Id', value: 'topicId'}
            ],
            fields: [],
            count: 0,
        }
    },
    mounted() {
        if (window.location.search !== "") {
            this.searchApi(location.origin + '/search' + window.location.search);

            const urlParams = new URLSearchParams(window.location.search);

            urlParams.forEach(function (value, key) {
                if (key === 'type') {
                    return;
                }
                if (key === 'q') {
                    this.search = value;
                    return;
                }
                this.fields.push({
                    'type': 'search-' + key,
                    'value': value
                });
            }, this);
        }
    },
    methods: {
        loadSearchResults() {
            let searchQuery = 'q=' + encodeURI(this.search) + '&type=playlist';
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
            });
            if (!document.getElementById('search-maxResults')) {
                searchQuery += "&maxResults=45"
            }
            this.updateUrl(location.pathname + '?' + searchQuery);

            this.searchApi(location.origin + '/search?' + searchQuery);

        },
        searchApi(searchUrl) {
            axios.get(searchUrl).then(response => {
                if (response.data.items.length !== 0) {
                    this.searchResults = response.data.items;
                } else {
                    this.searchResults = 0;
                }
            }).catch(error => {
                this.errors = error.response.data.errors;
            });
        },
        addInputSelected() {
            if (document.getElementById('search-' + this.selected) === null) {
                this.fields.push({
                    'type': 'search-' + this.selected,
                });
            }
        },
        deleteThisRow: function (index) {
            this.fields.splice(index, 1);
        },
        updateUrl(url) {
            history.pushState(null, null, url);
        },
    }
};
</script>
