<template>
    <div>
        <h2>Senaste</h2>
        <GalleryFilter :activeFilter="activeFilter" @changeActiveFilter="onChangeActiveFilter" />
        <Gallery :items="items" />
    </div>
</template>

<script>
import axios from 'axios';
import GalleryFilter from './components/GalleryFilter.vue';
import Gallery from './components/Gallery.vue';
    
const ROOT_URL = `${wpglobals.restURL}wp/v2`;
    
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
    methods: {
        onChangeActiveFilter(newActiveFilter) {
            this.activeFilter = newActiveFilter;
            if(this.activeFilter === 'anette') {
                axios.get(`${ROOT_URL}/posts`, {
                    params: {
                        _embed: 'true',
                        type: 'post',
                        limit: 9,
                        author: 2
                    },
                }).then(response => {
                    this.items = response.data
                });
            } else if(this.activeFilter === 'carina') {
                axios.get(`${ROOT_URL}/posts`, {
                    params: {
                        _embed: 'true',
                        type: 'post',
                        limit: 9,
                        author: 3
                    },
                }).then(response => {
                    this.items = response.data
                }); 
            } else{
                axios.get(`${ROOT_URL}/posts`, {
                    params: {
                        _embed: 'true',
                        type: 'post',
                        limit: 9
                    },
                }).then(response => {
                    this.items = response.data
                });
            }
        }
    },
    computed: {
        
    },
    mounted () {
        axios.get(`${ROOT_URL}/posts`, {
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