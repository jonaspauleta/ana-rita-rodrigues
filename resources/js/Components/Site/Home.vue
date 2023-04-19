<template>
    <div class="section" style="position: relative; overflow: hidden; text-align: center; background-image: url('1.jpg'); background-size: cover">
        <h1 style="font-size: 75px; font-family: Microsoft YaHei Light">
            {{ title }}
        </h1>

        <h2 style="font-size: 35px; font-family: Microsoft YaHei Light; text-align: center">
            {{ subtitle }}
        </h2>

        <!--<h3 style="position: absolute; bottom: 0; left: 0; width: 100%; font-family: Microsoft YaHei Light">
            Portefólio | Contactos
        </h3>-->
    </div>
</template>

<script setup>
import {computed} from "vue";

const props =  defineProps({
    titles: Array
})

const title = computed(() => {
    return props.titles.data.find((t) => t.key == "1ST_PAGE_TITLE").value
})

const subtitle = computed(() => {
    return props.titles.data.find((t) => t.key == "1ST_PAGE_SUBTITLE").value
})
</script>
