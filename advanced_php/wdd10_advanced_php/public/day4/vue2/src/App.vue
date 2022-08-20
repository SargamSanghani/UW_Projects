<template>
<div v-show="error" class="w-full py-3 bg-red-200 text-red-600 text-center border-2 border-darkred">This is an error</div>
<!-- 
  v-if - show this element if something true
  v-show - show this element if something true
  v-text - inject value into element innerText node (escape)
  v-html - inject value into element innerHTML node (raw)
  v-for - loop array of values for output
  v-on - event handling... e.g v-on:click, v-on:key-up
-->
  <img class="mx-auto w-1/2 my-4" alt="Monster" :src="getImage('monster.jpg')" />
  <div>
  <button @click="error =  !error" class="bg-blue-600 text-white font-bold py-2 px-4 rounded-lg">Click Me</button>
  <ul>
    <li v-for="fruit in fruits" :key="fruit.id" v-html="fruit.name"></li>
  </ul>
  
  </div>
</template>

<script>

export default {
  name: 'App',
  methods: {
    viewUser(user) {
      this.user = user
    },
    getImage(img) {
      return '/images/' + img
    }
  },
  setup() {
    console.log('SETUP')
  },
  beforeCreate() {
    console.log('BEFORE CREATED')
  },
  created() {
    
  },
  beforeMount() {
    console.log('BEFORE MOUNT')
  },  
  mounted() {
    console.log('MOUNTED')
  },  
  data() {
    console.log('DATA')
    return {
      api_url: 'http://localhost:8001',
      error: false,
      users: [],
      user: false,
      fruits: [
        {
          id: 1,
          name: '<sub>apple</sub>'
        },
        {
          id: 2,
          name: '<strong>orange</strong>'
        },
        {
          id: 3,
          name: '<em>banana<em>'
        }
      ]
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
}

body {
  padding: 0;
  margin: 0;
}
</style>
