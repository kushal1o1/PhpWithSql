<?php
include 'header.php';
?>
<div id="main-content">
    <h2>All Records</h2>
    <?php
    $conn =new mysqli("localhost","root","","crud");
    if($conn->connect_error)
    {
        die('Connection Failed'.$conn->connect_error);
    }
    $sql ="SELECT * FROM student JOIN studentclass WHERE student.sclass=studentclass.cid";
    $result=$conn->query($sql);
    if($result->num_rows>0)
  {
    ?>
    <table cellpadding="7px">
        <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Address</th>
        <th>Class</th>
        <th>Phone</th>
        <th>Action</th>
        </thead>
        <tbody>
            <?php
            while($row=$result->fetch_assoc())
            {

         
            ?>
            <tr>
                <td><?php echo $row["sid"] ?></td>
                <td><?php echo $row["sname"]?></td>
                <td><?php echo $row["saddress"]?></td>
                <td><?phpecho $row['cname'] ?></td>
                <td><?phpecho $row['sphone'] ?></td>
                <td>
                    <a href='edit.php'>Edit</a>
                    <a href='delete-inline.php'>Delete</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
  <?php } ?>
</div>
</div>
</body>
</html>
