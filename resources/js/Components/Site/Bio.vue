<template>
    <div class="section" style="display: flex; align-items: flex-start; background-image: url('2.jpg'); background-size: cover">
        <h1 style="font-size: 50px; font-family: Microsoft YaHei Light; margin-left: 100px; position: absolute; top: 0; left: 14%; transform: translateX(-50%)">
            {{ title }}
        </h1>

        <div style="display: flex; margin-left: 100px">
            <img :src="image" style="width: 375px; height: 450px; margin-right: 100px" />

            <div style="width: 400px; margin-left: 150px">
                <p class="texto">
                    {{ bio }}
                </p>
            </div>
        </div>
    </div>
</template>

<script setup lang="ts">
import {computed} from "vue";

const props =  defineProps({
    titles: Array,
    textfields: Array,
    images: Array,
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
