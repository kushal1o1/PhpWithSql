<?php
$stid=$_GET['id'];
$conn =new mysqli("localhost","root","","crud");
$sql="DELETE FROM student WHERE sid='${stid}'";
$result=mysqli_query($conn,$sql) or die("query unsucessful");
header("Location:index.php");
mysqli_close($conn);
?>