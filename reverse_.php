<html>
<body>
<h2 align="center"><u>Reverse of number using function</u></h2>
<form method="get">
<input type="number" placeholder="number" name="n_number">
<button type="submit" name="n_submit" value="submit">
check</button>
</form>
<?php
if(isset ($_GET['n_submit']))
{
$number = $_GET['n_number'];
function reverse (int $temp)
{
$remainder = 0;
$reverse = 0;
while($temp != 0)
{
$remainder = $temp % 10;
$reverse = $reverse * 10 + $remainder;
$temp = (int) ($temp/10);
}
return $reverse;
}
echo "reverse of $number" , "<br>" .reverse  ($number);
}
?>
</body>
</html>