<?php
$sname=$_POST['sname'];
$saddress=$_POST['saddress'];
$sclass=$_POST['sclass'];
$sphone=$_POST['sphone'];
 $conn =new mysqli("localhost","root","","crud");
 $sql="INSERT INTO student (sname,saddress,sclass,sphone) VALUES ('${sname}','${saddress}','${sclass}','${sphone}')";
 $result=mysqli_query($conn,$sql);
 header("Location:index.php");
 mysqli_close($conn);
?>