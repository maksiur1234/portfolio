<template>
  <div class="main-container">
    <div v-for="(project, index) in projects" :key="index" class="project-card animate__animated animate__fadeInUp" :style="{ 'animation-delay': `${index * 0.1}s` }">
      <h2>{{ project.Title }}</h2>
      <img :src="project.Image" alt="">
      <p>{{ project.About }}</p>
      <div class="links">
        <a :href="project.Link"><img src="../assets/github.png" alt=""></a>
      </div>
    </div>
  </div>
</template>

<script>
import 'animate.css'; // Import animate.css styles
import staticProjects from './projects.json'; // Import your static projects

export default {
  data() {
    return {
      projects: [],
    };
  },
  mounted() {
    this.projects = staticProjects.ProjectsArray;
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
  width: 100%;
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
