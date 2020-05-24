<?php

$string = $_POST['string'];
function utf8_strrev($str){
    preg_match_all('/./us', $str, $ar);
    return implode(array_reverse($ar[0]));
}
echo "<h1>";
echo utf8_strrev($string);
echo "</h1>";
?>
<a href="/3.php">Назад</a>