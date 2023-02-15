<template>
    <search-bar-component @search="handleSearch"></search-bar-component>
    <div class="blood-list">
        <div class="blood-list-box" v-for="user in filteredUsers" :key="user.id">
            <div>
                <div v-text="user.cell"></div>
                <router-link v-bind:to="{ name : 'BoodDetail', params:{id : user.id}}"><img :src="user.image" width="400" height="250"></router-link>
            </div>
            <div>
                <p>{{ user.hospital }}</p>
                <div>氏名：{{ user.name }}技師</div>
                <div>資格：{{ user.qualification }}</div>
            </div>
        </div>
    </div>
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
                    cell: '好中球',
                    hospital: '順天堂大学病院',
                    name: '鈴木太郎',
                    qualification: '血液1級',
                    image: '../../images/neutrophil.jpg'
                },
                {
                    id: 2,
                    cell: '好中球',
                    hospital: '国立がん研究センター',
                    name: '佐藤二郎',
                    qualification: '血液認定',
                    image: '../../images/neutrophil.jpg'
                },
                {
                    id: 3,
                    cell: '好酸球',
                    hospital: '順天堂大学病院',
                    name: '田中三郎',
                    qualification: '血液1級',
                    image: '../../images/neutrophil.jpg'
                },
                {
                    id: 4,
                    cell: '好塩基球',
                    hospital: '順天堂大学病院',
                    name: '山本四郎',
                    qualification: '血液認定',
                    image: '../../images/neutrophil.jpg'
                },
                {
                    id: 5,
                    cell: 'リンパ級',
                    hospital: '順天堂大学病院',
                    name: '高橋五郎',
                    qualification: '血液1級',
                    image: '../../images/neutrophil.jpg'
                },
                {
                    id: 6,
                    cell: 'リンパ級',
                    hospital: '順天堂大学病院',
                    name: '高橋五郎',
                    qualification: '血液1級',
                    image: '../../images/neutrophil.jpg'
                },
                {
                    id: 7,
                    cell: 'リンパ級',
                    hospital: '順天堂大学病院',
                    name: '高橋五郎',
                    qualification: '血液1級',
                    image: '../../images/neutrophil.jpg'
                },
                {
                    id: 8,
                    cell: 'リンパ級',
                    hospital: '順天堂大学病院',
                    name: '高橋五郎',
                    qualification: '血液1級',
                    image: '../../images/neutrophil.jpg'
                },
                {
                    id: 9,
                    cell: 'リンパ級',
                    hospital: '順天堂大学病院',
                    name: '高橋五郎',
                    qualification: '血液1級',
                    image: '../../images/neutrophil.jpg'
                },
                {
                    id: 10,
                    cell: 'リンパ級',
                    hospital: '順天堂大学病院',
                    name: '高橋五郎',
                    qualification: '血液1級',
                    image: '../../images/neutrophil.jpg'
                },
                {
                    id: 11,
                    cell: 'リンパ級',
                    hospital: '順天堂大学病院',
                    name: '高橋五郎',
                    qualification: '血液1級',
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
                        user.qualification.indexOf(this.searchTerm) !== -1 ||
                        user.cell.indexOf(this.searchTerm) !== -1)   
                    {
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



<style>


.blood-list {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    margin: 0 20px 0 20px;
}


.blood-list-box {
    margin-top: 100px;
}

.blood-list-box img{
    box-shadow: 0 5px 15px 0 rgba(0, 0, 0, .5);
}
</style>