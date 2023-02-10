<template>
    <div>
        <div :class="{fadeIn: visible}">
            <slot v-if="visible"></slot>
        </div>
    </div>
</template>

<script>
  export default {
    data() {
      return {
        visible: false
      };
    },
    mounted() {
      let elem = document.querySelector('.split-right');
      elem.addEventListener("scroll", this.handleScroll);
    },
    destroyed() {
      window.removeEventListener("scroll", this.handleScroll);
    },
    methods: {
      handleScroll() {
        console.log(this.visible);
        if (!this.visible) {
          let elem = document.querySelector('.image1');
          var top = elem.getBoundingClientRect().top;
          this.visible = top < top + 100;
        }
      }
    }
  }
</script>


<style>
.fadeIn {
  animation: fadeIn 3.5s;
}
@keyframes fadeIn {
  0% {
    opacity: 0;
    transform: translateY(1px);
  }
  100% {
    opacity: 1;
    transform: translateY(0px);
  }
}

</style>