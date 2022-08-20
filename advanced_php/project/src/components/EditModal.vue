<template>
  <!-- Large Modal -->
  <div
    id="large-modal"
    tabindex="-1"
    class="overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center flex bg-gray-500 bg-opacity-50 text-left"
  >
    <div class="relative p-4 w-full max-w-4xl h-full md:h-auto">
      <!-- Modal content -->
      <div class="relative bg-white rounded-lg shadow">
        <!-- Modal header -->
        <div
          class="flex justify-between items-center p-5 rounded-t border-b dark:border-gray-600 bg-cyan-700 text-white"
        >
          <h3 class="text-xl font-medium text-bold">Edit User</h3>
          <button
            type="button"
            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
            @click="$emit('closeEditModal')"
          >
            <svg
              class="w-5 h-5"
              fill="currentColor"
              viewBox="0 0 20 20"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                fill-rule="evenodd"
                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                clip-rule="evenodd"
              />
            </svg>
          </button>
        </div>

        <div class="p-6 space-y-6">
          <form novalidate>
            <div class="mb-6">
              <label for="name" class="block mb-2">
                Name:
                <span class="text-red-500">* {{ errors.name }}</span>
              </label>
              <input
                type="text"
                id="name"
                name="name"
                v-model="editObject.name"
                class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Please enter your name"
                required
              />
            </div>
            <div class="mb-6">
              <label for="email" class="block mb-2">
                Email:
                <span class="text-red-500">* {{ errors.email }}</span>
              </label>
              <input
                type="text"
                id="email"
                name="email"
                v-model="editObject.email"
                class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="demo@example.com"
                required
              />
            </div>
            <div class="mb-6">
              <label for="phone" class="block mb-2">
                Phone:
                <span class="text-red-500">* {{ errors.phone }}</span>
              </label>
              <input
                type="text"
                id="phone"
                name="phone"
                placeholder="xxx-xxx-xxxx"
                v-model="editObject.phone"
                class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                required
              />
            </div>
          </form>
        </div>
        <!-- Modal footer -->
        <div
          class="flex items-center p-6 space-x-2 rounded-b border-t border-gray-200 dark:border-gray-600"
        >
          <button
            type="submit"
            class="bg-transparent hover:bg-cyan-700 text-cyan-700 font-semibold hover:text-white py-2 px-4 mr-1 border border-cyan-700 hover:border-transparent rounded"
            @click.prevent="$emit('updateUser', editObject)"
          >Update</button>
          <button
            @click="$emit('closeEditModal')"
            class="bg-transparent hover:bg-red-700 text-red-700 font-semibold hover:text-white py-2 px-4 border border-red-700 hover:border-transparent rounded"
          >Cancel</button>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  name: "EditModal",
  props: {
    user: Object,
    errors: Object
  },
  data() {
    return {
      editObject: this.user
    };
  }
};
</script>