<template>
<div class=" bg-blue-100 border border-green-700 shadow px-2 py-4">
<div>Add a Quiz</div>
  <form @submit.prevent="createQuiz">
    <input v-model="name"  class="w-full" type="text">
    <div class="text-right">
      <app-button type="submit" btnText="Create New Quiz"></app-button>
      <div v-if="success">Quiz Created Successfully</div>
    </div>

  </form>
</div>
</template>

<script>
import axios from 'axios';
import AppButton from "../global/AppButton";
export default {
name: "AddQuiz",
  data() {
    return {
      'name' : '',
      'success' : false,
      'errorMessage': ''
    }
  },
  components: {AppButton},
  methods: {
  createQuiz() {
    axios.post('/api/quiz/create', {'name' : this.name})
        .then(response => this.success = true)
        .catch(err => console.log(err));
  }
  }
}
</script>

<style scoped>

</style>