<?php
$sid=$_post['sid'];
 $sname=$_POST['sname'];
 $saddress=$_POST['saddress'];
 $sclass=$_POST['sclass'];
 $sphone=$_POST['sphone'];
 $conn =new mysqli("localhost","root","","crud");
$sql="UPDATE student SET sname='${sname}', saddress='${saddress}' ,sclass='${sclass}' ,sphone='${sphone}' WHERE sid='${sid}'";
$result=mysqli_query($conn,$sql) or die("query unsucessful");
header("Location:index.php");
 mysqli_close($conn);


?>