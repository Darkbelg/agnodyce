<template>
    <div>
        <label for="search-publishedBefore">Published Before</label>
        <input name="search-publishedBefore" v-model="inputVal" id="search-publishedBefore" type="date">
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
