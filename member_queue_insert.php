<?php
    require 'connectdb.php';






    $user_id = $_POST['user_id'];
    $username = $_POST['username'];
    $license = $_POST['license'];
    $province_id = $_POST['province_id'];
    $tel = $_POST['tel'];
    $time_id = $_POST['time_id'];
    $booking_service_id= $_POST['booking_service_id'];
    $status_id = $_POST['status_id'];
    $user_type = $_POST['user_type'];

  $q = "INSERT INTO booking (username, license, province, tel, time_id, booking_service_id, status_id, user_type, user_id_fk)
        VALUES ('$username', '$license', '$province_id', '$tel', '$time_id', '$booking_service_id', '$status_id', '$user_type','$user_id')";

        $result = mysqli_query($dbcon, $q);

        if ($result) {
          echo "OK";
          echo "<a href='queue_table.php'>แสดงข้อมูล</a>";
        } else {
          echo "NO".mysqli_error($dbcon);
        }

        mysqli_close($dbcon);
 ?>
