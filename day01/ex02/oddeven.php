#!/usr/bin/php
<?PHP

while (!feof(STDIN)) {
    echo ("Enter a number: ");
    $val = trim(fgets(STDIN));
    if (feof(STDIN))
    {
        echo "\n";
        exit ();
    }
    if (is_numeric($val))
    {
        if ($val % 2 == 0)
            echo "The number ".$val." is even\n";
        else
            echo "The number ".$val." is odd\n";
    }
    else
        echo $val." is not a number\n";
}

?>