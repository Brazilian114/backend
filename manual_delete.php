<?php
    require 'connectdb.php';
    $manual_id = $_GET['manual_id'];
    $q = "DELETE FROM manual WHERE manual_id='$manual_id'";
    $result = mysqli_query($dbcon, $q);

    if($result){
      echo "ลบสำเร็จ";
      echo "<a href='manual_table.php'>ดูข้อมูล</a>";

    }else {
       echo "ผิดพลาด".mysqli_error($dbcon);

    }
    mysqli_close($dbcon);
 ?>
