<template>
    <div>
        <label for="search-videoEmbeddable">Video Embeddable</label>
        <select id="search-videoEmbeddable" name="search-videoEmbeddable" v-model="optionDefault">
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
