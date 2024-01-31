<template>
  <nav>
    <router-link to="/">Strona główna</router-link> |
    <router-link to="/about">O mnie</router-link>
    <router-link to="/contact"> | Kontakt</router-link>
    <router-link to="/projects"> | Projekty</router-link>
    <router-link to="/calculator"> | Kalkulator usług</router-link>
  </nav>
  <router-view/>
</template>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  background-color: #FFFFFF
}

nav {
  padding: 30px;
}

nav a {
  font-weight: bold;
  color: #2c3e50;
}

nav a.router-link-exact-active {
  color: #42b983;
}
</style>
