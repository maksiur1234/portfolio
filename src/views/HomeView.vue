<template>
  <div class="wrapper">
    <div class="main-container">
      <div class="container-one">
        <div class="profile">
          <img src="@/assets/ja2.png" alt="" class="avatar">
          <h2>Maksymilian Robak</h2>
          <h2>Software Developer</h2>
          <div class="social-links">
            <div class="link">
              <a href="https://github.com/maksiur1234?tab=repositories" target="_blank">
                <img src="@/assets/github.png" alt="">
                <h2>GitHub</h2>
              </a>
            </div>
            <div class="link">
              <a href="https://pl.linkedin.com/in/maksymilian-robak-4b79a0251?trk=people_directory" target="_blank">
                <img src="@/assets/linkedin.png" alt="">
                <h2>LinkedIn</h2>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="container-two">
        <div class="about-me">
          <h1>Portoflio</h1>
          <p>{{ truncatedText }}</p>
          <button v-if="!isFullTextVisible" @click="showFullText">Zobacz więcej</button>
        </div>
        <div v-if="isPopupVisible" class="popup">
          <p>{{ fullText }}</p>
          <button @click="hidePopup">Zamknij</button>
        </div>
        <div class="technology-section">
          <div class="logos">
            <h1>Technologie</h1>
            <img src="@/assets/javascript.png" alt="" class="tech-icon">
            <img src="@/assets/php.png" alt="" class="tech-icon">
            <img src="@/assets/vue.png" alt="" class="tech-icon">
            <img src="@/assets/laravel.png" alt="" class="tech-icon">
            <img src="@/assets/github.png" alt="" class="tech-icon">
            <img src="@/assets/sql.png" alt="" class="tech-icon">
          </div>
        </div>
        <div class="button-container">
          <div class="projects-button">
            <a href="/projects">Zobacz moje projekty</a>
          </div>
          <div class="projects-button">
            <a href="#" @click.prevent="showCV">CV</a>
          </div>
          <div v-if="isCvVisible" class="popup">
            <iframe src="https://www.dropbox.com/scl/fi/6si9bf5w7ql81zeb0orf1/CV_Maksymilian_Robak-7.pdf?rlkey=egfuafyiqwl2l49rdtzh87er6&dl=0" width="750px" height="750px"></iframe>
            <br>
            <button @click="hideCV">Zamknij</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      isCvVisible: false,
      truncatedText: "Jestem pasjonatem programowania, który z oddaniem tworzy innowacyjne i funkcjonalne aplikacje webowe.\n" +
          "      Od najwcześniejszych lat mojej przygody z kodowaniem, fascynuje mnie potęga technologii i wpływ,\n" +
          "      jaki ma ona na nasz codzienny świat.",
      fullText: "Moja przygoda z programowaniem zaczęła się od prostych stron internetowych, a obecnie zajmuję się\n" +
          "      pełnym spektrum projektowania i rozwijania aplikacji, od frontendu po backend." +
          "W mojej pracy kładę nacisk na tworzenie rozwiązań, które nie tylko są estetyczne, ale przede wszystkim\n" +
          "      dostarczają wartość użytkownikom. Posiadam umiejętności w różnych technologiach, takich jak JavaScript,\n" +
          "      PHP, Vue.js, Laravel, GitHub i SQL." +
          "Moje podejście do projektów opiera się na ciągłym doskonaleniu i eksploracji nowych trendów w branży IT.\n" +
          "      Zapraszam do odkrywania mojego świata programowania, zobacz, co potrafię i jakie projekty udało mi się\n" +
          "      zrealizować z pasją i zaangażowaniem.",
      isFullTextVisible: false,
      isPopupVisible: false,
    };
  },
  methods: {
    showCV() {
      this.isCvVisible = true;
    },
    hideCV() {
      this.isCvVisible = false;
    },
    showFullText() {
      this.isPopupVisible = true;
      this.isFullTextVisible = true;
    },
    hidePopup() {
      this.isPopupVisible = false;
      this.isFullTextVisible = false;
    },
  },
};
</script>

<style scoped>
.popup {
  position: fixed;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  background: white;
  padding: 20px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
  z-index: 999;
}

.wrapper {
  display: flex;
  flex-direction: column;
  align-items: center;
}

img {
  height: 100px;
}

.main-container {
  margin-top: 5%;
  display: flex;
  flex-direction: row;
  border-radius: 25px;
  width: 80%;
  background-color: #A0D4FF;
}

.container-one {
  background-color: #1292EE;
  padding: 5%;
  width: 30%;
  border-radius: 25px;
  box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
}

.profile img {
  height: 5rem;
  border-radius: 50%;
}

.link a {
  text-decoration: none;
  color: #2c3e50;
  font-size: 10px;
}

.link img {
  height: 5rem;
}

.container-two {
  margin: 1.5%;
  width: 80%;
}

.about-me {
  text-align: center;
}

.logos img {
  height: 7.5rem;
}

.button-container {
  margin-top: 10%;
  display: flex;
  flex-direction: row;
  justify-content: center;
  align-items: center;
}

.projects-button {
  background-color: #448cc7;
  border-radius: 15px;
  padding: 5px;
  margin: 5px;
}

.projects-button a {
  text-decoration: none;
  color: #000000;
}

@media only screen and (max-width: 950px) {
  .main-container {
    width: 95%;
  }
}

.main-container {
  margin-top: 3rem;
}

.tech-icon {
  height: 7.5rem;
  transition: transform 0.3s ease-in-out;
}

.tech-icon:hover {
  transform: translateY(-25px);
}

.avatar {
  width: 80px;
}
</style>