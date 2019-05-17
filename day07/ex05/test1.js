const IFighter = require('./IFighter.class');
const NightsWatch = require('./NightsWatch.class');

class JonSnow {

  fight() {
		console.log("* looses his wolf on the enemy, and charges with courage *");
	}

  isABastard() {
		return true;
	}
}

class MaesterAemon {

	sendRavens() {
		console.log("* sends a raven carrying an important message *");
	}
}

class SamwellTarly {

  fight() {
		console.log("* flees, finds a girl, grows a spine, and defends her to the bitter end *");
	}

  makeHisFatherProud() {
		return false;
	}
}

let jon = new JonSnow();
let aemon = new MaesterAemon();
let sam = new SamwellTarly();
let nw = new NightsWatch();

nw.recruit(jon);
nw.recruit(aemon);
nw.recruit(sam);

nw.fight();
