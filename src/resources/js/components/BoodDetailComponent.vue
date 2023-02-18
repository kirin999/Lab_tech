<template>
    <div class="container">
        <div class="left-pane">
            <div class="detail-box">
                <h2 class="title">好中球<span @click="showPopupInstructor">(〇〇技師)</span></h2>
                <div v-if="isInstructorPopupVisible" class="popup-container" ref="popupContainer" :style="{ top: popupTop + 'px', left: popupLeft + 'px' }">
                    <div class="popup-header" @mousedown="startDragging">
                            <h2>氏名</h2>
                            <p>〇〇技師</p>
                            <h2>勤務地</h2>
                            <p>順天堂大学病院</p>
                            <h2>保有資格</h2>
                            <p>血液1級、血液認定、緊急検査士</p>
                            <button @click="hidePopupInstructor">閉じる</button>
                    </div>
                </div>
                <p class="feature">◎特徴</p>
                <p>aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa<br>aaaaaaaaaaaaaaaaaaaaaaaaaaaaa<br>
                aaaaaaaaaaaaaaaaaaaaaaaaaaaaa<br>aaaaaaaaaaaaaaaaaaaaaaaaaaaaa<br>
                aaaaaaaaaaaaaaaaaaaaaaaaaaaaa<br>aaaaaaaaaaaaaaaaaaaaaaaaaaaaa<br>
                aaaaaaaaaaaaaaaaaaaaaaaaaaaaa<br>aaaaaaaaaaaaaaaaaaaaaaaaaaaaa<br>
                aaaaaaaaaaaaaaaaaaaaaaaaaaaaa<br>aaaaaaaaaaaaaaaaaaaaaaaaaaaaa<br></p>
                <p class="point">◎判定ポイント</p>
                <p>aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa<br>aaaaaaaaaaaaaaaaaaaaaaaaaaaaa<br>
                aaaaaaaaaaaaaaaaaaaaaaaaaaaaa<br>aaaaaaaaaaaaaaaaaaaaaaaaaaaaa<br>
                aaaaaaaaaaaaaaaaaaaaaaaaaaaaa<br>aaaaaaaaaaaaaaaaaaaaaaaaaaaaa<br>
                aaaaaaaaaaaaaaaaaaaaaaaaaaaaa<br>aaaaaaaaaaaaaaaaaaaaaaaaaaaaa<br>
                aaaaaaaaaaaaaaaaaaaaaaaaaaaaa<br>aaaaaaaaaaaaaaaaaaaaaaaaaaaaa<br></p>
            </div>
        </div>
        <div class="right-pane">
            <!-- 画像の部分はDBから取得して、動的に変える -->
            <div class="image-box">
                <div class="image-bood image1-bood">
                    <div class="image-number">画像1<span>※画像をクリックで拡大できます</span></div>
                    <div @click="showPopup"><img src="../../images/neutrophil.jpg" width="450" height="300"></div>
                </div>
                <div v-if="isPopupVisible" class="popup-container" ref="popupContainer" :style="{ top: popupTop + 'px', left: popupLeft + 'px' }">
                    <div class="popup-header" @mousedown="startDragging">
                            <h2>{{ popupTitle }}</h2>
                            <img src="../../images/neutrophil.jpg" width="800" height="600">
                            <button @click="hidePopup">閉じる</button>
                    </div>
                </div>
                <div class="image-bood image1-bood">
                    <div class="image-number">画像2<span>※画像をクリックで拡大できます</span></div>
                    <div @click="showPopup"><img src="../../images/neutrophil.jpg" width="450" height="300"></div>
                </div>
                <div v-if="isPopupVisible" class="popup-container" ref="popupContainer" :style="{ top: popupTop + 'px', left: popupLeft + 'px' }">
                    <div class="popup-header" @mousedown="startDragging">
                            <h2>{{ popupTitle }}</h2>
                            <img src="../../images/neutrophil.jpg" width="800" height="600">
                            <button @click="hidePopup">閉じる</button>
                    </div>
                </div>
                <div class="image-bood image1-bood">
                    <div class="image-number">画像3<span>※画像をクリックで拡大できます</span></div>
                    <div @click="showPopup"><img src="../../images/neutrophil.jpg" width="450" height="300"></div>
                </div>
                <div v-if="isPopupVisible" class="popup-container" ref="popupContainer" :style="{ top: popupTop + 'px', left: popupLeft + 'px' }">
                    <div class="popup-header" @mousedown="startDragging">
                            <h2>{{ popupTitle }}</h2>
                            <img src="../../images/neutrophil.jpg" width="800" height="600">
                            <button @click="hidePopup">閉じる</button>
                    </div>
                </div>
                <div class="image-bood image1-bood">
                    <div class="image-number">画像4<span>※画像をクリックで拡大できます</span></div>
                    <div @click="showPopup"><img src="../../images/neutrophil.jpg" width="450" height="300"></div>
                </div>
                <div v-if="isPopupVisible" class="popup-container" ref="popupContainer" :style="{ top: popupTop + 'px', left: popupLeft + 'px' }">
                    <div class="popup-header" @mousedown="startDragging">
                            <h2>{{ popupTitle }}</h2>
                            <img src="../../images/neutrophil.jpg" width="800" height="600">
                            <button @click="hidePopup">閉じる</button>
                    </div>
                </div>
                <div class="image-bood image1-bood">
                    <div class="image-number">画像5<span>※画像をクリックで拡大できます</span></div>
                    <div @click="showPopup"><img src="../../images/neutrophil.jpg" width="450" height="300"></div>
                </div>
                <div v-if="isPopupVisible" class="popup-container" ref="popupContainer" :style="{ top: popupTop + 'px', left: popupLeft + 'px' }">
                    <div class="popup-header" @mousedown="startDragging">
                            <h2>{{ popupTitle }}</h2>
                            <img src="../../images/neutrophil.jpg" width="800" height="600">
                            <button @click="hidePopup">閉じる</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>



<script>
  
//   {{ $route.params.id }}でURLに含まれるidから該当する画像をLravelからとってくる

export default {
  data() {
    return {
      isPopupVisible: false,
      isInstructorPopupVisible: false,
      popupTitle: 'ポップアップのタイトル',
      popupTop: 10,
      popupLeft: 400,
      dragStartX: 0,
      dragStartY: 0,
    }
  },
  methods: {
    // ポップアップ
    showPopup() {
      this.isPopupVisible = true
    },
    hidePopup() {
      this.isPopupVisible = false
    },
    // ポップアップ講師
    showPopupInstructor() {
      console.log("hogehgogege");
      this.isInstructorPopupVisible = true
    },
    hidePopupInstructor() {
      this.isInstructorPopupVisible = false
    },
    // ポップアップをドラックで移動
    startDragging(event) {
      console.log(event);
      this.dragStartX = event.clientX
      this.dragStartY = event.clientY
      window.addEventListener('mousemove', this.doDragging)
      window.addEventListener('mouseup', this.stopDragging)
    },
    doDragging(event) {
      const diffX = event.clientX - this.dragStartX
      const diffY = event.clientY - this.dragStartY
      this.popupLeft += diffX
      this.popupTop += diffY
      this.dragStartX = event.clientX
      this.dragStartY = event.clientY
      console.log(diffX);
    },
    stopDragging() {
      window.removeEventListener('mousemove', this.doDragging)
      window.removeEventListener('mouseup', this.stopDragging)
    },
  },
}

</script>


<style>
.container {
  display: flex;
}

.left-pane, .right-pane {
  width: 50%;
  height: 100vh;
}

/* .left-pane {
  background-color: lightgray;
} */

.detail-box{
    margin-left: 150px;
}

.right-pane {
  overflow-x: scroll;
  /* background-color: darkgray; */
}

.image-box{
    display: flex;
    flex-flow: column;
}

.image1-bood {
    margin: 30px auto;
    cursor: pointer;
}

.feature{
    font-size: 1.5rem;
}

.point{
    font-size: 1.5rem;
}

.popup-container {
  position: absolute;
  background-color: #fff;
  border: 1px solid #ccc;
  border-radius: 5px;
}
.popup-header {
  align-items: center;
  padding: 10px;
  background-color: #f5f5f5;
  border-bottom: 1px solid #ccc;
  cursor: move;
}

.title span{
    font-size: 1rem;
    cursor: pointer;
}

.image-number span{
    font-size: 0.5rem;
    color: rgb(156, 156, 156);
}

</style>