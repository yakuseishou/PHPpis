const Lannister = require('./Lannister.class');
const Jaime = require('./Jaime.class');
const Tyrion = require('./Tyrion.class');

class Stark {
}

class Cersei extends Lannister {
}

class Sansa extends Stark {
}

let j = new Jaime();
let c = new Cersei();
let t = new Tyrion();
let s = new Sansa();

j.sleepWith(t);
j.sleepWith(s);
j.sleepWith(c);

t.sleepWith(j);
t.sleepWith(s);
t.sleepWith(c);


/*
$> php -f test.php
Not even if I'm drunk !
Let's do this.
With pleasure, but only in a tower in Winterfell, then.
Not even if I'm drunk !
Let's do this.
Not even if I'm drunk !
*/