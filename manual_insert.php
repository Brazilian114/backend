<?php
    require 'connectdb.php';


    $ext = pathinfo(basename($_FILES['manual_img']['name']), PATHINFO_EXTENSION);
    $new_image_name='img_'.uniqid().".".$ext;
    $image_path ="C:/carpooll - Copy/src/assets/manual/";
    $upload_path = $image_path.$new_image_name;
    
   $success = move_uploaded_file($_FILES['manual_img']['tmp_name'],$upload_path);


    $manual_img = $new_image_name;
    $manual_caption = $_POST['manual_caption'];
    $manual_head = $_POST['manual_head'];
    $manual_content = $_POST['manual_content'];
    $manual_footer = $_POST['manual_footer'];

  $q = "INSERT INTO manual (manual_img, manual_caption, manual_head,manual_content ,manual_footer )
        VALUES ('$manual_img', '$manual_caption', '$manual_head', '$manual_content', '$manual_footer')";

        $result = mysqli_query($dbcon, $q);

        if ($result) {
          
          
          echo '<script>alert("เพิ่มคู่มือดูแลรถเรียบร้อย")</script>';
          echo '<script>window.location="manual_table.php"</script>';
        } else {
          echo "NO".mysqli_error($dbcon);
        }

        mysqli_close($dbcon);
 ?>
