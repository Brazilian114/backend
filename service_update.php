<?php
    require 'connectdb.php';

    $booking_service_id = $_POST['booking_service_id'];
    $service_name = $_POST['service_name'];
    $service_price = $_POST['service_price'];



    $q = "UPDATE booking_service SET service_name='$service_name', service_price='$service_price' WHERE booking_service_id='$booking_service_id' ";

    $result = mysqli_query($dbcon, $q);

    if($result) {

      echo '<script>alert("แก้ไขข้อมูลรียบร้อย")</script>';
      echo '<script>window.location="service_table.php"</script>';

    } else {

      echo "เกิดข้อผิดพลาด".mysqli_error($dbcon);
    }

    mysqli_close($dbcon);
?>