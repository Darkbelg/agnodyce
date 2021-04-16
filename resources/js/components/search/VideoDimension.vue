<template>
    <div>
        <label for="search-videoDimension">Video Dimension</label>
        <select id="search-videoDimension" name="search-videoDimension" v-model="inputVal">
            <option v-for="option in options" :value="option.value">
                {{ option.text }}
            </option>
        </select>
        <button @click="$emit('delete-row')">Delete</button>
    </div>
</template>
<script>
export default {
    props: {
        value: {
            default: "any"
        }
    },
    data() {
        return {
            options: [
                {text: '2d', value: '2d'},
                {text: '3d', value: '3d'},
                {text: 'any', value: 'any'},
            ],
        };
    },
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
