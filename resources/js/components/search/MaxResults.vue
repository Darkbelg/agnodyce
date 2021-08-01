<template>
    <div>
        <label for="search-maxResults">Maximum results to display on a page.</label>
        <input name="search-maxResults" v-model="inputVal" id="search-maxResults" type="number" min="9" max="48">
        <button @click="$emit('delete-row')"><icon-base icon-name="close"><icon-close /></icon-base></button>
    </div>
</template>
<script>
export default {
    props:["value"],
    computed: {
        inputVal: {
            get() {
                return this.value;
            },
            set(val) {
                this.$emit('input', val);
            }
        }
    }
}
</script>
