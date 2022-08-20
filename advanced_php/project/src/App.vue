<template>
  <div id="home">
    <h1 class="bg-cyan-700 text-white text-xl p-4 sticky top-0">Advanced PHP Project</h1>

    <div class="container max-w-screen-lg text-right">
      <div
        :class="{
          'border-green-600 bg-green-500': showSuccess,
          'border-red-600 bg-red-500': showError
        }"
        class="alert w-1/3 font-bold text-white text-center p-4 border-l-8"
        role="alert"
        v-if="showSuccess || showError"
      >
        <span class="text-left float-left">{{showSuccess ? successMessage : errorMessage}}</span>
        <span
          @click="hideMessage()"
          class="float-right cursor-pointer"
          style="font-size: 1.25rem;"
        >x</span>
      </div>

      <button
        @click="showModal('add')"
        class="bg-transparent hover:bg-cyan-700 text-cyan-700 font-semibold hover:text-white py-2 px-4 mr-1 border border-cyan-700 hover:border-transparent rounded my-4"
      >Add</button>

      <TheUsers
        :users="users"
        @showModal="showModal($event)"
        @deleteUser="updateUser($event, 'DELETE')"
      />
      <AddModal
        v-if="showAdd"
        :user="user"
        :errors="errors"
        @closeAddModal="closeModal()"
        @addUser="updateUser($event, 'POST')"
      />
      <EditModal
        v-if="showEdit"
        :user="user"
        :errors="errors"
        @closeEditModal="closeModal()"
        @updateUser="updateUser($event, 'PUT')"
      />
    </div>
  </div>
</template>

<script>
import TheUsers from "./components/TheUsers.vue";
import AddModal from "./components/AddModal.vue";
import EditModal from "./components/EditModal.vue";

export default {
  name: "App",
  components: {
    TheUsers,
    AddModal,
    EditModal
  },
  data() {
    return {
      API_URL: "http://localhost:8001",
      users: [],
      showAdd: false,
      showEdit: false,
      user: this.initializeUser(),
      errors: {},
      showSuccess: false,
      successMessage: "",
      showError: false,
      errorMessage: ""
    };
  },
  created() {
    this.getAll();
  },
  methods: {
    getAll() {
      fetch(this.API_URL)
        .then(resp => resp.json())
        .then(json => {
          this.users = json.results;
        });
    },
    initializeUser() {
      return {
        id: null,
        name: "",
        email: "",
        phone: ""
      };
    },
    closeModal() {
      this.showAdd = this.showEdit = false;
    },
    updateUser(data, method) {
      var error = false;
      var isDelete = false;
      if (method != "DELETE") {
        if (data.name.trim().length == 0) {
          this.errors.name = "Name is required!";
          error = true;
        } else {
          this.errors.name = "";
        }
        if (data.email.trim().length == 0) {
          this.errors.email = "Email is required!";
          error = true;
        } else {
          this.errors.email = "";
        }
        if (data.phone.trim().length == 0) {
          this.errors.phone = "Phone is required!";
          error = true;
        } else {
          this.errors.phone = "";
        }
      } else {
        error = true;
        isDelete = confirm(
          "Do you really want to delete this user with id: " + data.id + " ?"
        );
      }
      if (!error || (method == "DELETE" && isDelete)) {
        fetch(this.API_URL, {
          method: method,
          body: JSON.stringify(data),
          headers: {
            "Content-Type": "application/json"
          }
        })
          .then(resp => resp.json())
          .then(json => {
            if (json.status == 200 || json.status == 201) {
              this.user = this.initializeUser();
              this.showSuccess = true;
              this.successMessage = json.message;
              this.getAll();
            } else {
              this.showError = true;
              this.errorMessage = json.message;
            }
          })
          .catch(error => {
            this.showError = true;
            this.errorMessage = error;
          });
        this.closeModal();
        this.scrollToTop();
        setTimeout(() => {
          this.showSuccess = false;
          this.showError = false;
        }, 3000);
      }
    },
    showModal(e) {
      if (e == "add") {
        this.showAdd = true;
      } else {
        this.showEdit = true;
        this.user = { ...e };
      }
      this.errors = {};
    },
    scrollToTop() {
      document.querySelector("#home").scrollIntoView({
        behavior: "smooth"
      });
    },
    hideMessage() {
      this.showSuccess = false;
      this.showError = false;
    }
  }
};
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
}

.alert {
  position: absolute;
  top: 10px;
  right: 10px;
}
</style>
