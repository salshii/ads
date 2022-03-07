<html>
<body>
<h2 align="center"><u>factors of number<br>inputted number</u></h2>
<form method="get">
<input type="number" placeholder="number" name="num">
<button type="submit" name="submit" value="submit">
check</button>
</form>
<?php
if(isset ($_GET['submit']))
{
$num = $_GET['num'];
echo "factors of $num are ", "<br>";
for($i=1; $i<=$num; $i++)
{
if($num % $i == 0)
{
echo $i."\n" , "<br>";
}
}
}
?>
</body>
</html>