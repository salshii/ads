<html>
<body>
<?php
$a=array(20,15,8,1,14,2);
echo "Array before sorting";
foreach($a as $i)
{
echo "\n" , "$i";
}
echo "</br> Array after sorting";
ArraySort($a);
function ArraySort($a)
{
$n = count($a);
for($i=0; $i<$n-1; $i++)
{
for($j=0; $j<$n-1; $j++)
{
if($a[$i] > $a[$j])
{
$temp = $a[$i];
$a[$i] = $a[$j];
$a[$j] = $temp;
}
}
}
foreach($a as $i)
{
echo "\n" , "$i";
}
}
?>
</body>
</html>