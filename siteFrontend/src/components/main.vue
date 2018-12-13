<template>
  <b-container>
    <link href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.css' rel='stylesheet'>
    <!--<b-btn variant='primary' @click.native='ganaardewebsite'>Naar 113 (doet het nog niet)</b-btn>-->
    <b-form-group class='motivateInputWrapper animated'>
      <h3 class='title'>Waardoor heb jij je suicidale gevoel gekregen?</h3>
      <emotion-selected
        @click='showEmotionZin(item)'
        v-bind:data="item"
        v-bind:key="item.name"
        v-for='(item, index) in emoties'
      >
        <template slot='title'>
          {{ item.name }}
        </template>
        <template slot='emojiCode'>
          {{ item.code }}
        </template>
      </emotion-selected>
    </b-form-group>
    <div class='talipButton animated'>
      <center>
        <button class='btn btn-danger' @click='changeSite'>Dit helpt niet, door naar informatie</button>
      </center>
    </div>
    <div class='zin animated'>
      ❝ <i>{{zinText}}</i> ❞
    </div>

  </b-container>
</template>

<script>
  import EmotionSelected from "./emotionSelected";
  import axios from 'axios'

  export default {
    name: 'main',
    components: {EmotionSelected},
    data() {
      return {
        zinText: "",
        emoties: [
          {
            id: 1,
            name: "Verdrietig",
            code: "😔",
          },
          {
            id: 3,
            name: "Boos",
            code: "😠",
          },
          {
            id: 2,
            name: "Depressief",
            code: "🙁",
          },
          {
            id: 4,
            name: "Verward",
            code: "🤪",
          },
          {
            id: 5,
            name: "Angst",
            code: "😨",
          },
          {
            id: 6,
            name: "Bedroefd",
            code: "😟",
          },
          {
            id: 7,
            name: "Jaloers",
            code: "😈",
          },
          {
            id: 8,
            name: "Eenzaam",
            code: "1️⃣",
          },
          {
            id: 9,
            name: "Schaamte",
            code: "😳",
          }
        ],
        selectedEmotion: null,
      }
    },
    methods: {
      changeSite() {
        window.location.href = "/informatie";
      },
      showEmotionZin(item) {
        document.getElementsByClassName("motivateInputWrapper")[0].classList
          .remove("zoomIn")
        document.getElementsByClassName("talipButton")[0].classList
          .remove("bounceInUp")
        document.getElementsByClassName("zin")[0].classList
          .remove("zoomOut")

        setTimeout(() => {
          document.getElementsByClassName("motivateInputWrapper")[0].classList
            .add("zoomOut")
          document.getElementsByClassName("zin")[0].classList
            .add("zoomIn")
        }, 350)

        document.getElementsByClassName("talipButton")[0].classList
          .add("bounceOutDown")


        axios.get("http://192.168.3.28/api/plaggiaat.php?emotionId=" + item.id).then((response) => {
          this.zinText = response.data;
        })

        setTimeout(() => {
          document.getElementsByClassName("zin")[0].classList
            .add("zoomOut")
          setTimeout(() => {
            document.getElementsByClassName("motivateInputWrapper")[0].classList
              .add("zoomIn")
            document.getElementsByClassName("talipButton")[0].classList
              .add("bounceInUp")
            document.getElementsByClassName("talipButton")[0].classList
              .remove("bounceOutDown")
            document.getElementsByClassName("motivateInputWrapper")[0].classList
              .remove("zoomOut")
          }, 250)

          document.getElementsByClassName("zin")[0].classList
            .remove("zoomIn")

          head.removeChild(style);

        }, this.zinText.length ? this.zinText.length : 5000)
      }
    }
  }
</script>

<style lang='scss' scoped>
  @import url('https://fonts.googleapis.com/css?family=Mali');

  html {
    overflow: hidden;
  }

  * {
    overflow: hidden !important;
    font-family: 'Mali', cursive;
  }

  .motivateInputWrapper {
    display: flex;
    justify-content: center;
    flex-direction: column;
    text-align: center;
    margin-top: 5rem;

    .controlButtons {
      .nextButton {
        margin-top: 0.5em;
      }
    }
  }

  .btn {
    margin-top: 1.5em;
  }

  body {
    height: 100%;
    width: 100%;
    background-color: #333;
  }

  #countdown {
    position: relative;
    margin: auto;
    margin-top: 100px;
    height: 40px;
    width: 40px;
    text-align: center;
  }

  #countdown-number {
    color: white;
    display: inline-block;
    line-height: 40px;
  }

  svg {
    position: absolute;
    top: 0;
    right: 0;
    width: 40px;
    height: 40px;
    transform: rotateY(-180deg) rotateZ(-90deg);
  }

  svg circle {
    stroke-dasharray: 113px;
    stroke-dashoffset: 0px;
    stroke-linecap: round;
    stroke-width: 2px;
    stroke: white;
    fill: none;
  }

  @keyframes countdown {
    from {
      stroke-dashoffset: 0px;
    }
    to {
      stroke-dashoffset: 113px;
    }
  }

</style>
<style>
  @keyframes color-animation {
    0% {
      background: #ad1457;
    }
    50% {
      background: #6a1b9a;
    }
    100% {
      background: #0f9d58;
    }
  }

  body {
    animation: color-animation 10s infinite linear alternate;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
  }

  .zin {
    display: none;
    color: white;
    font-size: 35px;
    text-align: center;
    width: 100vw;
    position: absolute;
    top: 0;
    right: 0;
    left: 0;
    bottom: 0;
    margin-left: auto;
    margin-right: auto;
    /* vertical-align: middle; */
    margin-top: 10%;
  }

  .zin.zoomIn {
    display: block !important;
  }

  .zin.zoomOut {
    display: block !important;
    z-index: -1;
  }

  .title {
    color: white;
    font-weight: bold;
    text-transform: uppercase;
    margin-bottom: 0.5em;
  }
</style>
