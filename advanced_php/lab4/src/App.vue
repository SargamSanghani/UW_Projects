<template>
  <div>
    <NavBar @scrollTo="navscroll" />
    <TheFeatured />
  </div>
</template>

<script>
import NavBar from "./components/NavBar";
import TheFeatured from "./components/TheFeatured";
export default {
  name: "App",
  components: {
    NavBar,
    TheFeatured
  },
  methods: {
    navscroll(e) {
      e.preventDefault();
      const target = e.target.dataset.target;
      document.querySelector(target).scrollIntoView({
        behavior: "smooth"
      });
    }
  }
};
</script>