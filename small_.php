<?php
$a = 5;
$b = 7;
$c = 10;
 
if ($a <= $b && $a <= $c)
{
    echo $a . " is the smallest";
 
}else if ($b <= $a && $b <= $c)
{
    echo $b . " is the smallest";
 
}else{
    echo $c . " is the smallest";
}
?>