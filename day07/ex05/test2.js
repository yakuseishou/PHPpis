const IFighter = require('./IFighter.class');
const NightsWatch = require('./NightsWatch.class');

class Varys {

	pretendToFight() {
		console.log("* finds someone to fight for him *");
	}
}

var varys = new Varys();
var nw = new NightsWatch();

nw.recruit(varys);
nw.fight();