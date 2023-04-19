<template>
    <div class="section">
        <h1 class="title">
            {{ title }}
        </h1>

        <swiper-container
            slides-per-view="1"
            pagination="true"
            speed="1000"
            loop="true"
        >
            <swiper-slide
                v-for="(item, index) in slider"
                :key="index"
            >
                <div
                    class="image"
                >
                    <img
                        :src="item.image.image_path"
                        class=""
                    />

                    <div class="">
                        <h5 class="text-xl">
                            {{ item.title.value }}
                        </h5>

                        <p>
                            {{ item.text.value }}
                        </p>
                    </div>
                </div>
            </swiper-slide>
        </swiper-container>
    </div>
</template>

<script setup>
import { register } from 'swiper/element/bundle';
register();

import {computed} from "vue";

const props =  defineProps({
    titles: Object,
    textfields: Object,
    images: Object,
})

const title = computed(() => {
    return props.titles.data.find((t) => t.key == "5TH_PAGE_TITLE").value
})

const slider = computed(() => {
    const titles = props.titles.data.filter((t) => t.key.startsWith("5TH_PAGE_SUBTITLE"))
    const texts = props.textfields.data.filter((t) => t.key.startsWith("5TH_PAGE_DESCRIPTION"))
    const images = props.images.data.filter((t) => t.key.startsWith("5TH_PAGE_IMAGE"))

    let aux = [];
    for (let i = 0; i < titles.length; i++) {
        aux.push({
            title: titles[i],
            text: texts[i],
            image: images[i],
        });
    }

    return aux;
})
</script>

<style scoped>
.section {
    display: flex;
    justify-content: center;
    align-items: center;
    background-image: url('2.jpg');
    background-size: cover;
}

.title {
    font-family: Microsoft YaHei Light, serif;
    font-size: 50px;
    text-align: center;
}

.image {
    display: flex;
    align-items: center;
    justify-items: center;
    justify-content: center;
    flex-direction: column;
    max-width: 80%;
}
</style>
