<template>
  <div class="container is-max-desktop" id="home" style="padding-top: 80px">
    <h1 class="title has-text-centered">Sample App</h1>

    <AppSections title="Blog" id="blog" />
    <AppSections title="About" id="about" />
    <AppSections title="Shop" id="shop" />
    <AppSections title="Featured" id="featured" />
    <AppSections title="Contact Us" id="contact_us" />
  </div>
</template>

<script>
import AppSections from "./AppSections";
export default {
  name: "TheFeatured",
  components: {
    AppSections
  }
};
</script>