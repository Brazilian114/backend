<?php
    require 'connectdb.php';







    
    
    $ext = pathinfo(basename($_FILES['pro_image']['name']), PATHINFO_EXTENSION);
    $new_image_name='img_'.uniqid().".".$ext;
    //$image_path ="images/";
    $image_path2 ="C:/carpooll - Copy/src/assets/promotion/";
    
    //$upload_path = $image_path.$new_image_name;
    $upload_path2 = $image_path2.$new_image_name;
    
   $success = move_uploaded_file($_FILES['pro_image']['tmp_name'],$upload_path2);
   //$success2 = move_uploaded_file($_FILES['pro_image']['tmp_name'],$upload_path2);
   
   if($success==FALSE) {
       echo "ไม่สามารถอัพโหลดรูปภาพได้";
       
       exit;
       
   }


   
   $pro_image = $new_image_name;
  $q = "INSERT INTO promo (pro_image)
        VALUES ('$pro_image')";

        $result = mysqli_query($dbcon, $q);

        if ($result) {
          echo '<script>alert("เพิ่มข้อมูลเรียบร้อย")</script>';
    echo '<script>window.location="promo.php"</script>';
        } else {
          echo "NO".mysqli_error($dbcon);
        }

        mysqli_close($dbcon);
 ?>
