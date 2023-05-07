<?php
  include "connect.php";
   
  $id = $_GET['id'];

  $abc = mysqli_query($connect,"delete from login where id='$id'");
   
  if($abc){
    echo"delelte";
  }
  else{
    echo"not delete";
  }
?>