<template>
  <HeaderBar new_class="main" @hello="sayHello" title="My First Component" />
  <button @click="sayHello('New Button')">New Button</button>
</template>

<script>

import HeaderBar from './components/HeaderBar.vue'

export default {
  name: 'App',
  methods: {
    sayHello(str)
    {
      alert(str);
    }
  },
  components: {
    HeaderBar
  }
}

</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
