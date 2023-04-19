<template>
    <div class="section">
        <h1 class="title">
            {{ title }}
        </h1>

        <h2 class="subtitle">
            {{ subtitle }}
        </h2>
    </div>
</template>

<script setup>
import {computed} from "vue";

const props =  defineProps({
    titles: Object
})

const title = computed(() => {
    return props.titles.data.find((t) => t.key == "1ST_PAGE_TITLE").value
})

const subtitle = computed(() => {
    return props.titles.data.find((t) => t.key == "1ST_PAGE_SUBTITLE").value
})
</script>

<style scoped>
.section {
    display: flex;
    justify-content: center;
    align-items: center;
    position: relative;
    overflow: hidden;
    text-align: center;
    background-image: url('/storage/1.jpg');
    background-size: cover;
}

.subtitle {
    font-size: 35px;
    font-family: Microsoft YaHei Light, serif;
    text-align: center;
}

.title {
    font-size: 75px;
    font-family: Microsoft YaHei Light,serif;
}
</style>
