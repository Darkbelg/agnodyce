<template>
    <div>
        <label for="search-locationRadius">Range in text: </label>
        <div class="flex border border-gray-200 rounded-full p-4 shadow text-xl">
            <input id="search-locationRadius" v-model="inputVal" class="w-full outline-none px-3" name="search-locationRadius" type="text" placeholder="5km">
        </div>
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
