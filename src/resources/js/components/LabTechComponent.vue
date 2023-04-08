<template>
    <div class="main">
        <header class="main-header">
            <div v-bind:class="header_logo"><a v-bind:href="url" class="header-logo-link"><img src="../../images/lab_tech.png" width="70" height="50"></a></div>
        </header>
        <div class="split">
            <div class="split-left">
                <div>
                    <h2 class="second-title">いつでもどこでも</h2>
                    <p class="second-title-text">病院の顕微鏡で学習する時間は終わり<br>全国の検体をこのサイトで見て学習</p>
                </div>
                <div class="menu">
                    <ul class="menu-items">
                        <router-view>
                            <p class="menu-items-title">MENU</p>
                            <li class="menu-item"><router-link v-bind:to="{ path : '/bood'}">血液像一覧</router-link></li>
                            <li class="menu-item">沈渣一覧(Coming Soon)</li>
                            <li class="menu-item">クイズ</li>
                            <li class="menu-item"><router-link v-bind:to="{ path : '/must/read'}">必ず読んでいただきたい事</router-link></li>
                        </router-view>
                    </ul>
                </div>
            </div>
            <div class="split-right">
                <div class="image-text">
                    <div class="image image1">
                        <a v-bind:href="url" class="image"><img :src="imageUrl" v-if="imageUrl" width="450" height="300"></a>
                    </div>
                        <div class="text">
                            <p>hello hello test test test</p>
                            <p>hello hello test test test</p>
                            <p>hello hello test test test</p>
                            <p>hello hello test test test</p>
                        </div>
                </div>
                <div class="image-text">
                    <div class="image image1">
                        <a v-bind:href="url" class="image"><img src="../../images/neutrophil.jpg" width="450" height="300"></a>
                    </div>
                    <fade-in-component>
                        <div class="text">
                            <p>hello hello test test test</p>
                            <p>hello hello test test test</p>
                            <p>hello hello test test test</p>
                            <p>hello hello test test test</p>
                        </div>
                    </fade-in-component>
                </div>
                <div class="image-text">
                    <div class="image image1">
                        <a v-bind:href="url" class="image"><img src="../../images/neutrophil.jpg" width="450" height="300"></a>
                    </div>
                    <fade-in-component>
                        <div class="text">
                            <p>hello hello test test test</p>
                            <p>hello hello test test test</p>
                            <p>hello hello test test test</p>
                            <p>hello hello test test test</p>
                        </div>
                    </fade-in-component>
                </div>
                <div class="image-text">
                    <div class="image image1">
                        <a v-bind:href="url" class="image"><img src="../../images/neutrophil.jpg" width="450" height="300"></a>
                    </div>
                    <fade-in-component>
                        <div class="text">
                            <p>hello hello test test test</p>
                            <p>hello hello test test test</p>
                            <p>hello hello test test test</p>
                            <p>hello hello test test test</p>
                        </div>
                    </fade-in-component>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import fadeInComponent from './FadeInComponent.vue'
    import { ref, onMounted } from 'vue'
    import { getImageFromS3 } from '../hooks/useS3Image'
    const url = 'localhost:80';

    export default{
        setup(){
            const imageUrl = ref(null)
            
            onMounted(async () => {
                imageUrl.value = await getImageFromS3('lab-tech', 'man-6631394_1920.png')
            })

            return{
                imageUrl,
                fadeInComponent
            }
        }
    }
</script>



<style>

    .main {
        height:100vh;
    }

    /* ヘッダー */
    .main-header {
        display: flex;
        justify-content: flex-end;
        width: 100%;
        height: 70px;
        align-items: center;
    }

    .header-logo-link{
        margin-right: 30px;
    }

    /* ボディ */
    .split{
        display: flex;
        height: calc(100% - 70px);
    }

    /* ボディ左側 */
    .split-left{
        height: 100%;
        width: 30%;
    }

    .split-right {
        width: calc(100% - 30%);
        overflow-x: scroll;
    }

    .split-right .image {
        margin-left: 70px;
        margin-top: 70px;
    }


    .split-right .image  img{
        box-shadow: 0 5px 15px 0 rgba(0, 0, 0, .5);
    }

    .image-text{
        display: flex;
    }

    .image{
        margin-bottom: 100px;
    }

    /* 画像横のテキスト */
    .text {
        position:  relative;
        left:  30px;
        top: 210px;
    }

    .second-title {
        margin-top: 30px;
        margin-left: 45px;
        font-size: 3em;
    }

    .second-title-text {
        position:  relative;
        left: 50px;
        bottom: 35px;
        line-height: 1.5;
    }

    .menu {
        position:  relative;
        left:  10px;
        top: 200px;
    }

    .menu ul{
        list-style: none;
    }

    .menu ul li{
        margin-bottom: 6px;
    }

    .menu-items-title{
        font-size: 1.5em;
        font-weight: 700;
    }

</style>



