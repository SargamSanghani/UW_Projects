<template>
  <button @click="$emit('hello', str)">{{str}}</button>
</template>

<script>
export default {
  name: "FunButton",
  props: {
    str: String
  }
};
</script>

<style>
</style>