<template>
  <div id="projects" class="card primary section scrollspy black-text">
    <!--Projects-->
    <div class="card-content">
      <span class="card-title white-text">Projects</span>
      <div id="project1" class="card scrollspy">
        <!-- Project card -->
        <div class="card-image waves-effect waves-block waves-light">
          <img class="activator" src="static/img/hospital_dbms.PNG">
        </div>
        <div class="card-content">
          <span class="card-title activator">Hospital Database Management System
            <i class="material-icons right">more_vert</i>
          </span>
        </div>
        <div class="card-action">
          <a class="waves-effect waves-light" href="https://lukeibaal.github.io/">See it</a>
        </div>
        <div class="card-reveal">
          <span class="card-title">Hospital DBMS
            <i class="material-icons right">close</i>
          </span>
          <p>
            A Hospital Database Mangement System using the Vuejs framework and Google's Firebase. The purpose of this system is to allow
            patients and visitors to locate the rooms of a patient they want to visit and to allow doctors and staff to see
            patient records, the status of each room, patient/doctor/staff info, etc.
          </p>
        </div>
      </div>
      <div id="project2" class="card scrollspy">
        <!-- Project card -->
        <div class="card-image waves-effect waves-block waves-light">
          <img class="activator" src="static/img/convexhull.png">
        </div>
        <div class="card-content">
          <span class="card-title activator">Convex Hull
            <i class="material-icons right">more_vert</i>
          </span>
        </div>
        <div class="card-reveal">
          <span class="card-title">Convex Hull
            <i class="material-icons right">close</i>
          </span>
          <p>
            A Convex Hull is a conves shape made around a given data set using points from the dataset as vertices. The most common applications
            for a convex hull is in image processing.
          </p>
        </div>
      </div>
      <!--Project card end -->

      <div id="project3" class="card scrollspy black-text">
        <!-- Project card -->
        <div class="card-image waves-effect waves-block waves-light">
          <img class="activator" src="static/img/swarm.png">
        </div>
        <div class="card-content">
          <span class="card-title activator">Particle Swarm
            <i class="material-icons right">more_vert</i>
          </span>
        </div>
        <div class="card-reveal">
          <span class="card-title">Particle Swarm
            <i class="material-icons right">close</i>
          </span>
          <p>
            Using the cursor as a target, the particles in the swarm converge towards the cursor using a genetic algorithm. A typical
            genetic algorithm is made up of three parts.
            <br>
            <br>
            <strong>Selection:</strong>
            Each generation, or iteration of the algorithm, the particle closest to the target is determined.
            <br>
            <br>
            <strong>Crossover:</strong>
            Next, the other particles move towards the best particle by changing their position to be the crossover of the best particle
            and their current position.
            <br>
            <br>
            <strong>Mutation:</strong>
            During the crossover process, there is a random chance of a particles position to get a random offset. This is called mutation
            and though may not seem desirable it is crucial. Without mutation, the particles would converge on the particle
            closest to the target and never move, even if the target is moved. This occurs, since the particles are converging
            to best particle, not the target, so if all particles share the same position, nothing happens.
          </p>
        </div>
        <div class="card-action">
          <a class="waves-effect waves-light" href="swarm/index.html">See it</a>
        </div>
      </div>
      <!--Project card end -->

      <div id="project4" class="card scrollspy black-text">
        <!-- Project card -->
        <div class="card-image waves-effect waves-block waves-light">
          <img class="activator" src="static/img/queens_example.png">
        </div>
        <div class="card-content">
          <span class="card-title activator">N-Queens Problem
            <i class="material-icons right">more_vert</i>
          </span>
        </div>
        <div class="card-reveal">
          <span class="card-title">N-Queens Problem
            <i class="material-icons right">close</i>
          </span>
          <p>
            Given an NxN board, we need to arange N Queens on a chess board such that no queen can capture another. For example, for
            N=8 (As in the picture) 8 queens are aranged on a 8x8 chess board such that no queen can capture another.
            <br>
            <br> The number of solutions for some values of N are as follows:
            <ul class="collection">
              <li class="collection-item">N=5: 10 solutions</li>
              <li class="collection-item">N=6: 4 solutions</li>
              <li class="collection-item">N=7: 40 solutions</li>
              <li class="collection-item">N=8: 92 solutions</li>
              <li class="collection-item">N=9: 352 solutions</li>
            </ul>
          </p>
        </div>
      </div>
      <!--Project card end -->

      <div id="project5" class="card scrollspy">
        <!-- Project card -->
        <div class="card-content black-text">
          <span class="card-title">Career Fair Info Database</span>
          <p>
            A simple webpage displaying the types of students each company at the UOIT Reverse Career Fair, which was held on Oct 5
            <sup>th</sup>, 2017. The data displayed, as well as the links to the companies homepages originate from a firebase database.
          </p>
        </div>
        <div class="card-action">
          <a href="https://fair-company-info.firebaseapp.com/" target="_blank">See it</a>
        </div>
      </div>
      <!--Project card end -->

    </div>
  </div>
</template>

<script>
export default {
  name: 'Projects'
}
</script>
