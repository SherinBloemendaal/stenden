<template>
    <div class='mainWrapper' @click='emitClickEvent'>
      <p class='emotionIcon'>
        <slot name='emojiCode'></slot>
      </p>
      <p class='emotionTitle'>
        <slot name='title'></slot>
      </p>
    </div>
</template>

<script>
    export default {
        name: "emotionSelected",
      methods: {
        emitClickEvent() {
          this.$emit("click");
        }
      }
    }
</script>

<style lang='scss' scoped>
  @import url('https://fonts.googleapis.com/css?family=Mali');

  .emotionIcon{
    font-size: 55px;
  }
  .emotionTitle {
    color: #f8f9fa;
    text-transform: uppercase;
    font-weight: bold;
    font-family: 'Mali', cursive;
    font-size: 25px;
  }
  .mainWrapper {
    display:inline-grid;
    text-align: center;
    width: 200px;
    background-color: rgba(248, 249, 250, 0.5);
    /* height: 125px; */
    box-shadow: 0 0 4px 0px #000;
    border-radius: 2px;
    border-bottom: black 5px;
    margin: 10px;
    padding: 20px;
    cursor: pointer;
  }
  .mainWrapper:hover {
    background-color: skyblue;
  }
</style>
