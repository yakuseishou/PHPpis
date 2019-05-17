const House = require('./House.class');

class DrHouse extends House {
	diagnose() {
		console.log("It's not lupus !");
	}
}

let house = new DrHouse();
house.introduce();
