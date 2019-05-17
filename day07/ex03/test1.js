const House = require('./House.class');

class HouseStark extends House {
    getHouseName() {
        return "stark";
    }
    getHouseMotto() {
		return "Winter is coming";
	}
	getHouseSeat() {
        return "Winterfell";
    }
}

class HouseMartell extends House {
	getHouseName() {
		return "Martell";
	}
	getHouseMotto() {
		return "Unbowed, Unbent, Unbroken";
	}
	getHouseSeat() {
		return "Sunspear";
	}
}

let houses = Array(new HouseStark(), new HouseMartell());

for (var house in houses) {
	houses[house].introduce();
}