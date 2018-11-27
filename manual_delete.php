<?php
    require 'connectdb.php';
    $manual_id = $_GET['manual_id'];
    $q = "DELETE FROM manual WHERE manual_id='$manual_id'";
    $result = mysqli_query($dbcon, $q);

    if($result){
      echo '<script>alert("ลบเรียบร้อย")</script>';
          echo '<script>window.location="manual_table.php"</script>';

    }else {
       echo "ผิดพลาด".mysqli_error($dbcon);

    }
    mysqli_close($dbcon);
 ?>
