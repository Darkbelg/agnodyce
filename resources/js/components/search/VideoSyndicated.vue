<template>
    <div>
        <label for="search-videoSyndicated">Video Syndicated</label>
        <select id="search-videoSyndicated" name="search-videoSyndicated" v-model="optionDefault">
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
                {text: 'any', value: 'any'},
                {text: 'true', value: 'true'}
            ],
        };
    }
}
</script>
