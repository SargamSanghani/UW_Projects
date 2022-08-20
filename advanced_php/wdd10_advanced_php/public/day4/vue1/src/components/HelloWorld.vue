<template>
  <div class="hello">
    <h1>{{ msg }}</h1>
    <h2>{{ title }}</h2>

    <button @click="count++">{{ count }}</button>
    
    <goodbye-world msg="Goodbye World!" />

  </div>
</template>

<script>
import GoodbyeWorld from './GoodbyeWorld.vue'

export default {
  name: 'HelloWorld',
  props: {
    msg: String,
    title: String
  },
  data() {
    return {
      count: 0
    }
  },
  methods: {
    //  incrementCount() {
    //    this.count++;
    //  }
  },
  components: {
    GoodbyeWorld
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
h3 {
  margin: 40px 0 0;
}
ul {
  list-style-type: none;
  padding: 0;
}
li {
  display: inline-block;
  margin: 0 10px;
}
a {
  color: #42b983;
}
button {
  padding: 10px 25px;
  font-weight: bold;
}
</style>
