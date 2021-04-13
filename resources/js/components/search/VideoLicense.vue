<template>
    <div>
        <label for="search-videoLicense">Video License</label>
        <select id="search-videoLicense" name="search-videoLicense" v-model="optionDefault">
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
                {text: 'CreativeCommon', value: 'creativeCommon'},
                {text: 'Youtube', value: 'youtube'},
            ],
        };
    }
}
</script>
