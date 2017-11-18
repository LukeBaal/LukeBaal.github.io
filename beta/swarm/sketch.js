let tar;
let pop;
function setup() {
	let canvas = createCanvas(width*4, height*4);
	canvas.parent('canvas-holder');
	tar = new Target();
	pop = new Neighbourhood();

}

function draw() {
	background(51);
	tar.update();
	tar.show();

	pop.show();
	pop.calcBest();
	pop.mutation();
	pop.crossover();

}
