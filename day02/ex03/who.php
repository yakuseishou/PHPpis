#!/usr/bin/php
<?php

date_default_timezone_set('America/Los Angelos');
$file = fopen("/var/run/utmpx", "r");
while ($bin = fread($file, 628))
{
	$bin = unpack("a256user/a4id/a32line/ipid/itype/I2time/a256host/i16pad", $bin);
	if ($bin["type"] == 7)
		$user[$bin["line"]] = array("user" => $bin["user"], "time" => $bin["time1"]);
}
ksort($user);
foreach($user as $line => $data)
{
	echo substr($data["user"], 0, 6)."   ".substr($line, 0, 7)."  ".date("M  j H:i", $data["time"])." \n";
}



/*-------------*/
/*
man who => /var/run/utmpx the file who gets info from
fopen(^, "r") --- read only
fread(^, size) !utmpx to marvin
read about
unpack 
and pack format
*/
?>