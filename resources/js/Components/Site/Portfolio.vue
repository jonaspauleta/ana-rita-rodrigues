<template>
    <div class="section" style="background-image: url('2.jpg'); background-size: cover">
        <div class="container">
            <h1 style="font-family: Microsoft YaHei Light; font-size: 50px; text-align: center">
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
                        class="relative float-left -mr-[100%] w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
                    >
                        <img
                            :src="item.image.image_path"
                            class="block w-full h-full"
                        />

                        <div class="inset-x-[15%] bottom-5 hidden py-5 text-center text-black mb-10 md:block">
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
    </div>
</template>

<script setup>
import { register } from 'swiper/element/bundle';
register();

import {computed} from "vue";

const props =  defineProps({
    titles: Array,
    textfields: Array,
    images: Array,
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
