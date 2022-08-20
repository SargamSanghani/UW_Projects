<template>
  <div>
    <header>
      <h1>{{title}}</h1>
      <FunButton @hello="$emit('hello', $event)" str="Hello" />
      <FunButton @hello="$emit('hello', $event)" str="Goodbye" />
      <FunButton @hello="$emit('hello', $event)" str="Let's Go!" />
    </header>
  </div>
</template>

<script>
import FunButton from "./FunButton.vue";
export default {
  name: "HeaderBar",
  props: {
    title: String
  },
  components: {
    FunButton
  }
};
</script>

<style>
</style>