<template>
    <div>
      <input type="text" v-model="searchTerm" @input="search"/>
    </div>
</template>


<script>
export default {
  name: "SearchBar",
  data() {
    return {
      searchTerm: ""
    };
  },
  computed: {
    search() {
        this.$emit("search", this.searchTerm);
    }
  }
};

</script>


<style>

input {
    outline:solid 2px red;
}

</style>