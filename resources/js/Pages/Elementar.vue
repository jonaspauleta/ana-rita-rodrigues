<template>
    <full-page id="fullpage" ref="fullpage" :options="options">
        <Home :titles="props.titles"/>

        <Bio :titles="props.titles" :textfields="props.textfields" :images="props.images"/>

        <Arquitetura :titles="props.titles" :textfields="props.textfields"/>

        <DesignObra :titles="props.titles" :textfields="props.textfields"/>

        <Portfolio :titles="props.titles" :textfields="props.textfields" :images="props.images"/>

        <Contactos :titles="props.titles" :textfields="props.textfields"/>
    </full-page>
</template>

<script setup>
import { ref } from "vue"
import Portfolio from "@/Components/Site/Portfolio.vue"
import Contactos from "@/Components/Site/Contactos.vue";
import DesignObra from "@/Components/Site/DesignObra.vue";
import Arquitetura from "@/Components/Site/Arquitetura.vue";
import Bio from "@/Components/Site/Bio.vue";
import Home from "@/Components/Site/Home.vue";

const props = defineProps({
    titles: Array,
    textfields: Array,
    images: Array,
})

console.log(props.titles, props.textfields, props.images);

const options = ref({
    licenseKey: "YOUR_KEY_HERE",
    scrollOverflow: true,
    scrollBar: false,
    menu: "#menu",
    navigation: true,
    anchors: ["page1", "page2", "page3", "page4", "page5", "page6"],
})
</script>

<style>
.section {
    display: flex;
    justify-content: center;
    align-items: center;
}

.titulo {
    text-align: center;
    font-family: Microsoft YaHei Light;
}
.texto {
    font-size: 20px;
    font-family: Microsoft YaHei Light;
}

.carousel-control {
    text-shadow: none; /* Remove a sombra */
}

.item.active {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: center;
    height: 100%; /* Se desejar que ocupe a altura do contêiner pai */
}
</style>
