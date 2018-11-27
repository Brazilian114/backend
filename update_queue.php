<?php
      require 'connectdb.php';

      $booking_id = $_POST['booking_id'];
      $username = $_POST['username'];
      $license = $_POST['license'];
      $province_id = $_POST['province_id'];
      $tel = $_POST['tel'];
      $time = $_POST['time'];
      $status_id = $_POST['status_id'];


      $q = "UPDATE booking SET username='$username', license='$license', province='$province_id', tel='$tel', time='$time', status_id='$status_id' WHERE booking_id='$booking_id' ";

      $result = mysqli_query($dbcon, $q);

      if($result){
        echo '<script>alert("แก้ไขข้อมูลคิวเรียบร้อย")</script>';
        echo '<script>window.location="queue_table.php"</script>';
      }else{
        echo "เกิดข้อผิดพลาด".mysqli_error($dbcon);
      }
mysqli_close($dbcon);
 ?>
