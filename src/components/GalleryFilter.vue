<template>
    <nav class="featured-filter">
        <ul>
            <li :class="{active:activeFilter === 'all'}" @click="filter('all')">
                <a>Alla</a>
            </li>
            <li :class="{active:activeFilter === 'anette'}" @click="filter('anette')">
                <a>Anette</a>
            </li>
            <li :class="{active:activeFilter === 'carina'}" @click="filter('carina')">
                <a>Carina</a>
            </li>
        </ul>
    </nav>
</template>

<script>
export default {
    name: 'GalleryFilter',
    props: ['activeFilter'],
    computed: {
        filteredItems() {
            let filter = this.activeFilter;
        }
    },
    methods: {
        filter(tag) {
            this.activeFilter = tag;
        }
    }
};
</script>

<style>

</style>