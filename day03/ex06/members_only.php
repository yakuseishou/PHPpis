<?php

if (($_SERVER['PHP_AUTH_USER'] != "zaz") || ($_SERVER['PHP_AUTH_PW'] != "jaimelespetitsponeys")){
    exit ;
} else {
    $file = file_get_contents('../img/42.png');
    echo "<html><body>
    Hello Zaz<br />
    <img src='data:image/png;base64,iVBORw0KGgoAAAA...
    ...
    ...
    ...6MIHnr2t+eeO4Fr+v/H80AmcVvzqAfAAAAAElFTkSuQmCC'>
    </body></html>".base64_encode($file)."'>\n</body></html>\n";
}
?>