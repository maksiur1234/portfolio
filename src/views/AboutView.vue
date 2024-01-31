<template>
  <div class="wrapper">
    <div class="main-container">
      <div class="container-one">
        <div class="profile">
          <img src="@/assets/profilepicture.png" alt="">
          <h2>Maksymilian Robak</h2>
          <h2>Software Developer</h2>
          <div class="social-links">
            <p>
              Cześć! Nazywam się Maksymilian Robak. Jestem pasjonatem programowania i tworzenia nowoczesnych aplikacji webowych.
              Obecnie pracuję jako Software Developer, a moim celem jest stale rozwijać się w dziedzinie informatyki.
            </p>
            <p>
              Zapraszam do kontaktu poprzez moje profile społecznościowe:
            </p>
            <div class="link">
              <a href="https://github.com/maksiur1234?tab=repositories" target="_blank">
                <img src="@/assets/facebook.png" alt="">
                <h2>Facebook</h2>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="container-two">

          <h3>Witaj na mojej przestrzeni internetowej! Jestem Maks, podróżnik światem technologii, entuzjasta sportu i pasjonat motoryzacji. Tutaj znajdziesz kawałek mojego życia, gdzie technologia splata się z pasjami, tworząc fascynujący mix zainteresowań.</h3>
        <p>
          Od najwcześniejszych lat moje serce zawsze biło w rytmie kodu, a fascynacja technologią towarzyszy mi każdego dnia. Nieustannie poszukuję nowych wyzwań, by rozwijać się w świecie dynamicznych zmian. Jednak życie to nie tylko linie kodu na ekranie komputera!

          Poza światem programowania, oddaję się pasjom, które sprawiają, że życie nabiera barw. Sport to dla mnie nie tylko zdrowy styl życia, ale także niekończąca się przygoda, pełna rywalizacji i zdobywania nowych umiejętności. Motoryzacja? To dla mnie więcej niż tylko środki transportu – to pasja, która przyspiesza bicie serca i dodaje smaku każdej podróży.

          Ta strona to miejsce, w którym dzielę się z Tobą nie tylko moimi projektami i osiągnięciami zawodowymi, ale także chcę pokazać, że za każdym kodem kryje się człowiek z pasjami i marzeniami. Zapraszam Cię do odkrywania tego kawałka mojego świata. Mam nadzieję, że znajdziesz tu inspirację do podążania za swoimi pasjami i spełniania marzeń.
        </p>
        <div class="slider-container">
          <div class="swiper-container">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <img src="@/assets/ja.png" alt="Slider Image 1">
              </div>
              <div class="swiper-slide">
                <img src="@/assets/hs.jpg" alt="Slider Image 2">
              </div>
              <div class="swiper-slide">
                <img src="@/assets/e30.jpg" alt="Slider Image 3">
              </div>
            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import Swiper from 'swiper';
import 'swiper/swiper-bundle.css';

export default {
  mounted() {
    new Swiper('.swiper-container', {
      loop: true,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      autoplay: {
        delay: 5000,
        disableOnInteraction: false,
      },
    });
  },
};
</script>

<style scoped>
body {
  margin: 0;
  padding: 0;
  font-family: 'Arial', sans-serif;
  background-color: #f8f9fa;
}

.wrapper {
  display: flex;
  flex-direction: column;
  align-items: center;
}

.main-container {
  margin-top: 5%;
  display: flex;
  flex-direction: row;
  border-radius: 25px;
  width: 90%;
  background-color: #A0D4FF;
  box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.24);
}

.container-one {
  background-color: #1292EE;
  padding: 5%;
  width: 30%;
  border-radius: 25px;
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
  background-color: #add9ff;
  border-radius: 15px;
  box-shadow: 0px 3px 6px rgba(0, 0, 0, 0.1);
  padding: 2rem;
}

.container-two p {
  opacity: 0;
  transform: translateY(20px);
  animation: fadeInUp 1s ease-out forwards;
  animation-delay: 0.5s; /* Delay the animation */
  position: relative;
  color: #34495e; /* Adjust text color */
}

.container-two p::before {
  content: "";
  position: absolute;
  width: 100%;
  height: 2px;
  bottom: 0;
  left: 0;
  background: linear-gradient(90deg, #3498db, #ffffff, #3498db); /* Add a gradient border */
  transform-origin: bottom right;
  transform: scaleX(0);
  transition: transform 0.3s;
}

.container-two p:hover::before {
  transform-origin: bottom left;
  transform: scaleX(1);
}

.container-two p::after {
  content: "";
  position: absolute;
  width: 100%;
  height: 4px;
  bottom: -4px;
  left: 0;
  background: #3498db; /* Add a solid bottom border */
  transform: scaleX(0);
  transform-origin: bottom right;
  transition: transform 0.3s;
}

.container-two p:hover::after {
  transform-origin: bottom left;
  transform: scaleX(1);
}

.container-two h2 {
  color: #3498db;
}

.container-two a {
  color: #3498db;
  text-decoration: none;
  font-weight: bold;
}

.container-two a:hover {
  text-decoration: underline;
}

.container-two hr {
  margin: 20px 0;
  border: 0;
  border-top: 2px solid #3498db;
}

.logos img {
  height: 7.5rem;
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

.slider-container {
  margin-top: 20px;
  max-width: 30%;
  margin-left: auto;
  margin-right: auto;
}

.swiper-pagination {
  position: relative;
  bottom: 10px;
}

.swiper-pagination-bullet {
  width: 10px;
  height: 10px;
  background-color: #3498db;
  opacity: 0.7;
  margin: 0 5px;
  border-radius: 50%;
}

.swiper-slide img {
  width: 100%;
  height: 300px;
  object-fit: cover;
  border-radius: 8px;
}

.container-two p {
  opacity: 0;
  transform: translateY(20px);
  animation: fadeInUp 1s ease-out forwards;
  animation-delay: 0.5s;
}

@keyframes fadeInUp {
  to {
    opacity: 1;
    transform: translateY(0);
  }
}
</style>
