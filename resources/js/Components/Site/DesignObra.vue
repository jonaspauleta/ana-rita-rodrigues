<template>
    <div class="section" style="background-image: url('2.jpg'); background-size: cover">
        <h1 style="font-family: Microsoft YaHei Light; font-size: 50px; text-align: center; position: absolute; top: 0; left: 50%; transform: translateX(-50%)">
            {{ title }}
        </h1>

        <div style="display: flex; align-content: center">
            <div style="width: 300px; border: 1px solid black; padding: 10px">
                <h2 class="titulo">
                    {{ subtitle_1 }}
                </h2>

                <p class="texto">
                    {{ text_1 }}
                </p>
            </div>

            <div style="width: 300px; margin-left: 150px; border: 1px solid black; padding: 10px">
                <h2 class="titulo">
                    {{ subtitle_2 }}
                </h2>

                <p class="texto">
                    {{ text_2 }}
                </p>
            </div>
        </div>
    </div>
</template>

<script setup>
import {computed} from "vue";

const props =  defineProps({
    titles: Array,
    textfields: Array,
})

const title = computed(() => {
    return props.titles.data.find((t) => t.key == "4TH_PAGE_TITLE").value
})

const subtitle_1 = computed(() => {
    return props.titles.data.find((t) => t.key == "4TH_PAGE_SUBTITLE_1").value
})

const subtitle_2 = computed(() => {
    return props.titles.data.find((t) => t.key == "4TH_PAGE_SUBTITLE_2").value
})

const text_1 = computed(() => {
    return props.textfields.data.find((t) => t.key == "4TH_PAGE_TEXT_1").value
})

const text_2 = computed(() => {
    return props.textfields.data.find((t) => t.key == "4TH_PAGE_TEXT_2").value
})
</script>
