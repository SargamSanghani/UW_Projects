<template>
  <div class="columns is-centered">
    <div class="column is-half">
      <h1 class="is-size-3 pb-5">Lab 3: Book List</h1>
      <table class="table">
        <tr>
          <th>ID</th>
          <th>Cover</th>
          <th>Title</th>
          <th>Author</th>
          <th>Publisher</th>
          <th>Format</th>
          <th>Genre</th>
          <th>Year Published</th>
        </tr>
        <tr v-for="book in books" :key="book.book_id">
          <td v-text="book.book_id"></td>
          <td @click="showViewModal(book)" class="is-clickable">
            <img style="max-width: 50px" :src="getImage(book.image)" :alt="book.title" />
          </td>
          <td v-text="book.title" @click="showViewModal(book)" class="is-clickable"></td>
          <td v-text="book.author"></td>
          <td v-text="book.publisher"></td>
          <td v-text="book.format"></td>
          <td v-text="book.genre"></td>
          <td v-text="book.year_published"></td>
        </tr>
      </table>
    </div>

    <div class="modal" v-bind:class="{ 'is-active': book }">
      <div class="modal-background"></div>
      <div class="modal-card">
        <header class="modal-card-head">
          <p class="modal-card-title">{{book.title}}</p>
          <button class="delete" @click="book = false" aria-label="close"></button>
        </header>
        <section class="modal-card-body">
          <img :src="getImage(book.image)" :alt="book.title" />

          <div class="container is-max-desktop">
            <div class>
              <table class="table">
                <tr>
                  <th>ID:</th>
                  <td v-text="book.book_id"></td>
                </tr>
                <tr>
                  <th>Author:</th>
                  <td v-text="book.author"></td>
                </tr>
                <tr>
                  <th>Publisher:</th>
                  <td v-text="book.publisher"></td>
                </tr>
                <tr>
                  <th>Format:</th>
                  <td v-text="book.format"></td>
                </tr>
                <tr>
                  <th>Genre:</th>
                  <td v-text="book.genre"></td>
                </tr>
                <tr>
                  <th>Year Published:</th>
                  <td v-text="book.year_published"></td>
                </tr>
                <tr>
                  <th>Price:</th>
                  <td v-text="'$ ' + book.price"></td>
                </tr>
                <tr>
                  <th>Num Pages:</th>
                  <td v-text="book.num_pages"></td>
                </tr>
                <tr>
                  <th>Description:</th>
                  <td v-html="book.description"></td>
                </tr>
              </table>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "App",
  data() {
    return {
      url: "http://localhost:8001",
      books: [],
      book: false
    };
  },
  created() {
    fetch(this.url)
      .then(resp => resp.json())
      .then(json => (this.books = json));
  },
  methods: {
    getImage(path) {
      return "images/covers/" + path;
    },
    showViewModal(book) {
      this.book = book;
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
  color: #2c3e50;
  margin-top: 30px;
}
</style>
