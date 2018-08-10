<template>
    <div class="gallery-item">
        <a :href="item.link">
            <div class="gallery-overlay">
                <h3>{{ item.title.rendered }}</h3>
            </div>
            <img :src="thumbnailUrl" :alt="altText" />
        </a>
    </div>
</template>

<script>
export default {
    name: 'GalleryItem',
    props: ['item'],
    computed: {
        thumbnailUrl() {
            return this.item._embedded["wp:featuredmedia"][0].source_url
        },
        altText() {
            return this.item._embedded["wp:featuredmedia"][0].alt_text
        }
    },
};
</script>