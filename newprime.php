<html>
<body>
<form name="form" action="#" method="POST">
  <label>Lower Limit:</label>
  <input type="text" name="lower"><br><br>
  <label>Upper Limit:</label>
  <input type="text" name="upper"><br><br>
  <button name="submit" type="submit">Submit</button>
</form>
<?php
if(isset($_POST['submit']))
{
$l=$_POST['lower'];
$u=$_POST['upper'];
$flag=0;
$count=0;
for($i=$l;$i<=$u;$i++)
{
$flag=0;
for($j=2;$j<=$i/2;$j++)
{
$c=$i%$j;
if($c==0)
{
$flag=1;
}
}
if($flag==0 && $count==0)
{
echo "Prime Numbers  <br>";
$count=1;
}
if($flag==0)
echo "$i<br>";
}
}
?>
</body>
</html>