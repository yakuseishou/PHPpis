const Fighter = require('./Fighter.class');
const UnholyFactory = require('./UnholyFactory.class');

class CrippledSoldier extends Fighter {
	constructor() {
		super.constructor("crippled soldier");
	}
}

let uf = new UnholyFactory();
uf.absorb(new CrippledSoldier());

requested_fighters = Array(
	"crippled soldier",
	"crippled soldier",
	"crippled soldier",
	"crippled soldier",
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