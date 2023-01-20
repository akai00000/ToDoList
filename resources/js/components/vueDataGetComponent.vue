<template>
  <div>
    <div class="m-3">
      <div>税込価格：{{ totalValue }}</div>
    </div>
    <input type="text"
      class="p-1 border ring-1 rounded-md border-color-300"
      v-model="price"
    />
  </div>
</template>

<script>
export default {
  data() {
    return {
      price: '100',
      tax: '1.1',
      totalValue: '',
    }
  },

  watch: {
    price (new_data, old_data) {
        // priceの値が変わるとここの処理が走る
        // ここで税込価格の処理をする
        // new_dataは新しく入力された値
        // old_dataは古い値
        this.totalValue = Math.round(old_data * this.tax)
        this.totalValue = Math.round(new_data * this.tax)
    }
  },
};
</script>