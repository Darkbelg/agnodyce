<template>
    <div>
        <label for="search-videoDuration">Video Duration</label>
        <select id="search-videoDuration" name="search-videoDuration" v-model="inputVal">
            <option v-for="option in videoDuration" :value="option.value">
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
            videoDuration:[
                { text:'any',value:'any'},
                { text:'+20m',value:'long'},
                { text:'between 4m to 20m',value:'medium'},
                { text: '-4m', value: 'short'}
            ]
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
