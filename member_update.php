<?php
       require 'connectdb.php';
        
       
      $email = $_POST['email'];
      $username = $_POST['username'];
      $license = $_POST['license'];
      $province_id = $_POST['province_id'];
      $car_type_id = $_POST['car_type_id'];
      $tel = $_POST['tel'];


$q = "UPDATE customer SET email='$email' ,licensze='$license', province='$province_id', car_type='$car_type_id', tel='$tel'";


    $result = mysqli_query($dbcon, $q);
    
     if($result){
      echo '<script>alert("แก้ไขข้อมูลเรียบร้อย")</script>';
      echo '<script>window.location="member_table.php"</script>';
      }else{
        echo "เกิดข้อผิดพลาด".mysqli_error($dbcon);
      }
mysqli_close($dbcon);
 ?>