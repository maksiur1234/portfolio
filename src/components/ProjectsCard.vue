<template>
{{ projectData.ProjectsArray }}

<div v-for="(items, index) in projectData.ProjectsArray" v-bind:key="items">
    <h2>{{ projectData.ProjectsArray[index].Title }}</h2>
</div>
</template>

<script>
import jsonData from "/projects.json"

export default {
    data(){
        return{
            projectData: jsonData
        }
    }
}
</script>

<style>
</style>