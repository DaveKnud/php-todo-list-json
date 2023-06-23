<script>
import axios from 'axios';
export default {
  data() {
    return {
      programmingLanguages: []
    };
  },
  methods: {
    onSubmit() {
      console.error("onSubmit");
    }
  },
  mounted() {
    axios.get('http://localhost/Boolean%20projects/php-todo-list-json/tmp/')
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
      </li>
    </ul>
    <form @submit.prevent="onSubmit">
      <input type="submit" value="Add new programming language">
    </form>
  </div>
</template>

