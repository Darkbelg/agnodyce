<template>
    <div>
        <label for="search-eventType">Event Type</label>
        <select id="search-eventType" name="search-eventType" v-model="inputVal">
            <option v-for="option in eventType" :value="option.value">
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
            default: "live"
        }
    },
    data() {
        return {
            eventType: [
                {text: 'Completed', value: 'completed'},
                {text: 'Live', value: 'live'},
                {text: 'Upcoming', value: 'upcoming'},
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
