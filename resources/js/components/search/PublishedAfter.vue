<template>
    <div>
        <label for="search-publishedAfter">Published After</label>
        <input name="search-publishedAfter" id="search-publishedAfter" v-model="inputVal" type="date">
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
