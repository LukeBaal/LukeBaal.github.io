class Target{
	constructor(){
		this.pos = createVector(width/2, height/2);
	}

	update(){
		this.pos.x = constrain(mouseX, 0, width);
		this.pos.y = constrain(mouseY, 0, height);
	}

	show(){
		stroke(255,0,0);
		fill(255,0,0);
		ellipse(this.pos.x, this.pos.y, 10);
	}
}
