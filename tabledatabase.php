<html>
<body>
<form name="form" method="POST" action="#"
  <label>Roll_Number:</label>
  <input type="text" name="roll"><br><br>
  <label>Name:</label>
  <input type="text" name="name"><br><br>
  <label>Course:</label>
  <input type="text" name="course"><br><br>
  <button name="btn1" type="submit">Insert</button>
  <button name="btn2" type="submit">Update</button>
  <button name="btn3" type="submit">Delete</button>
  <button name="btn4" type="submit">View</button>
</form>
<?php
$con = Mysqli_Connect("localhost","root", "" ,"Akshay" );
if(isset($_POST['btn1']))
{
$roll=$_POST['roll'];
$name=$_POST['name'];
$course=$_POST['course'];
$q="insert into student values('$roll','$name','$course')";
if(mysqli_query($con, $q))
echo "New Record Inserted";
}

if(isset($_POST['btn2']))
{
$roll=$_POST['roll'];
$name=$_POST['name'];
$course=$_POST['course'];
$u="UPDATE `student` SET `Name`='$name',`Course`='$course' WHERE ID='$roll'";
if(mysqli_query($con,$u))
echo "Record Updated";
}

if(isset($_POST['btn3']))
{
$roll=$_POST['roll'];
$d="delete from student where ID='$roll'";
if(mysqli_query($con,$d))
	echo "Record Deleted";
}

if(isset($_POST['btn4']))
{
echo "<table border=1>";
echo "<tr>";
echo "<th> roll no</th>";
echo "<th> Name</th>";
echo "<th> Course</th>";
$v="select * from student";
$q=mysqli_query($con,$v);
while($ar=mysqli_fetch_array($q))
{

echo "<tr><td>$ar[0]</td>";
echo "<td>$ar[1]</td>";
echo "<td>$ar[2]</td></tr>";
}
echo "</table>";
}
?>
</body>
</html>