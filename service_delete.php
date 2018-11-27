<?php
    require 'connectdb.php';
    $booking_service_id = $_GET['booking_service_id'];
    $q = "DELETE FROM booking_service WHERE booking_service_id='$booking_service_id'";
    $result = mysqli_query($dbcon, $q);

    if($result){
      echo '<script>alert("ลบข้อมูลคิวเรียบร้อย")</script>';
    echo '<script>window.location="service_table.php"</script>';

    }else {
       echo "ผิดพลาด".mysqli_error($dbcon);

    }
    mysqli_close($dbcon);
 ?>
