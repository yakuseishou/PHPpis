<?PHP
function ft_split($val)
{
    $arr = explode(" ", $val);
    $result = array_values($arr);
    sort($result);
    return ($result);
}
?>