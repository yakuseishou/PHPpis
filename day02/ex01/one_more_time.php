#!/usr/bin/php
<?php

function transformMonth($x)
{
	$array = array("Janvier" => 1,
				   "Fevrier" => 2,
				   "Mars" => 3,
				   "Avril" => 4,
				   "Mai" => 5,
				   "Juin" => 6,
				   "Juillet" => 7,
				   "Aout" => 8,
				   "Septembre" => 9,
				   "Octobre" => 10,
				   "Novembre" => 11,
				   "Decembre" => 12);
	return $array[$x];
}

if ($argc != 2) {
    "Wrong Format\n";
    exit ;
}

$day = "Lundi|Mardi|Mercredi|Jeudi|Vendredi|Samedi|Dimanche";
$month = "Janvier|Fevrier|Mars|Avril|Mai|Juin|Juillet
        |Aout|Septembre|Octobre|Novembre|Decembre";
$date = "[0-9]{1,2}";
$year = "[0-9]{4}";
$time = "[0-9]{2}";

if (preg_match("/($day) ($date) ($month) ($year) ($time):($time):($time)/",
        $argv[1], $match))
{
    date_default_timezone_set("Europe/Paris");
    echo mktime($match[5], $match[6], $match[7],
                transformMonth($match[3]), $match[2], $match[4]);
}    
else
    echo "Wrong Format";
echo "\n";

?>