const fs = require('fs');

class Color {

	static doc() {
		return (fs.readFileSync('./Color.doc.txt').toString());
	}

	constructor([red, green, blue]) {
		if (green == undefined || blue == undefined)
		{
			red = Math.floor(red);
			this.red = (red >> 16) % 256;
			this.green = (red >> 8) % 256;
			this.blue = red % 256;
		}
		else
		{
			this.red = Math.floor(red);
			this.green = Math.floor(green);
			this.blue = Math.floor(blue);
		}

		if (Color.verbose)
			console.log(`${this}` + " constructed.");
	}

	add (color2) {
		const result = new Color(
            [this.red + color2.red, 
            this.green + color2.green, 
            this.blue + color2.blue]);
		return (result);
	}

	sub (color2) {
		const result = new Color([this.red - color2.red, this.green - color2.green, this.blue - color2.blue]);
		return (result);
	}

	mult (num) {
		const result = new Color([this.red * num, this.green * num, this.blue * num]);
		return (result);
	}

    toString() {
        return (`Color ( red: ${this.red.toString().padStart(3, ' ')}, green: ${this.green.toString().padStart(3, ' ')}, blue: ${this.blue.toString().padStart(3, ' ')} )`);
    }

}

Color.verbose = false;

module.exports = Color;