<?php
    require 'connectdb.php';



    $email = $_POST['email'];
    $password = $_POST['password'];
    $username = $_POST['username'];
    $license = $_POST['license'];
    $tel = $_POST['tel'];
    $province = $_POST['province'];
    $car_type = $_POST['car_type'];



  $q = "INSERT INTO customer (email, password, username, license, tel, province, car_type)
        VALUES ('$email', '$password', '$username', '$license', '$tel', '$province', '$car_type')";

        $result = mysqli_query($dbcon, $q);

        if ($result) {
          echo '<script>alert("เพิ่มลูกค้าเรียบร้อย")</script>';
          echo '<script>window.location="member_table.php"</script>';
        } else {
          echo "NO".mysqli_error($dbcon);
        }

        mysqli_close($dbcon);
 ?>
