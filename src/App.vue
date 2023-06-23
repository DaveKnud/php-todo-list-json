<script>
import axios from 'axios';
export default {
  data() {
    return {
      programmingLanguages: [],
      newProgrammingLanguage: {
        name: ""
      }
    };
  },
  methods: {
    onSubmit() {
      const url = 'http://localhost/Boolean%20projects/php-todo-list-json/tmp/postNewLanguage.php';
      const data = this.newProgrammingLanguage;
      const headers = {
        headers: { 'Content-Type': 'multipart/form-data' }
      };
      axios.post(url, data, headers)
        .then(response => {
          this.programmingLanguages = response.data;
          this.newProgrammingLanguage.name = ""
        })
        .catch(error => console.error("error", error));
    },
    deleteLanguage() {
      console.log("delete");
    },
  },
  mounted() {
    axios.get('http://localhost/Boolean%20projects/php-todo-list-json/tmp/index.php')
      .then(response => {
        this.programmingLanguages = response.data;
        //console.log(r);
      })
  }
}
</script>

<template>
  <div>
    <ul>
      <li v-for="language in programmingLanguages" :key="index">
        {{ language.name }}
        <button style="color: red; background-color: rgb(0, 0, 0);" @click="deleteLanguage()"> X</button>
      </li>
    </ul>
    <form @submit.prevent="onSubmit">
      <label for="name" name="newLanguage">Insert New Programming Language</label>
      <input type="text" name="Insert New Programming Language" id="name" v-model="newProgrammingLanguage.name">
      <input type="submit" value="Add new programming language">
    </form>
  </div>
</template>

