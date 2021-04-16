<template>
    <div>
        <label for="search-topicId">Topic Id</label>
        <div class="flex border border-gray-200 rounded-full p-4 shadow text-xl">
            <input class="w-full outline-none px-3" id="search-topicId" v-model="inputVal" name="search-topicId" type="text">
        </div>
        <button @click="$emit('delete-row')">Delete</button>
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
