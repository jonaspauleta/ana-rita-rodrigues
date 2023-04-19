<template>
    <full-page :options="options">
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
    titles: Object,
    textfields: Object,
    images: Object,
})

const options = ref({
    licenseKey: "YOUR_KEY_HERE",
    scrollOverflow: true,
    scrollBar: false,
    menu: "#menu",
    navigation: true,
    anchors: ["page1", "page2", "page3", "page4", "page5", "page6"],
})
</script>
