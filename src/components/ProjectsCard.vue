<template>
  <div class="main-container">
    <div v-if="showSingleProject && projects.length > 0">
      <div class="project-card">
        <h2>{{ projects[0].title }}</h2>
        <img :src="projects[0].image_path" alt="">
        <p>{{ projects[0].about }}</p>
        <div class="links">
          <a :href="projects[0].link"><img src="../assets/github.png" alt=""></a>
          <a :href="projects[0].link"><img src="../assets/link.png" alt=""></a>
        </div>
      </div>
    </div>
    <div v-else>
      <div v-for="(project, index) in projects" :key="index" class="project-card">
        <h2>{{ project.title }}</h2>
        <img :src="project.image_path" alt="">
        <p>{{ project.about }}</p>
        <div class="links">
          <a :href="project.link"><img src="../assets/github.png" alt=""></a>
          <a :href="project.link"><img src="../assets/link.png" alt=""></a>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import axios from 'axios';

export default {
  data() {
    return {
      projects: [],
      showSingleProject: true,
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
            this.projects = response.data;
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
  justify-content: center;
  align-items: center;
  flex-wrap: wrap;
}

.project-card {
  margin: 10px;
  padding: 10px;
  flex-wrap: wrap;
  background-color: #fff;
  border-radius: 25px;
  box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
}

.project-card img{
  height: 10rem;
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