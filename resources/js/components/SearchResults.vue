<template>
    <section class="text-gray-700 body-font">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-wrap -m-4" >
                <div class="p-4 md:w-1/3" v-for="searchResult in searchResults">
                    <video-detail :searchResult="searchResult"></video-detail>
                </div>
            </div>
            <div v-if="searchResults === 0">
                <p>No Results Found please refine the search.</p>
            </div>
        </div>
    </section>
</template>
<script>
export default {
    props: ['searchResults']
};
</script>
