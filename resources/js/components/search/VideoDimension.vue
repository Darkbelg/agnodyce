<template>
    <div>
        <label for="search-videoDimension">Video Dimension</label>
        <select id="search-videoDimension" name="search-videoDimension" v-model="optionDefault">
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
                {text: '2d', value: '2d'},
                {text: '3d', value: '3d'},
                {text: 'any', value: 'any'},
            ],
        };
    }
}
</script>
