<html>
<body>
        <form method="get">
            <input type="number" placeholder="Number1" name="lower"/>
             <input type="number" placeholder="Number2" name="upper"/>
            <button type="submit" name="submit" value="submit">Check</button>
        </form>

<?php
  if(isset($_GET['submit'])){
    $lower=$_GET['lower'];
    $upper=$_GET['upper'];
    $flag=0;
   $count=0;
  for($i=$l; $i<=$u; $i++)
{
$flag=0;
for($j=2; $j<=$i/2; $j=$j+1)
{
$c=$i%$j;
if($c==0)
{
$flag=1;
}
}
if($flag==0 && $count==0)
{
echo "prime number   <br>";
$count=1;
}
if($flag==0)
echo "$i";
}
?>
</body>
</html>