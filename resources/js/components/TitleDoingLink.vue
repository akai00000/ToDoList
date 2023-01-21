<template>
        <ul v-for="listdoing in lists_doing">
            <a v-bind:href="`/edit/?id=${listdoing.id}`"><li>{{ listdoing.title }}</li></a>
        </ul>
</template>

<script>
const url = "/top"

export default {
  props: ["lists_doing"],
  mounted() {
    
  },
};
</script>