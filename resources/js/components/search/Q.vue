<template>
    <div class="flex border border-gray-200 rounded-full p-4 shadow text-xl">
        <div>🕵️‍</div>
        <input type="text" name="search" v-model="inputVal" class="w-full outline-none px-3">
        <div>🎤</div>
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
