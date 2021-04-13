<template>
    <div>
        <label for="search-order">Order</label>
        <select id="search-order" name="search-order" v-model="searchOrder">
            <option v-for="option in order" :value="option.value">
                {{ option.text }}
            </option>
        </select>
        <button @click="$emit('delete-row')">Delete</button>
    </div>
</template>
<script>
export default {
    data() {
        return {
            searchOrder: 'relevance',
            order: [
                {text: 'Date', value: 'date'},
                {text: 'Rating', value: 'rating'},
                {text: 'Relevance', value: 'relevance'},
                {text: 'Title', value: 'title'},
                {text: 'View Count', value: 'viewCount'}
            ],
        };
    }
}
</script>
