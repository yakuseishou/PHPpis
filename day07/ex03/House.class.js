class House {

	introduce() {
		console.log(`House ${this.getHouseName()} of ${this.getHouseSeat()} : "${this.getHouseMotto()}"`);
	};
};

module.exports = House;

/*
$> php -f test1.php
House Stark of Winterfell : "Winter is coming"
House Martell of Sunspear : "Unbowed, Unbent, Unbroken"

test2 fatal error
*/