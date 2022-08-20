<template>
  <nav
    class="has-background-info-dark has-text-white has-text-centered is-clearfix navbar is-fixed-top"
  >
    <ul class="py-4 is-pulled-left">
      <NavLink @scrollTo="$emit('scrollTo', $event)" link="Home" />
      <NavLink @scrollTo="$emit('scrollTo', $event)" link="Blog" />
      <NavLink @scrollTo="$emit('scrollTo', $event)" link="About" />
      <NavLink @scrollTo="$emit('scrollTo', $event)" link="Shop" />
      <NavLink @scrollTo="$emit('scrollTo', $event)" link="Featured" />
      <NavLink @scrollTo="$emit('scrollTo', $event)" link="Contact Us" />
    </ul>
  </nav>
</template>

<script>
import NavLink from "./NavLink.vue";

export default {
  name: "NavBar",
  components: {
    NavLink
  }
};
</script>