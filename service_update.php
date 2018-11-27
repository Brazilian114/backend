<?php
    require 'connectdb.php';

    $manual_id = $_POST['manual_id'];
    $manual_img = $_POST['manual_img'];
    $manual_caption = $_POST['manual_caption'];
    $manual_head = $_POST['manual_head'];
    $manual_content = $_POST['manual_content'];
    $manual_footer = $_POST['manual_footer'];



    $q = "UPDATE manual SET manual_img='$manual_img', manual_caption='$manual_caption', manual_head='$manual_head', manual_content='$manual_content' , manual_footer='$manual_footer'
          WHERE manual_id='$manual_id' ";

    $result = mysqli_query($dbcon, $q);

    if($result) {

      echo "แก้ไขเรียบร้อย";
      echo "<hr>";
      echo"<a href='manual_table.php'>แสดงข้อบริการ</a>";

    } else {

      echo "เกิดข้อผิดพลาด".mysqli_error($dbcon);
    }

    mysqli_close($dbcon);
