<template>
    <div>
        <label for="search-location">Coordinates lat and long for example: 37.42307,-122.08427</label>
        <div class="flex border border-gray-200 rounded-full p-4 shadow text-xl">
            <input class="w-full outline-none px-3" v-model="inputVal" id="search-location" name="search-location" type="text">
        </div>
        <button @click="$emit('delete-row')">Delete</button>
    </div>
</template>
<script>
export default {
    props: ["value"],
    computed: {
        inputVal: {
            get() {
                return this.value;
            },
            set(val) {
                this.$emit('input', val);
            }
        }
    }
}</script>
<!--
<template>
    <div id="search-location">
        <GmapMap
            :center="center"
            :zoom="10"
            map-style-id="roadmap"
            :options="mapOptions"
            style="width: 100vmin; height: 50vmin"
            ref="mapRef"
            @click="handleMapClick"
        >
            <GmapMarker
                :position="marker.position"
                :clickable="true"
                :draggable="true"
                @drag="handleMarkerDrag"
                @click="panToMarker"
            />
        </GmapMap>
        <button @click="geolocate">Detect Location</button>

        <p>Selected Position: {{ marker.position }}</p>
    </div>
</template>
<script>
export default {

    data() {
        return {
            // apiKey: "AIzaSyDU1r1giBu3_hfGewXk6x78-NgLv1YLy9s",
            marker: {position: {lat: 10, lng: 10}},
            center: {lat: 10, lng: 10},

            mapOptions: {
                gestureHandling: "greedy",
                disableDefaultUI: true,
            },
        };
    },
    mounted() {
        this.geolocate();
    },
    methods: {
        //detects location from browser
        geolocate() {
            navigator.geolocation.getCurrentPosition((position) => {
                this.marker.position = {
                    lat: position.coords.latitude,
                    lng: position.coords.longitude,
                };

                this.panToMarker();
            });
        },

        //sets the position of marker when dragged
        handleMarkerDrag(e) {
            this.marker.position = {lat: e.latLng.lat(), lng: e.latLng.lng()};
        },

        //Moves the map view port to marker
        panToMarker() {
            this.$refs.mapRef.panTo(this.marker.position);
            this.$refs.mapRef.setZoom(8);
        },

        //Moves the marker to click position on the map
        handleMapClick(e) {
            console.log(this);
            this.marker.position = {lat: e.latLng.lat(), lng: e.latLng.lng()};
            console.log(e);
        },
    }
}
</script>
-->
