<template>
    <div>
        <label for="search-order">Order</label>
        <select id="search-order" name="search-order" v-model="inputVal">
            <option v-for="option in order" :value="option.value">
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
            default: "relevance"
        }
    },
    data() {
        return {
            order: [
                {text: 'Date', value: 'date'},
                {text: 'Rating', value: 'rating'},
                {text: 'Relevance', value: 'relevance'},
                {text: 'Title', value: 'title'},
                {text: 'View Count', value: 'viewCount'}
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
