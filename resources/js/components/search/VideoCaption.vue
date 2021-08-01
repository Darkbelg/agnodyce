<template>
    <div>
        <label for="search-videoCaption">Video Caption</label>
        <select id="search-videoCaption" name="search-videoCaption" v-model="inputVal">
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
                {text: 'Closed Caption', value: 'closedCaption'},
                {text: 'None', value: 'none'},
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
