<?php
    require 'connectdb.php';



    if (empty ($_POST['username'])){
      echo "กรุณากรอกชื่่อ";
      exit();
    } else {

        $username = $_POST['username'];
    }



    $license = $_POST['license'];
    $tel = $_POST['tel'];
    $province_id = $_POST['province_id'];
    $time = $_POST['time'];
    $status_id = $_POST['status_id'];
    $booking_service_id = $_POST['booking_service_id'];
    $b=implode(",", $booking_service_id);
    $user_type = $_POST['user_type'];


  $q = "INSERT INTO booking (username, license, tel, province, time, status_id, booking_service_id, user_type)
        VALUES ('$username', '$license', '$tel', '$province_id','$time', '$status_id', '$b', '$user_type')";

        $result = mysqli_query($dbcon, $q);

        if ($result) {
          echo '<script>alert("เพิ่มคิวเรียบร้อย")</script>';
          echo '<script>window.location="queue_table.php"</script>';
        } else {
          echo "NO".mysqli_error($dbcon);
        }

        mysqli_close($dbcon);
 ?>
