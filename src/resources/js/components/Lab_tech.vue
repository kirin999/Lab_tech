<template>
    <div class="main">
        <header class="main-header">
            <div v-bind:class="header_logo"><a v-bind:href="url" class="header-logo-link"><img src="../../images/lab_tech.png" width="70" height="50"></a></div>
        </header>
        <div class="split">
            <div class="split-left">
                <div>
                    <div>いつでもどこでも</div>
                    <p>病院の顕微鏡で学習する時間は終わり<br>全国の検体をこのサイトで見て学習</p>
                </div>
                <div>
                    <div class="menu">
                        <div class="menu-item">TOP</div>
                        <div class="menu-item">ABOUT</div>
                        <div class="menu-item">BLOG</div>
                        <div class="menu-item">CONTACT</div>
                    </div>
                </div>
            </div>
            <div class="split-right">
                <div>
                    <a v-bind:href="url" class="image"><img src="../../images/neutrophil.jpg" width="450" height="300"></a>
                </div>
                <div>
                    <a v-bind:href="url" class="image"><img src="../../images/neutrophil.jpg" width="450" height="300"></a>
                </div>
                <div>
                    <a v-bind:href="url" class="image"><img src="../../images/neutrophil.jpg" width="450" height="300"></a>
                </div>
                <div>
                    <a v-bind:href="url" class="image"><img src="../../images/neutrophil.jpg" width="450" height="300"></a>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
    const url = 'localhost:80';
</script>



<style>

    .main {
        height:100vh;
        background-color: aqua;
    }

    /* ヘッダー */
    .main-header {
        display: flex;
        justify-content: flex-end;
        width: 100%;
        height: 70px;
        background-color: rgb(255, 255, 255);
        align-items: center;
    }

    .header-logo-link{
        margin-right: 30px;
    }

    /* ボディ */
    .split{
        display: flex;
        height: calc(100% - 70px);
        background-color: rgb(255, 255, 255);
    }

    /* ボディ左側 */
    .split-left{
        height: 100%;
        width: 30%;
        background-color: rgb(196, 213, 37);
    }

    .split-right {
        overflow-x: scroll;
    }

    .split-right div {
        margin-bottom: 120px;
    }

</style>



