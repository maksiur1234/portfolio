<template>
  <div class="main-container">
      <div class="container-one">
        <div class="profile">
          <img src="../assets/profilepicture.png" alt="">
          <h3>Name</h3>
          <p>Software Develepore</p>
          <div class="social-links">
              <div class="link">
                <a href="">
                <img src="../assets/github.png" alt="">
                <h2>GitHub</h2>
              </a>
              </div>
              <div class="link">
                <a href="">
                <img src="../assets/linkedin.png" alt="">
                <h2>LinkedIn</h2>
              </a>
              </div>
          </div>
        </div>
      </div>
      <div class="container-two">
        <div class="about-me">
          <h1>O mnie</h1>
          <p>Nachama opis o mnie </p>
        </div>
        <div class="technology-section">
          <div class="logos">
            <img src="../assets/javascript.png" alt="">
            <img src="../assets/php.png" alt="">
            <img src="../assets/vue.png" alt="">
          </div>
        </div>
        <div class="button-container">
          <div class="projects-button">
            <a href="">Moje projekty</a>
          </div>
          <div class="projects-button">
            <a href="">CV</a>
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
  img {
    height: 200px;
  }
  .main-container {
    display: flex;
    flex-direction: row;
    background-color: rgb(145, 145, 145);
    border-radius: 25px;
  }

  .container-one {
    background-color: #faa5a5ee;
    padding: 5%;
    width: 40%;
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
    height: 2rem;
  }
  .container-two {
    background-color: rgb(157, 123, 197);
    margin: 1.5%;
    width: 60%;
  }

  .about-me {
    text-align: center;
  }

  .logos {
    height: 1.5rem;
  }

  .button-container {
    margin-top: 5%;
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
  }

  .projects-button {
    background-color: #df60ff;
    border-radius: 15px;
    padding: 5px;
    margin: 5px;
  }
  .projects-button a{
    text-decoration: none;
    color: #2c3e50;
    color: fff;
  }
</style>
