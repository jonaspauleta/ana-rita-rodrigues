<template>
    <div class="section">
        <h1 class="title">
            {{ title }}
        </h1>

        <div class="content">
            <div class="container">
                <h2 class="subtitle">
                    {{ subtitle_1 }}
                </h2>

                <p class="text">
                    {{ text_1 }}
                </p>
            </div>

            <div class="container-2">
                <h2 class="subtitle">
                    {{ subtitle_2 }}
                </h2>

                <p class="text">
                    {{ text_2 }}
                </p>
            </div>

            <div class="container-3">
                <h2 class="subtitle">
                    {{ subtitle_3 }}
                </h2>

                <p class="text">
                    {{ text_3 }}
                </p>
            </div>
        </div>
    </div>
</template>

<script setup>
import {computed} from "vue";

const props =  defineProps({
    titles: Object,
    textfields: Object,
})

const title = computed(() => {
    return props.titles.data.find((t) => t.key == "3RD_PAGE_TITLE").value
})

const subtitle_1 = computed(() => {
    return props.titles.data.find((t) => t.key == "3RD_PAGE_SUBTITLE_1").value
})

const subtitle_2 = computed(() => {
    return props.titles.data.find((t) => t.key == "3RD_PAGE_SUBTITLE_2").value
})

const subtitle_3 = computed(() => {
    return props.titles.data.find((t) => t.key == "3RD_PAGE_SUBTITLE_3").value
})

const text_1 = computed(() => {
    return props.textfields.data.find((t) => t.key == "3RD_PAGE_TEXT_1").value
})

const text_2 = computed(() => {
    return props.textfields.data.find((t) => t.key == "3RD_PAGE_TEXT_2").value
})

const text_3 = computed(() => {
    return props.textfields.data.find((t) => t.key == "3RD_PAGE_TEXT_3").value
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
    position: absolute;
    top: 0;
    left: 50%;
    transform: translateX(-50%);
}

.content {
    display: flex;
    align-content: center;

    @media(max-width: 1300px) {
        flex-direction: column;
        align-content: center;
        justify-items: center;
    }
}

.container {
    width: 300px;
    border: 1px solid black;
    padding: 10px;
}

.container-2 {
    width: 300px;
    border: 1px solid black;
    padding: 10px;
    margin-left: 150px;

    @media(max-width: 1300px) {
        margin-left: 0;
        margin-top: 10px;
    }
}

.container-3 {
    width: 300px;
    border: 1px solid black;
    padding: 10px;
    margin-left: 150px;

    @media(max-width: 1300px) {
        margin-left: 0;
        margin-top: 10px;
    }
}

.subtitle {
    text-align: center;
    font-family: Microsoft YaHei Light, serif;
}
.text {
    font-size: 20px;
    font-family: Microsoft YaHei Light, serif;
}
</style>
