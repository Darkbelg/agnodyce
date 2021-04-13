<template>
    <div>
        <label for="search-videoCaption">Video Caption</label>
        <select id="search-videoCaption" name="search-videoCaption" v-model="optionDefault">
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
                {text: 'Closed Caption', value: 'closedCaption'},
                {text: 'None', value: 'none'},
            ],
        };
    }
}
</script>
