<template>
    <div>
        <label for="search-videoLicense">Video License</label>
        <select id="search-videoLicense" name="search-videoLicense" v-model="inputVal">
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
                {text: 'any', value: 'any'},
                {text: 'CreativeCommon', value: 'creativeCommon'},
                {text: 'Youtube', value: 'youtube'},
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
