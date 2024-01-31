<template>
  <div class="main-container">
    <div v-for="(project, index) in projects" :key="index" class="project-card animate__animated animate__fadeInUp" :style="{ 'animation-delay': `${index * 0.1}s` }">
      <h2>{{ project.title }}</h2>
      <img :src="project.image_path" alt="">
      <p>{{ project.about }}</p>
      <div class="links">
        <a :href="project.link"><img src="../assets/github.png" alt=""></a>
        <a :href="project.link"><img src="../assets/link.png" alt=""></a>
      </div>
    </div>
  </div>
</template>

<script>
import 'animate.css'; // Import animate.css styles
import axios from 'axios';
import staticProjects from '../projects.json'; // Import your static projects

export default {
  data() {
    return {
      projects: [],
    };
  },
  mounted() {
    this.getProjects();
  },
  methods: {
    getProjects() {
      const apiUrl = 'http://localhost:8000/api/projects';

      axios.get(apiUrl)
          .then(response => {
            this.projects = response.data.concat(staticProjects); // Concatenate static projects
            console.log(this.projects);
          })
          .catch(error => {
            console.error('Błąd pobierania projektów:', error);
          });
    },
  },
};
</script>

<style scoped>
.main-container {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
}

.project-card {
  width: 30%;
  margin: 10px;
  padding: 10px;
  background-color: #fff;
  border-radius: 25px;
  box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
}

.project-card img {
  width: 50%;
  height: auto;
}

.links {
  display: flex;
  flex-direction: row;
  align-items: center;
  justify-content: flex-end;
}

.links img {
  height: 1.5rem;
  margin: 5px;
}
</style>
