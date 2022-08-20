<template>
  <tr class="bg-white border-b">
    <td class="text-sm text-gray-900 font-light px-6 py-3 whitespace-nowrap">{{user.id}}</td>
    <td class="text-sm text-gray-900 font-light px-6 py-3 whitespace-nowrap">{{user.name}}</td>
    <td class="text-sm text-gray-900 font-light px-6 py-3 whitespace-nowrap">{{user.email}}</td>
    <td class="text-sm text-gray-900 font-light px-6 py-3 whitespace-nowrap">{{user.phone}}</td>
    <td class="text-sm text-gray-900 font-light px-6 py-3 whitespace-nowrap">
      <button
        @click="$emit('showModal', user)"
        class="bg-transparent hover:bg-cyan-700 text-cyan-700 font-semibold hover:text-white py-2 px-4 mr-1 border border-cyan-700 hover:border-transparent rounded"
      >Edit</button>
      <button
        @click="$emit('deleteUser', user)"
        class="bg-transparent hover:bg-red-700 text-red-700 font-semibold hover:text-white py-2 px-4 border border-red-700 hover:border-transparent rounded"
      >Delete</button>
    </td>
  </tr>
</template>

<script>
export default {
  name: "SingleUser",
  props: {
    user: Object
  }
};
</script>