<template>
    <div>
        <label for="search-channelId">Channel Id</label>
        <div class="flex border border-gray-200 rounded-full p-4 shadow text-xl">
            <input class="w-full outline-none px-3" id="search-channelId" name="search-channelId" v-model="inputVal" type="text">
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
