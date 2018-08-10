<template>
    <nav class="featured-filter">
        <ul>
        <GalleryFilterItem
        
        >   
        </GalleryFilterItem>
        </ul>
    </nav>
</template>

<script>
import GalleryFilterItem from './GalleryFilterItem.vue';

export default {
    name: 'GalleryFilter',
    components: {
        GalleryFilterItem
    }
};
</script>

<style>

</style>