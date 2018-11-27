<?php
  require 'connectdb.php';
  $user_id = $_GET['user_id'];
  $q = "DELETE FROM customer WHERE user_id='$user_id'";
  $result = mysqli_query($dbcon, $q);

  if($result){
    echo '<script>alert("ลบข้อมูลเรียบร้อย")</script>';
    echo '<script>window.location="mamber_table.php"</script>';
  }else {
    echo "ผิดพลาด".mysqli_error($dbcon);
  }
  mysqli_close($dbcon);
 ?>
