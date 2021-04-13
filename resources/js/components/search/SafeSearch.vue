<template>
    <div>
        <label for="search-safeSearch">Order</label>
        <select id="search-safeSearch" name="search-safeSearch" v-model="optionDefault">
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
            optionDefault: 'moderate',
            options: [
                {text: 'Moderate', value: 'moderate'},
                {text: 'None', value: 'none'},
                {text: 'Strict', value: 'strict'},
            ],
        };
    }
}
</script>
