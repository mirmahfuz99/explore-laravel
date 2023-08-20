<script setup>

import { ref, computed} from 'vue'
import store from "../store";

const test = computed( () => store.state.test)

defineProps({
  msg: {
    type: String,
    required: true
  }
})
</script>

<template>
    <h1 class="bg-purple-500">{{ msg }}</h1>

    {{ test }}
    
</template>
