<template>
    <div class="container">
        <div class="left-pane">
            {{ $route.params.id }}
        </div>
        <div class="right-pane">
            <!-- 右側のコンテンツ -->
        </div>
    </div>
</template>



<script>
  
</script>


<style>
.container {
  display: flex;
}

.left-pane, .right-pane {
  width: 50%;
  height: 100vh;
}

.left-pane {
  background-color: lightgray;
}

.right-pane {
  background-color: darkgray;
}

</style>