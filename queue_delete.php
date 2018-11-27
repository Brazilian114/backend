<?php
    require 'connectdb.php';
    $booking_id = $_GET['booking_id'];
    $q = "DELETE FROM booking WHERE booking_id='$booking_id'";
    $result = mysqli_query($dbcon, $q);

    if($result){
      echo '<script>alert("ลบข้อมูลคิวเรียบร้อย")</script>';
    echo '<script>window.location="queue_table.php"</script>';

    }else {
       echo "ผิดพลาด".mysqli_error($dbcon);

    }
    mysqli_close($dbcon);
 ?>
