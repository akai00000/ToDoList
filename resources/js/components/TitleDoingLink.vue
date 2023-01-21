<template>
        <ul v-for="title in lists_doing">
            <a v-bind:href="`/edit/?id=${title.id}`"><li>{{ title.title }}</li></a>
        </ul>
        <ul v-for="list in lists">
            <li>{{ list.content }}</li>
        </ul>
</template>

<script>
const url = "/top"

export default {
  props: ["lists_doing"],
  mounted() {
    console.log('listdoing');
  },

  data() {
    return {
      lists: "",
    };
  },

  created() {
    this.DblistsGet();
  },

  methods: {
    async DblistsGet() {
      const res = await axios.get("/top");
      this.lists = res.data;
      console.log(this.lists);
    }
  },
};
</script>