<template>
<div class="text-left w-1/3 mx-auto">

  <h1 class="mb-4 text-3xl">Registration Form</h1>

  <p>{{ user.name }} {{ user.email }} {{ user.phone }}</p>

  <form>
    <p><label class="block font-bold">Name</label> <input class="w-full my-2 inline-block border border-slate-400" v-model="user.name" type="text"></p>
    <p><label class="block font-bold">Email</label> <input class="w-full my-2 inline-block border border-slate-400" v-model="user.email" type="text"></p>
    <p><label class="block font-bold">Phone</label> <input class="w-full my-2 inline-block border border-slate-400" v-model="user.phone" type="text"></p>
    <p class="text-left"><button class="my-2 bg-blue-600 text-white py-2 px-4 rounded-lg" @click.prevent="showData">Submit</button></p>
  </form>

  </div>

</template>

<script>

export default {
  name: 'App',
  data() {
    return {
      user: {
        name: '',
        email: '',
        phone: ''
      }
    }
  },
  methods: {
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

input[type=text] {
  padding: 4px;
}
</style>
