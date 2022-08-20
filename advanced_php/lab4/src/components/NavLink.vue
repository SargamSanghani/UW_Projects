<template>
  <li
    @click="$emit('scrollTo', $event)"
    :data-target="'#' + link.replace(' ', '_').toLowerCase()"
    class="is-inline p-4 is-clickable"
  >{{link}}</li>
</template>

<script>
export default {
  name: "NavLink",
  props: {
    link: String
  }
};
</script>