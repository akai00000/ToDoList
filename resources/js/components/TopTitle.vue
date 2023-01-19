<template>
  <div class="card">
    <div class="card-header">ラベル一覧</div>
      <div class="card-body">

        <!-- 正しく表示される -->
        <ul v-for=" list in lists">
          <li>{{ list.title }}</li>
        </ul>

        <!-- 正しく表示されない -->
        <ul>
          <li v-for="title in data.titles">{{ title }}</li>
        </ul>

      </div>
  </div>
</template>

<script>
import axios from 'axios';
import { reactive, onMounted } from 'vue';

const url = "/toptitle"

export default {

  // v-bindを使ってDBのlistテーブルにあるtitleカラムを取得・表示する。
  // v-bindでデータを取得することができた。
  props: ["lists"],
  mounted() {
    console.log(this.lists)
  },

  // axiosを使ってDBのlistテーブルにあるtitleカラムを取得する。
  setup(props) {
    const data = reactive({
      titles: '',
      message: 'good',
    })
    const getData = async() => {
      let result = await axios.get(url)
      data.titles = result.data
    }
    // 画面にコンポーネントが表示されたときに走るイベントフック。
    onMounted(() => {
      getData()
    }) 
    // axiosで取得してきたtitlesをdataに設定する。getDataメソッドがその役割。
    return { data, getData }
  },
};
</script>