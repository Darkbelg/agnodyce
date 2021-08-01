<template>
    <div>
        <label for="search-videoEmbeddable">Video Embeddable</label>
        <select id="search-videoEmbeddable" name="search-videoEmbeddable" v-model="inputVal">
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
                {text: 'any', value: 'any'},
                {text: 'true', value: 'true'}
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
