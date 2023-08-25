<?php include 'header.php'; ?>


<div id="main-content">
    <h2>Delete Record</h2>
    <form class="post-form" action="<?php  $_SERVER['PHP_SELF']?>" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="sid" />
        </div>
        <input class="submit" type="submit" name="deletebtn" value="Delete" />
    </form>
    <?php 
if(isset($_POST['deletebtn']))
{   $id=$_POST["sid"];
    $conn =new mysqli("localhost","root","","crud");
    $sql = "SELECT * FROM student WHERE sid=$id";
    $result=$conn->query($sql);
    if($result->num_rows>0)
    { while($row=$result->fetch_assoc())
        {
  $sql="DELETE FROM student WHERE sid='${id}'";
    $result=mysqli_query($conn,$sql) or die("query unsucessful");
    header("Location:index.php");
    mysqli_close($conn);
        }}}
?>
</div>
</div>
</body>
</html>
