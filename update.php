<?php
  include "connect.php";

  if(isset($_POST['submit'])){
    $id = $_POST['user_id'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    
    
    mysqli_query($connect,"update login set name='$name' , phone='$phone' where id='$id'");
  }

?>