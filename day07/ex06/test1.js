const Fighter = require('./Fighter.class');
const UnholyFactory = require('./UnholyFactory.class');

class Footsoldier extends Fighter {
    constructor() {
		super.constructor("foot soldier");
	}

	fight(target) {
		console.log("* draws his sword and runs towards " + target + " *");
	}
}

class Archer extends Fighter {
	constructor() {
		super.constructor("archer");
	}

	fight(target) {
		console.log("* shoots arrows at " + target + " *");
	}
}

class Assassin extends Fighter {
	constructor() {
		super.constructor("assassin");
	}

	fight(target) {
		console.log("* creeps behind " + target + " and stabs at it *");
	}
}

class Llama {
	fight(target) {
		console.log("* spits at " + target + " *");
	}
}

let uf = new UnholyFactory();
uf.absorb(new Footsoldier());
uf.absorb(new Footsoldier());
uf.absorb(new Archer());
uf.absorb(new Assassin());
uf.absorb(new Llama());

requested_fighters = Array(
	"foot soldier",
	"llama",
	"foot soldier",
	"archer",
	"foot soldier",
	"assassin",
	"foot soldier",
	"archer",
);

actual_fighters = Array(
);

for (rf in requested_fighters) {
	f = uf.fabricate(rf);
	if (f != null) {
		array_push(actual_fighters, f);
	}
}

targets = Array("the Hound", "Tyrion", "Podrick");

for (f in actual_fighters) {
	for (t in targets) {
		f.fight(t);
	}
}