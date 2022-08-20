<template>
<div>
  <transition>
  <div @click="success_message=''" v-if="success_message.length" class="flash success" v-text="success_message"></div>
  </transition>
  <div>   
    <button @click="show = !show">Toggle</button>
    <Transition>
      <h1 v-if="show">Can you see me?</h1>
    </Transition>

    <button @click="show2 = !show2">Toggle</button>
    <Transition name="slide-fade">
      <h2 v-if="show2">hello</h2>
  </Transition>
  </div>
  <div>   
    <button @click="success_message='Record successfully added'">Show Success Message</button>
  </div>
  <BookList>
    <MultiSlot>
      <template #title><h2>{{ book.title }}</h2></template>
      <template #author><p>{{ book.author }}</p></template>
    </MultiSlot>
  </BookList>
  
</div>

</template>


<script>
import BookList from './components/BookList.vue'
import MultiSlot from './components/MultiSlot.vue'
export default {
  name: 'App',
  components: {
    BookList,
    MultiSlot
  },
  data() {
    return {
      book: {
        title: 'Dune',
        author: 'Frank Herbert'
      },
      show: true,
      show2: true,
      success_message: ''
    }
  }
}

</script>

<style>
body {
  padding: 0;
  margin: 0;
}

#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
}

/* we will explain what these classes do next! */
.v-enter-active,
.v-leave-active {
    transition: opacity 0.5s ease;
}

.v-enter-from,
.v-leave-to {
    opacity: 0;
}




/*
  Enter and leave animations can use different
  durations and timing functions.
*/
.slide-fade-enter-active {
  transition: all 0.3s ease-out;
}

.slide-fade-leave-active {
  transition: all 0.8s cubic-bezier(1, 0.5, 0.8, 1);
}

.slide-fade-enter-from,
.slide-fade-leave-to {
  transform: translateX(20px);
  opacity: 0;
}

.flash {
  width: 100%;
  line-height: 50px;
  font-weight: bold;
  margin-bottom: 50px;
}

.flash.success {
  background-color: lightgreen;
  color: darkgreen;
}

</style>
