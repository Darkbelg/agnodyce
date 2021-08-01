<template>
    <div>
        <label for="search-safeSearch">Safe Search</label>
        <select id="search-safeSearch" name="search-safeSearch" v-model="inputVal">
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
            default: 'moderate'
        }
    },
    data() {
        return {
            options: [
                {text: 'Moderate', value: 'moderate'},
                {text: 'None', value: 'none'},
                {text: 'Strict', value: 'strict'},
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
