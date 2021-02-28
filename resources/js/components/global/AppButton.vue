<template>
<button :type="type"
class="bg-gradient-to-r from-green-500 to-blue-800 text-gray-100 rounded py-2 px-4">
  {{btnText}}
</button>
</template>

<script>
export default {
name: "AppButton",
  props: ['type','btnText'],
}
</script>

<style scoped>

</style>