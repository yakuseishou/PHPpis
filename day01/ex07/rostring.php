#!/usr/bin/php
<?PHP

function ft_split($val)
{
    $arr = explode(" ", $val);
    $result = array_values($arr);
    return ($result);
}

if ($argc == 1)
    exit;

$words = trim($argv[1]);
$result = preg_replace('!\s+!', ' ', $words);
$arr = ft_split($result);

for ($i = 1; $i < count($arr); $i++)
{
    echo $arr[$i]." ";
}
echo $arr[0]."\n";

?>