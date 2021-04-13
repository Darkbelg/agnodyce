<template>
    <div>
        <label for="search-eventType">Order</label>
        <select id="search-eventType" name="search-eventType" v-model="searchEventType">
            <option v-for="option in eventType" :value="option.value">
                {{ option.text }}
            </option>
        </select>

    </div>
</template>
<script>
export default {
    data() {
        return {
            searchEventType: 'live',
            eventType: [
                {text: 'Completed', value: 'completed'},
                {text: 'Live', value: 'live'},
                {text: 'Upcoming', value: 'upcoming'},
            ],
        };
    }
}
</script>
