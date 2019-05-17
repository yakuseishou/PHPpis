#!/usr/bin/php
<?php

if ($argc < 2)
    exit ;
$words = trim($argv[1]);
$result = preg_replace('!\s+!', ' ', $words);
echo $result."\n";

?>