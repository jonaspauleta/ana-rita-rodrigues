<template>
    <div class="section" style="background-image: url('2.jpg'); background-size: cover">
        <h1 style="font-family: Microsoft YaHei Light; font-size: 50px; text-align: center; position: absolute; top: 0; left: 50%; transform: translateX(-50%)">
            {{ title }}
        </h1>

        <h2 class="titulo">
            {{ subtitle }}
        </h2>

        <div style="display: flex; align-items: center">
            <div style="width: 200px; margin-right: 75px">
                <h3 class="titulo">
                    {{ subtitle_1 }}
                </h3>

                <p class="texto">
                    {{ text_1 }}
                </p>
            </div>

            <div style="width: 225px; margin-left: 75px">
                <h3 class="titulo">
                    {{ subtitle_2 }}
                </h3>

                <p class="texto">
                    {{ text_2 }}
                </p>
            </div>
        </div>

        <div style="position: absolute; bottom: 0; right: 200px">
            <p class="texto" style="text-align: right">
                {{ name }}
            </p>

            <p class="texto" style="text-align: right; margin-top: -10px">
                {{ email }}
            </p>

            <p class="texto" style="text-align: right; margin-top: -10px">
                {{ phone }}
            </p>
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
    return props.titles.data.find((t) => t.key == "6TH_PAGE_TITLE").value
})

const subtitle = computed(() => {
    return props.titles.data.find((t) => t.key == "6TH_PAGE_SUBTITLE").value
})

const subtitle_1 = computed(() => {
    return props.titles.data.find((t) => t.key == "6TH_PAGE_SUBTITLE_1").value
})

const subtitle_2 = computed(() => {
    return props.titles.data.find((t) => t.key == "6TH_PAGE_SUBTITLE_2").value
})

const text_1 = computed(() => {
    return props.textfields.data.find((t) => t.key == "6TH_PAGE_TEXT_1").value
})

const text_2 = computed(() => {
    return props.textfields.data.find((t) => t.key == "6TH_PAGE_TEXT_2").value
})

const name = computed(() => {
    return props.textfields.data.find((t) => t.key == "6TH_PAGE_NAME").value
})

const email = computed(() => {
    return props.textfields.data.find((t) => t.key == "6TH_PAGE_EMAIL").value
})

const phone = computed(() => {
    return props.textfields.data.find((t) => t.key == "6TH_PAGE_PHONE").value
})
</script>
