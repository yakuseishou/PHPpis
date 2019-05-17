<?PHP
function ft_is_sort($argv)
{
    if (count($argv) == 1)
        return (TRUE);
    $val = $argv;
    sort($val);
    for ($i = 0; $i < count($val); $i++)
    {
        if (strcmp ($argv[$i], $val[$i]) != 0)
            return (FALSE);
    }
    return (TRUE);
}
?>