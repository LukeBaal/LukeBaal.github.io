<template>
  <div id="projects" class="card primary section scrollspy black-text">
    <!--Projects-->
    <div class="card-content">
      <span class="card-title white-text">Projects</span>
      <div v-for="(project, index) in projects" :key="project.id">
        <div :id="'project'+index" class="card scrollspy black-text">
          <!-- Project card -->
          <div class="card-image waves-effect waves-block waves-light" v-if="project.img">
            <img class="activator" :src="project.img">
          </div>
          <div class="card-content">
            <span class="card-title activator">{{ project.name }}
              <i class="material-icons right" v-if="project.img">more_vert</i>
            </span>
            <p v-html="project.desc" v-if="!project.img"></p>
          </div>
          <div class="card-reveal" v-if="project.img">
            <span class="card-title">{{ project.name }}
              <i class="material-icons right">close</i>
            </span>
            <p v-html="project.desc"></p>
          </div>
          <div class="card-action" v-if="project.link">
            <a class="waves-effect waves-light" :href="project.link" target="_blank">See it</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import db from './firebaseInit'
import M from 'materialize-css'
export default {
  name: 'Projects',
  data () {
    return {
      projects: []
    }
  },
  created () {
    db.collection('projects').orderBy('name').get().then(querySnapshot => {
      querySnapshot.forEach(project => {
        const data = {
          id: project.id,
          name: project.data().name,
          desc: project.data().desc,
          img: null,
          link: null
        }
        if (project.data().img) {
          data.img = project.data().img
        }
        if (project.data().link) {
          data.link = project.data().link
        }
        this.projects.push(data)
      })
    })
  },
  mounted () {
    var elems = document.querySelectorAll('.scrollspy')
    M.ScrollSpy.init(elems)
  }
}
</script>
