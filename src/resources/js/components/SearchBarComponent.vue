<template>
    <div class="search-box">
      <input type="text" v-model="searchTerm" @input="search"/>
      <button type="submit">検索</button>
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

.search-box {
  display: flex;
  align-items: center;
  width: 500px;
  height: 35px;
  border: 2px solid #50C0FF;
  border-radius: 0;
  margin: 50px auto;
}

.search-box input[type="text"] {
  flex: 1;
  border: none;
  outline: none;
  font-size: 18px;
}

.search-box button[type="submit"] {
  background-color: #50C0FF;
  color: #fff;
  border: none;
  border-radius: 0;
  padding: 8px 15px;
  margin-left: 10px;
  font-size: 17px;
  cursor: pointer;
  height: 35px;
  line-height: 9px;
}

.search-box button[type="submit"]:hover {
  background-color: #c4e9ff;
}

</style>