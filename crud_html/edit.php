<?php include 'header.php'; ?>

<div id="main-content">
    <h2>Update Record</h2>
    <?php
    $conn =new mysqli("localhost","root","","crud");
    $sidvar=$_GET['id'];
    $sql ="SELECT * FROM student WHERE sid=${sidvar}";

    $result=$conn->query($sql);
    if($result->num_rows>0)
    { while($row=$result->fetch_assoc())
        {

    ?>

    <form class="post-form" action="updatedata.php" method="post">
      <div class="form-group">
          <label>Name</label>
          <input type="hidden" name="sid" value="<?php echo $row["sid"]?>"/>
          <input type="text" name="sname" value="<?php echo $row["sname"]?>"/>
      </div>
      <div class="form-group">
                  <label>Address</label>
         <input type="text" name="saddress" value="<?php echo $row["saddress"]?>"/>
  </div>
    <div class="form-group">
      <label>Class</label>
         <select name="sclass">
             <option value="<?php echo $row["sclass"]?>" selected disabled>Select Class</option>
               <option value="BE SOFTWARE">BE SOFTWARE</option>
               <option value="BE COMPUTER">BE COMPUTER</option>
               <option value="BIT">BIT</option>
              <option value="CSIT">CSIT</option>
              <option value="BCA ">BCA </option>
             <option value="OTHER">OTHER</option>
          </select>
  </div>
     <div class="form-group">
          <label>Phone</label>
          <input type="text" name="sphone" value="<?php echo $row["sphone"]?>"/>
      </div>
      <input class="submit" type="submit" value="Update"/>
    </form>
    <?php  } } ?>
</div>
</div>
</body>
</html>
