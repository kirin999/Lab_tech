<template>
    <search-bar-component @search="handleSearch"></search-bar-component>
    <table>
        <tr v-for="user in filteredUsers" :key="user.id">
            <td v-text="user.id"></td>
            <td v-text="user.name"></td>
            <td v-text="user.email"></td>
            <td>
                <img :src="user.image" width="450" height="300">
            </td>
        </tr>
    </table>
</template>


<script>
import SearchBarComponent from "./SearchBarComponent.vue";

export default {
  name: "BloodList",
  data() {
    return {
      searchTerm: "",
      users: [
                {
                    id: 1,
                    name: '鈴木太郎',
                    email: 'suzukitaro@example.com',
                    image: '../../images/neutrophil.jpg'
                },
                {
                    id: 2,
                    name: '佐藤二郎',
                    email: 'satoujiro@example.com',
                    image: '../../images/neutrophil.jpg'
                },
                {
                    id: 3,
                    name: '田中三郎',
                    email: 'tanakasaburo@example.com',
                    image: '../../images/neutrophil.jpg'
                },
                {
                    id: 4,
                    name: '山本四郎',
                    email: 'yamamotoshiro@example.com',
                    image: '../../images/neutrophil.jpg'
                },
                {
                    id: 5,
                    name: '高橋五郎',
                    email: 'takahashigoro@example.com',
                    image: '../../images/neutrophil.jpg'
                },
            ]
    };
  },
  components: {
    SearchBarComponent
  },
  methods: {
    handleSearch(searchTerm) {
        this.searchTerm = searchTerm;
        console.log(this.searchTerm);
    }
  },
  computed: {
            filteredUsers() {
                var users = [];
                for(var i in this.users) {
                    var user = this.users[i];
                    console.log(user);
                    if(user.name.indexOf(this.searchTerm) !== -1 ||
                        user.email.indexOf(this.searchTerm) !== -1) {
                        users.push(user);
                        console.log(users);
                    }
                }
                console.log("ifの外");
                console.log(users);
                return users;
            }
        }
};

</script>