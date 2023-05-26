<template>
    <div class="section">
        <h1 class="title">
            {{ title }}
        </h1>

        <h2 class="main-subtitle">
            {{ subtitle }}
        </h2>

        <div class="content">
            <div class="container">
                <h3 class="subtitle">
                    {{ subtitle_1 }}
                </h3>

                <p class="text">
                    {{ text_1 }}
                </p>
            </div>

            <div class="container">
                <h3 class="subtitle">
                    {{ subtitle_2 }}
                </h3>

                <p class="text">
                    {{ text_2 }}
                </p>
            </div>
        </div>

        <div class="bottom-container">
            <p class="text bottom-text">
                {{ name }}
            </p>

            <p class="text bottom-text">
                {{ email }}
            </p>

            <p class="text bottom-text">
                {{ phone }}
            </p>
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

<style scoped>
.section {
    display: flex;
    justify-content: center;
    align-items: center;
    background-image: url('/storage/2.jpg');
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

.main-subtitle {
    font-size: 20px;
    margin-left: -40px;
    text-align: center;
    font-weight: bold;
    font-family: Microsoft YaHei Light, serif;
}

.subtitle {
    text-align: center;
    font-family: Microsoft YaHei Light, serif;
}

.text {
    font-size: 20px;
    font-family: Microsoft YaHei Light, serif;
}

.content {
    display: flex;
    align-items: center;
    justify-content: center;

    @media(max-width: 1300px) {
        flex-direction: column;
        align-content: center;
        justify-items: center;
    }
}

.container {
    width: 250px;
    margin-right: 75px;

    @media(max-width: 1300px) {
        margin-top: 25px;
        margin-right: 0;
    }
}

.bottom-container {
    position: absolute; bottom: 0;
    right: 200px;
}

.bottom-text {
    text-align: right;
    margin-top: -10px;
}
</style>
