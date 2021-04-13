<template>
    <div>
        <label for="search-videoType">Video Type</label>
        <select id="search-videoType" name="search-videoType" v-model="optionDefault">
            <option v-for="option in options" :value="option.value">
                {{ option.text }}
            </option>
        </select>

    </div>
</template>
<script>
export default {
    data() {
        return {
            optionDefault: 'any',
            options: [
                {text: 'Any', value: 'any'},
                {text: 'Episode', value: 'episode'},
                {text: 'Movie', value: 'movie'},
            ],
        };
    }
}
</script>
