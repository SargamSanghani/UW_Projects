<template>
  <div class>
    <table class="w-full text-center mb-4 shadow-xl">
      <thead>
        <tr class="border-b bg-gray-800 text-white">
          <th class="text-sm font-medium px-6 py-3">#</th>
          <th class="text-sm font-medium px-6 py-3">Name</th>
          <th class="text-sm font-medium px-6 py-3">Email Address</th>
          <th class="text-sm font-medium px-6 py-3">Phone Number</th>
          <th class="text-sm font-medium px-6 py-3">Actions</th>
        </tr>
      </thead>
      <tbody>
        <SingleUser
          v-for="user in users.slice().reverse()"
          :key="user.id"
          :user="user"
          @showModal="$emit('showModal', $event)"
          @deleteUser="$emit('deleteUser', $event)"
        />
      </tbody>
    </table>
  </div>
</template>

<script>
import SingleUser from "./SingleUser.vue";
export default {
  name: "TheUsers",
  components: {
    SingleUser
  },
  props: {
    users: Array
  }
};
</script>