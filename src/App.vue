<template>
    <div>
        <h2>Senaste</h2>
        <GalleryFilter :activeFilter="activeFilter" />
        <Gallery :items="items" />
    </div>
</template>

<script>
import axios from 'axios';
import GalleryFilter from './components/GalleryFilter.vue';
import Gallery from './components/Gallery.vue';
    
export default {
    name: 'App',
    components: {
        GalleryFilter,
        Gallery
    },
    data() {
        return { 
            items: [],
            activeFilter: 'all'
        };
    },
    mounted () {
        axios.get('http://localhost/wordpress/wp-json/wp/v2/posts', {
            params: {
                _embed: 'true',
                type: 'post',
                limit: 9
            },
        }).then(response => {
            this.items = response.data
        });
    }
};
</script>

<style>

</style>