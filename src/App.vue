<template>
  <div id="app">
    <Navbar />
    <div class="fixed-action-btn hide-on-small-only">
      <a href="#" class="btn-floating btn-large primary waves-effect">
        <i class="large material-icons">arrow_upward</i>
      </a>
    </div>
    <div class="container">
      <div class="row">
        <div class="col s12 m7">
          <About />
          <Projects />
        </div>
        <div class="col s12 m5">
          <Contact />
          <Skills />
          <Education />
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import M from 'materialize-css'
import Navbar from './components/Navbar'
import About from './components/About'
import Projects from './components/Projects'
import Contact from './components/Contact'
import Skills from './components/Skills'
import Education from './components/Education'

export default {
  name: 'App',
  components: {
    Navbar,
    About,
    Projects,
    Contact,
    Skills,
    Education
  },
  mounted () {
    M.AutoInit()
  }
}
</script>
