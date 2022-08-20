<template>
  <div class="section is-large has-background-info-light box" :id="id">
    <h2 class="title">{{title}}</h2>
    <h3 class="subtitle">This is the {{title}} Content.</h3>
  </div>
</template>

<script>
export default {
  name: "AppSections",
  props: {
    title: String,
    id: String
  }
};
</script>