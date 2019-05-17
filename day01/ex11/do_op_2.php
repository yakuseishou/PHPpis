#!/usr/bin/php
<?PHP

if ($argc != 2) {
    echo "Incorrect Parameters\n";
    exit ;
}
if (preg_match("/^ *(-?[0-9]+) *([\+\-\*\/\%]) *(-?[0-9]+) *$/", $argv[1], $match))
{
    $cal = trim($match[2]);
    $a = trim($match[1]);
    $b = trim($match[3]);
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
}
else
    echo "Syntax Error\n";

?>