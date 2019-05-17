const Targaryen = require('./Targaryen.class');

class Viserys extends Targaryen {
}

class Daenerys extends Targaryen {
    resistsFire() {
		return true;
	}
}

let viserys = new Viserys();
let daenerys = new Daenerys();

console.log("Viserys " + viserys.getBurned());
console.log("Daenerys " + daenerys.getBurned());