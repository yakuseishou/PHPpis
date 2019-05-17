#!/usr/bin/php
<?php

if ($argc == 2)
{
	$file = fopen($argv[1], 'r');
	while (!feof($file))
	{
		$line = fgets($file);
		$line = preg_replace_callback('/<a.*?title="(.*?)">/', function ($f) {
			return (str_replace($f[1], strtoupper($f[1]), $f[0]));
		}, $line);
		$line = preg_replace_callback('/<a.*?>(.*?)</', function ($f) {
			return (str_replace($f[1], strtoupper($f[1]), $f[0]));
		}, $line);
		echo $line;
	}
}

?>