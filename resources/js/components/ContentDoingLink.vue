<template>
  <ul v-for="list in lists">
      <a v-bind:href="`/edit/?id=${list.id}`"><li>{{ list.content }}</li></a>
  </ul>
</template>

<script>
const url = "/top"

export default {
props: ["lists"],
mounted() {
  console.log('testtest')                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     
},
};
</script>