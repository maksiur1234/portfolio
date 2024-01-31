<template>
  <div class="wrapper">
    <div class="main-container">
      <div class="container-one">
        <div class="profile">
          <div class="social-links">
            <p>
              Tutaj będziesz mógł sprawdzić ile około będzie kosztowała usługa, która Cię interesuje.
            </p>
            <p>
              Jeżeli chcesz możesz się również ze mną skontaktować przez formularz kontaktowy w zakładce "Kontakt".
            </p>
            <div class="link">
            </div>
          </div>
        </div>
      </div>
      <div class="container-two">
        <div class="about-me">
          <h1>Kalkulator usług</h1>
          <p>
            Skorzystaj z poniższego kalkulatora, aby oszacować koszt usługi, która Cię interesuje:
          </p>
          <div class="calculator">
            <label for="service-type">Typ usługi:</label>
            <select v-model="selectedService">
              <option value="web-development">Tworzenie stron internetowych</option>
              <option value="app-development">Rozwój aplikacji mobilnych</option>
            </select>

            <label for="project-size">Rozmiar projektu:</label>
            <select v-model="projectSize">
              <option value="small">Mały</option>
              <option value="medium">Średni</option>
              <option value="large">Duży</option>
            </select>

            <label for="project-duration">Czas realizacji (w tygodniach):</label>
            <input type="number" v-model="projectDuration">

            <label for="post-sales-support">Wsparcie posprzedażowe (w miesiącach):</label>
            <input type="number" v-model="postSalesSupport">

            <label for="service-hours">Ilość godzin pracy:</label>
            <input type="number" v-model="hoursOfWork">

            <button @click="calculateCost">Oblicz koszt</button>

            <p v-if="calculatedCost !== null">
              Koszt usługi wyniesie około {{ calculatedCost }} PLN.
            </p>
          </div>
        </div>

        <div class="button-container">
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      selectedService: 'web-development',
      hoursOfWork: 0,
      calculatedCost: null,
      projectSize: 'small',
      projectDuration: 0,
      postSalesSupport: 0,
      projectSizeRates: {
        'small': 1,
        'medium': 1.5,
        'large': 2,
      },
      hourlyRates: {
        'web-development': 50,
        'app-development': 70,
      },
    };
  },
  methods: {
    calculateCost() {
      const rate = this.hourlyRates[this.selectedService] || 0;
      const projectSizeMultiplier = this.projectSizeRates[this.projectSize] || 1;
      const projectDurationMultiplier = this.projectDuration * 0.1;
      const postSalesSupportMultiplier = this.postSalesSupport * 0.05;

      const totalMultiplier = projectSizeMultiplier + projectDurationMultiplier + postSalesSupportMultiplier;

      this.calculatedCost = this.hoursOfWork * rate * totalMultiplier;
    },
  },
};
</script>

<style scoped>
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

.calculator {
  margin-top: 20px;
  padding: 20px;
  border: 1px solid #ddd;
  border-radius: 10px;
  background-color: #fff;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.calculator label {
  display: block;
  margin-bottom: 10px;
}

.calculator select,
.calculator input {
  width: 100%;
  padding: 10px;
  margin-bottom: 15px;
  box-sizing: border-box;
}

.calculator button {
  background-color: #448cc7;
  color: #fff;
  border: none;
  padding: 10px 20px;
  border-radius: 5px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

.calculator button:hover {
  background-color: #34609b;
}

.calculator p {
  margin-top: 15px;
  font-size: 18px;
}
</style>