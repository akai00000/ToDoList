<template>
  <div>
    <div class="m-3">
      <div>税込価格：{{ totalValue }}</div>
    </div>
    <input
      type="text"
      class="p-1 border ring-1 rounded-md border-color-300"
      v-model="price"
    />
  </div>
</template>

<script>
import { ref, computed } from 'vue'
export default {
  setup() {
    const price = ref(100)
    const tax = ref(1.1)
    const totalValue = computed(() => {
      return Math.round(price.value * tax.value)
    })


    return {
      price,
      tax,
      totalValue
    }

  },

  mounted() {
    console.log('Component mounted.')
  }
};
</script>