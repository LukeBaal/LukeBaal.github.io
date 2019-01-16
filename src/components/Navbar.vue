<template>
  <div>
    <nav class="nav-extended primary">
      <div class="nav-wrapper">
        <a href="#!" data-target="mobile-nav" class="sidenav-trigger">
          <i class="material-icons">menu</i>
        </a>

        <ul id="dropdown1" class="dropdown-content">
          <li v-for="(project, index) in projects" :key="project.id">
            <a :href="'#project' + index">{{ project.name }}</a>
          </li>
        </ul>
        <ul class="left hide-on-med-and-down">
          <li>
            <a href="#">Home</a>
          </li>
          <li>
            <a href="#about">About</a>
          </li>
          <li>
            <a href="#contact">Contact</a>
          </li>
          <li>
            <a class="dropdown-trigger" href="#!" data-target="dropdown1">Projects
              <i class="material-icons right">arrow_drop_down</i>
            </a>
          </li>
          <li>
            <a href="#skills">Skills</a>
          </li>
          <li>
            <a href="#education">Education</a>
          </li>
        </ul>
      </div>
      <!-- <br> -->
      <div class="nav-content">
        <div class="row">
          <!--Header-->
          <div class="hide-on-small-only">
            <!-- Tablet+ screens-->
            <div class="col s12 m6 right-align">
              <img class="responsive-img" style="max-width:30%;" src="img/profile.png" alt="profile-image">
            </div>
            <div class="col s12 m6">
              <h3>Luke Baal</h3>
              <h5>
                <span class="highlight">Software Engineer</span>
              </h5>
              <div class="chip">
                <i class="fab fa-github"></i>
                <a class="black-text" href="https://github.com/LukeBaal" target="_blank">GitHub</a>
              </div>
              <div class="chip">
                <i class="fab fa-gitlab"></i>
                <a class="black-text" href="https://gitlab.com/LukeBaal" target="_blank">GitLab</a>
              </div>
              <div class="chip">
                <i class="fab fa-linkedin"></i>
                <a class="black-text" href="https://www.linkedin.com/in/luke-baal-a53506134" target="_blank">LinkedIn</a>
              </div>
            </div>
          </div>
          <div class="hide-on-med-and-up center-align">
            <!-- Mobile screens -->
            <div class="col s12 m6">
              <img class="responsive-img" style="max-width:50%;" src="img/profile.png" alt="profile-image">
            </div>
            <div class="col s12 m6">
              <h3>Luke Baal</h3>
              <h5><span class="highlight">Software Engineer</span></h5>
              <div class="chip">
                <i class="fab fa-github"></i>
                <a class="black-text" href="https://github.com/LukeBaal">Github</a>
              </div>
              <div class="chip">
                <i class="fab fa-linkedin"></i>
                <a class="black-text" href="https://www.linkedin.com/in/luke-baal-a53506134">LinkedIn</a>
              </div>
            </div>
          </div>
        </div>
        <!--Header End-->
      </div>
      <!-- <br> -->
    </nav>
    <ul id="mobile-nav" class="sidenav" >
      <li>
        <a href="#">Home</a>
      </li>
      <li>
        <a href="#about">About</a>
      </li>
      <li>
        <a href="#contact">Contact</a>
      </li>
      <li>
        <a href="#projects">Projects</a>
      </li>
      <li>
        <a href="#skills">Skills</a>
      </li>
      <li>
        <a href="#education">Education</a>
      </li>
    </ul>
  </div>
</template>

<script>
import db from './firebaseInit';
import M from 'materialize-css';
export default {
  name: 'Navbar',
  data() {
    return {
      projects: []
    };
  },
  created() {
    db
      .collection('projects')
      .orderBy('name')
      .get()
      .then(querySnapshot => {
        querySnapshot.forEach(project => {
          const data = {
            id: project.id,
            name: project.data().name,
            desc: project.data().desc,
            img: null,
            link: null
          };
          if (project.data().img) {
            data.img = project.data().img;
          }
          if (project.data().link) {
            data.link = project.data().link;
          }
          this.projects.push(data);
        });
      });
  },
  mounted() {
    const elems = document.querySelectorAll('.dropdown-trigger');
    M.Dropdown.init(elems);
  }
};
</script>
