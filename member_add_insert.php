<?php
    require 'connectdb.php';



    $email = $_POST['email'];
    $password = $_POST['password'];
    $username = $_POST['username'];
    $license = $_POST['license'];
    $tel = $_POST['tel'];
    $province = $_POST['province'];



  $q = "INSERT INTO customer (email, password, username, license, tel, province)
        VALUES ('$email', '$password', '$username', '$license', '$tel', '$province')";

        $result = mysqli_query($dbcon, $q);

        if ($result) {
          echo "OK";
          echo "<a href='member_table.php'>แสดงข้อมูล</a>";
        } else {
          echo "NO".mysqli_error($dbcon);
        }

        mysqli_close($dbcon);
 ?>
