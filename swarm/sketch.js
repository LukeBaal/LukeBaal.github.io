let tar;
let pop;
function setup() {
	createCanvas(800, 800);
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
