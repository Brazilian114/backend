<?php
  require 'connectdb.php';
  $promo_id = $_GET['promo_id'];
  $q = "DELETE FROM promo WHERE promo_id='$promo_id'";
  $result = mysqli_query($dbcon, $q);

  if($result){
    echo '<script>alert("ลบข้อมูลเรียบร้อย")</script>';
    echo '<script>window.location="promo.php"</script>';
  }else {
    echo "ผิดพลาด".mysqli_error($dbcon);
  }
  mysqli_close($dbcon);
 ?>
