<template>
    <div>
        <label for="search-regionCode">Region Code</label>
        <div class="flex border border-gray-200 rounded-full p-4 shadow text-xl">
            <input class="w-full outline-none px-3" v-model="inputVal" id="search-regionCode" name="search-regionCode"
                   type="text">
        </div>
        <button @click="$emit('delete-row')"><icon-base icon-name="close"><icon-close /></icon-base></button>
    </div>
</template>
<script>
export default {
    props: ["value"],
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
