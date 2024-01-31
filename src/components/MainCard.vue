<template>
  <div class="wrapper">
    <div class="header-container">
      <div class="header">
        <div class="header-item">
          <p class="right-margin">Kontakt</p>
        </div>
        <div class="header-item">
          <p class="right">Kalkulator usług</p>
        </div>
      </div>
    </div>
    <div class="main-container">
      <div class="container-one">
        <div class="profile">
          <img src="@/assets/profilepicture.png" alt="">
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
              <a href="#" target="_blank">
                <img src="@/assets/linkedin.png" alt="">
                <h2>LinkedIn</h2>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="container-two">
        <div class="about-me">
          <h1>O mnie</h1>
          <p>{{ truncatedText }}</p>
          <button v-if="!isFullTextVisible" @click="showFullText">Zobacz więcej</button>
        </div>
        <div v-if="isPopupVisible" class="popup">
          <p>{{ fullText }}</p>
          <button @click="hidePopup">Zamknij</button>
        </div>
        <div class="technology-section">
          <div class="logos">
            <img src="@/assets/javascript.png" alt="">
            <img src="@/assets/php.png" alt="">
            <img src="@/assets/vue.png" alt="">
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
      truncatedText: "Jestem ambitnym studentem informatyki na drugim roku, posiadającym fundamenty w tej dziedzinie nauki dzięki ukończonemu technikum informatycznemu i praktyce zawodowej.",
      fullText: "Osiągnięcia i doświadczenia zdobyte w trakcie mojej dotychczasowej ścieżki edukacyjnej i zawodowej w dziedzinie informatyki umożliwiły mi solidne zrozumienie i opanowanie kluczowych aspektów tej dziedziny. Ukończenie technikum informatycznego dostarczyło mi solidnych podstaw teoretycznych, podczas gdy praktyka zawodowa jako PHP Developer poszerzyła moje umiejętności programowania i projektowania aplikacji webowych.\n" +
          "Podczas praktyki miałem okazję aktywnie uczestniczyć w procesie tworzenia aplikacji opartych na PHP. Zajmowałem się zarówno backendem, jak i frontendem, co pozwoliło mi uzyskać pełny obraz procesu tworzenia oprogramowania. Dzięki temu doświadczeniu zyskałem umiejętność efektywnej pracy z językiem PHP, wykorzystywania baz danych oraz projektowania interfejsów użytkownika.\n" +
          "Ponadto, zdobyte przeze mnie umiejętności w trakcie praktyki obejmują również zastosowanie narzędzi i frameworków wspierających rozwój oprogramowania webowego. To doświadczenie praktyczne dostarczyło mi nie tylko technicznej wiedzy, ale również umiejętności pracy w zespole, rozwiązywania problemów oraz efektywnego komunikowania się w kontekście projektów informatycznych.\n" +
          "Jako ambitny student informatyki na drugim roku, moim celem jest dalszy rozwój kompetencji w obszarze programowania, projektowania aplikacji oraz poszerzanie wiedzy o najnowsze technologie i trendy w branży informatycznej. Chciałbym kontynuować zdobywanie praktycznego doświadczenia poprzez udział w projektach studenckich, udoskonalanie umiejętności programistycznych oraz zgłębianie nowych dziedzin informatyki.",
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
  width: 60%;
  background-color: #A0D4FF;
}

.container-one {
  background-color: #1292EE;
  padding: 5%;
  width: 40%;
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
  height: 2rem;
}

.container-two {
  margin: 1.5%;
  width: 60%;
}

.about-me {
  text-align: center;
}

.logos img {
  height: 7.5rem;
}

.button-container {
  margin-top: 5%;
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

.header-container {
  width: 98.3%;
  background-color: #335783;
  padding: 1rem;
}

.header {
  display: flex;
  align-items: center;
}

.header-item {
  color: white;
  cursor: pointer;
}

.header-item:hover {
  text-decoration: underline;
}

.right {
  margin-left: auto;
}

.right-margin {
  margin-right: 1rem;
}

.main-container {
  margin-top: 3rem;
}
</style>