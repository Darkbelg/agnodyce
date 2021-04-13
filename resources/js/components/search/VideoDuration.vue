<template>
    <div>
        <label for="search-videoDuration">Video Duration</label>
        <select id="search-videoDuration" name="search-videoDuration">
            <option v-for="option in videoDuration" :value="option.value">
                {{ option.text }}
            </option>
        </select>
    </div>
</template>
<script>
export default {
    data() {
        return {
            videoDuration:[
                { text:'any',value:'any'},
                { text:'+20m',value:'long'},
                { text:'between 4m to 20m',value:'medium'},
                { text: '-4m', value: 'short'}
            ]
        };
    }
}
</script>
