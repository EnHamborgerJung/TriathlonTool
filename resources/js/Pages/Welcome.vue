<template>
    <div>
        <h1 class="text-3xl font-bold underline text-amber-300">
            Hello world!
        </h1>
        <h1>{{ message }}</h1>
    </div>
</template>

<script>
export default {
    props: {
        message: String,
    },
}
</script>
