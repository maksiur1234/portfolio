<template>
  <div class="wrapper">
    <div class="main-container">
      <div class="container-one">
        <div class="profile">
          <div class="social-links">
           <h2>W celu kontaktu prosimy o wypełnienie formularza.</h2>
            <h2>Na maila odpowiemy w czasie nie dłuższym niż 2 tygodnie</h2>
          </div>
        </div>
      </div>
      <div class="container-two">
        <div class="about-me">
          <h1>Formularz kontaktowy</h1>
        </div>
        <div class="technology-section">
          <div class="logos">
            <form>
              <label>Imię</label><br>
              <input type="text"><br>
              <label>Nazwisko</label><br>
              <input type="text"><br>
              <label>Email</label><br>
              <input type="email"><br>
              <label width="500px">Treść</label><br>
              <input type="text"><br><br>
              <input type="submit" value="Wyślij">
            </form>
          </div>
          <h2>Prosimy o wypełnienie formularza lub bezpośrednio przez email:</h2>
          <p>mrobak2@edu.cdv.pl</p>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {

}
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
</style>