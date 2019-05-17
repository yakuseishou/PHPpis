#!/usr/bin/php
<?PHP

if ($argc != 4) {
    echo "Incorrect Parameters\n";
    exit ;
}
$cal = trim($argv[2]);
$a = trim($argv[1]);
$b = trim($argv[3]);
if ($cal == "*")
    $result = $a * $b;
else if ($cal == "/")
    $result = $a / $b;
else if ($cal == "%")
    $result = $a % $b;
else if ($cal == "+")
    $result = $a + $b;
else if ($cal == "-")
    $result = $a - $b;

echo $result."\n";

?>