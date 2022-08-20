<template>
  <div>
    <div v-if="error" class="error">
      <span>I am an error</span>
    </div>
    <img alt="Vue logo" src="./assets/logo.png">
    <h1>{{ title }}</h1>
    <ul class="fruit">
      <li :key="fruit" v-for="fruit in fruits">{{ fruit }}</li>
    </ul>
    <button v-on:click="toggleError">Toggle Error</button>
  </div>
</template>

<script>


export default {
  name: 'App',
  data() {
    return {
      title: 'My First Vue Application',
      fruits: ['apple', 'orange', 'banana'],
      error: true
    }
  },
  methods: {
    toggleError() {
      if(!this.error) {
        this.error = true;
      } else {
        this.error = false;
      }
    }
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

ul.fruit li {
  list-style-type: none;
}

.error {
  line-height: 50px;
  font-weight: bold;
  background: lightpink;
  color: darkred;
  border: 1px solid darkred;
}
</style>
