<template>
    <div>
      {{user}}
      <!-- {{title}}
      {{rabel}}
      {{list_content}} -->
    </div>
  </template>
  
  <script>
  export default {
      data() {
          return {
              user: [],
            //   title: [],
            //   rabel: [],
            //   content: [],
          }
      },
      mounted() {   
      axios.get("/top2").then((response) => (this.user = response.data)).catch(error => console.log(error));
      },
  }
  </script>