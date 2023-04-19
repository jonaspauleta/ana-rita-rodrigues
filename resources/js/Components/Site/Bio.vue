<template>
    <div class="section">
        <h1 class="title">
            {{ title }}
        </h1>

        <div class="content">
            <img :src="image" class="image"/>

            <p class="text">
                {{ bio }}
            </p>
        </div>
    </div>
</template>

<script setup lang="ts">
import {computed} from "vue";

const props =  defineProps({
    titles: Object,
    textfields: Object,
    images: Object,
})

const title = computed(() => {
    return props.titles.data.find((t) => t.key == "2ND_PAGE_TITLE").value
})

const bio = computed(() => {
    return props.textfields.data.find((t) => t.key == "2ND_PAGE_BIO").value
})

const image = computed(() => {
    return props.images.data.find((t) => t.key == "2ND_PAGE_IMAGE").image_path
})
</script>

<style scoped>
.section {
    display: flex;
    justify-content: center;
    align-items: flex-start;
    background-image: url('2.jpg');
    background-size: cover;

    @media(max-width: 1200px) {
        align-items: center;
    }
}

.content {
    display: flex;
    margin-left: 100px;

    @media(max-width: 1200px) {
        flex-direction: column;
        align-content: center;
        justify-items: center;
    }
}

.image {
    width: 375px;
    height: 450px;
    margin-right: 100px;
}

.text {
    width: 400px;
    font-size: 20px;
    font-family: Microsoft YaHei Light, serif;

    @media(min-width: 1200px) {
        margin-left: 150px;
    }

    @media(max-width: 1200px) {
        margin-top: 20px;
    }
}

.title {
    font-size: 2.75rem;
    font-family: Microsoft YaHei Light, serif;
    align-items: start;
    position: absolute;
    top: 1rem;
    left: 15%;
}
</style>
