class Neighbourhood{
  constructor(){
    this.population = [];
    this.popSize = 200;
    this.best;
    this.mr = 0.005;

    this.init();
  }

  init(){
    for (let i=0; i < this.popSize; i++){
      this.population.push(new Particle());
    }
  }

  calcBest(){
    this.population[0].calcFitness();
    this.best = this.population[0];
    for (let i=1; i < this.popSize; i++){
      this.population[i].calcFitness();
      if (this.population[i].fitness < this.best.fitness){
        this.best = this.population[i];
      }
    }
    //Debug code to show the current best
    // stroke(0,255,0);
    // fill(0,255,0);
    // ellipse(this.best.pos.x, this.best.pos.y, 5);
  }

  mutation(){
    for (let i=0; i < this.popSize; i++){
      let r = random();
      if (r < this.mr){
        let x = this.population[i].pos.x;
        let y = this.population[i].pos.y;

        let off = this.population[i].fitness*0.01;
        off = constrain(off, 5, 100);

        this.population[i].pos.x = random(x - off, x + off);
        this.population[i].pos.y = random(y - off, y + off);
      }
    }
  }

  crossover(){
    for(let i=0; i < this.popSize; i++){
      let coord = floor(random(2));
      let child = new Particle();
      if (coord === 0){
        child.pos = createVector(this.population[i].pos.x, this.best.pos.y);
      }else{
        child.pos = createVector(this.best.pos.x, this.population[i].pos.y);
      }
      this.selection(i, child);
    }
  }

  selection(index, child){
    //Selection
    let r = random();
    if (r < 0.5){
      this.population[index] = child
    }
  }

  show(){
    stroke(255);
    fill(255);
    for (let i=0; i < this.popSize; i++){
      ellipse(this.population[i].pos.x, this.population[i].pos.y, 5);
    }
  }
}
