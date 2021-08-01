<template>
    <div>
        <label for="search-videoDefinition">Video Definition</label>
        <select id="search-videoDefinition" name="search-videoDefinition" v-model="inputVal">
            <option v-for="option in options" :value="option.value">
                {{ option.text }}
            </option>
        </select>
        <button @click="$emit('delete-row')"><icon-base icon-name="close"><icon-close /></icon-base></button>
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
                {text: 'Any', value: 'any'},
                {text: 'Only HD Videos', value: 'high'},
                {text: 'Only Videos in Standard', value: 'standard'},
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
