<template>

<div>
  <div @click="error_message=''" v-if="error_message.length" class="flash error">{{ error_message }}</div>
  <div @click="success_message=''" v-if="success_message.length" class="flash success">{{ success_message }}</div>
   <h1>Author Crud</h1>
 <div class="flex">

  <div>
    <h2>Authors</h2>
    <table>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Country</th>
      </tr>
      <tr @click="editAuthor(author)" v-for="author in authors" :key="author.id">
        <td>{{ author.id }}</td>
        <td>{{ author.name }}</td>
        <td>{{ author.country }}</td>
      </tr>
    </table>
  </div>
  <div>
   <form>
     <p>Name: <input type="text" v-model="author.name"></p>
     <p>Country: <input type="text" v-model="author.country"></p>
     <p><input @click.prevent="submitAuthor" type="submit"></p>
   </form>
  </div>
  </div>
</div>

</template>

<script>

export default {
  name: 'App',
  data() {
    return {
      api_uri: 'http://localhost:8001',
      success_message: '',
      error_message: '',
      author: {
        id: '',
        name: '',
        country: ''
      },
      authors: []
    }
  },
  methods: {
    editAuthor(author) {
      this.author = {... author};
    },
    getAllAuthors() {
      fetch(this.api_uri)
        .then(resp => resp.json())
        .then(json => {
          this.authors = json.results;
        })
    },
    submitAuthor() {
      var method = '';
      if(this.author.id) {
        method = 'PUT'
      } else {
        method = 'POST';
      }
      fetch(this.api_uri, {
        method: method,
        body: JSON.stringify(this.author),
        headers: {
          'Content-Type': 'application/json'
        }
      })
      .then(resp => resp.json())
      .then(json => {
        if(json.status == 'ok') {
          console.log(json)
          this.author = {
            id: '',
            name: '',
            country: ''
          }
          this.success_message = json.message
          this.getAllAuthors();
        } else {
          this.error_message = json.message
        }
      })
    }
  },
  created() {
    this.getAllAuthors();
  }

}
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}

.flash {
  width: 100%;
  position: absolute;
  top: 0;
  line-height: 50px;
  font-weight: bold;
}

.flash.error {
  background: pink;
  color: darkred;
}

.flash.success {
  background: lightgreen;
  color: darkgreen;
}
.flex {
  display: flex;
  justify-content: space-between;
}

.flex div {
  width: 50%;

}

table {
  border-collapse: collapse;
}

td, th {
  padding: 4px;
  border: 1px solid #cfcfcf;
  text-align: left;
  cursor:pointer;
}
</style>
