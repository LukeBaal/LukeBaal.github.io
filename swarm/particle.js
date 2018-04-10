class Particle{
  constructor(position){
    this.pos = position || createVector(floor(random(width)), floor(random(height)));
    this.best;
    this.vel = p5.Vector.random2D();
    this.acc = p5.Vector.random2D();
    this.fitness;
    this.calcFitness();
  }

  applyForce(force){
    this.acc.add(force);
  }

  calcFitness(){
    this.fitness = pow(tar.pos.x - this.pos.x, 2) + pow(tar.pos.y - this.pos.y, 2);
  }

  update(){
    this.pos.add(this.vel);
    this.vel.add(this.acc);
    this.acc.mult(0);
  }
}
