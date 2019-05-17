#!/usr/bin/php
<?PHP

function ft_split($val)
{
    $wr = explode(" ", $val);
    $result = array_values($wr);
    sort($result);
    return ($result);
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

    sort($array);
    for ($i = 0; $i < count($array); $i++) {
        echo $array[$i]."\n";
    }
}

?>