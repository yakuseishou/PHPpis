#!/usr/bin/php
<?PHP

function ft_split($val)
{
    $arr = explode(" ", $val);
    $result = array_values($arr);
    return ($result);
}

function ccmp($c1, $c2)
{
	$c1 = strtolower($c1);
	$c2 = strtolower($c2);
	if (ctype_alpha($c1))
		$g1 = 1;
	else if (ctype_digit($c1))
		$g1 = 2;
	else
		$g1 = 3;
	if (ctype_alpha($c2))
		$g2 = 1;
	else if (ctype_digit($c2))
		$g2 = 2;
	else
		$g2 = 3;
	if ($g1 != $g2)
		return ($g1 - $g2);
	return (strcmp($c1, $c2));
}

function cus_sort ($str1, $str2)
{
    $j = 0;
	while ($j < strlen($str1) && $j < strlen($str2))
	{
		if (ccmp($str1[$j], $str2[$j]) > 0)
			return (1);
		if (ccmp($str1[$j], $str2[$j]) < 0)
			return (-1);
		$j++;
	}
	if ($j < strlen(str1))
		return (1);
	if ($j < strlen(str2))
		return (-1);
	return (0);
}

if ($argc > 1)
{
    for ($i = 1; $i < $argc; $i++)
    {
        $words = trim($argv[$i]);
        $result = preg_replace('!\s+!', ' ', $words);
        if ($i != 1)
		    $array = array_merge($array, ft_split($result));
	    else
	        $array = ft_split($result);
    }

   usort ($array, "cus_sort");

    for ($i = 0; $i < count($array); $i++) {
        echo $array[$i]."\n";
    }
}

?>