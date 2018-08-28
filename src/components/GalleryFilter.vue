<template>
    <nav class="featured-filter">
        <ul>
            <li :class="{active:activeFilter === 'all'}" @click="changeFilter('all')">
                <a>Alla</a>
            </li>
            <li :class="{active:activeFilter === 'anette'}" @click="changeFilter('anette')">
                <a>Anette</a>
            </li>
            <li :class="{active:activeFilter === 'carina'}" @click="changeFilter('carina')">
                <a>Carina</a>
            </li>
        </ul>
    </nav>
</template>

<script>
export default {
    name: 'GalleryFilter',
    props: ['activeFilter'],
    methods: {
        changeFilter(tag) {
            this.$emit('changeActiveFilter', tag);
        }
    }
};
</script>

<style>

</style>