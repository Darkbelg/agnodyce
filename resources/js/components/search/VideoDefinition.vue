<template>
    <div>
        <label for="search-videoDefinition">Video Definition</label>
        <select id="search-videoDefinition" name="search-videoDefinition" v-model="optionDefault">
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
                {text: 'Only HD Videos', value: 'high'},
                {text: 'Only Videos in Standard', value: 'standard'},
            ],
        };
    }
}
</script>
