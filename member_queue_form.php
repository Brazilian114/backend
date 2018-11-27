<?php
      require 'connectdb.php';

      $quser_id = $_GET['user_id'];

      $quser = "SELECT * FROM customer WHERE user_id='$quser_id' ";

      $resuser = mysqli_query($dbcon, $quser);
      $rowuser = mysqli_fetch_array($resuser, MYSQLI_ASSOC);




?>
<!DOCTYPE html>
<html>
    <head>
      <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>จองคิวลูกค้าประจำ</title>

        <!-- Bootstrap core CSS-->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom fonts for this template-->
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

        <!-- Custom styles for this template-->
        <link href="css/sb-admin.css" rel="stylesheet">

        <style>
            label{
                display: block;
            }
        </style>



    </head>

<body id="page-top">

<nav class="navbar navbar-expand navbar-dark bg-dark static-top">

  <a class="navbar-brand mr-1" href="index.php">Carcare</a>

  <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
    <i class="fas fa-bars"></i>
  </button>



  <!-- Navbar -->
   <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
  <ul class="navbar-nav ml-auto ml-md-0">
    <li class="nav-item dropdown no-arrow mx-1">
      <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-bell fa-fw"></i>
        <span class="badge badge-danger"></span>
      </a>
      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
        <a class="dropdown-item" href="#">Action</a>
        <a class="dropdown-item" href="#">Another action</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#">Something else here</a>
      </div>
    </li>
    <li class="nav-item dropdown no-arrow mx-1">
      <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-envelope fa-fw"></i>
        <span class="badge badge-danger"></span>
      </a>
      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
        <a class="dropdown-item" href="#">Action</a>
        <a class="dropdown-item" href="#">Another action</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#">Something else here</a>
      </div>
    </li>
    <li class="nav-item dropdown no-arrow">
      <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-user-circle fa-fw"></i>
      </a>
      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
        <a class="dropdown-item" href="#">Settings</a>
        <a class="dropdown-item" href="#">Activity Log</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
      </div>
    </li>
  </ul>
</form>
</nav>

<div id="wrapper">

<!-- Sidebar -->
<ul class="sidebar navbar-nav">
<li class="nav-item active">
<a class="nav-link" href="index.php">
<i class="fas fa-fw fa-tachometer-alt" style="font-size:30px;"></i>
<span>เมนูหลัก</span>
</a>
</li>

<li class="nav-item active">
<a class="nav-link" href="queue_walkin_form.php">
<i class="fas fa-fw fa-calendar-plus"></i>
&nbsp <span>เพิ่มคิวล้างรถลูกค้า</span>
</a>
</li>

<li class="nav-item active">
<a class="nav-link" href="queue_table.php">
<i class="fas fa-fw fa-table"></i>
&nbsp <span>รายการคิวลูกค้าทั้งหมด</span>
</a>
</li>



<!--  <li class="nav-item active">
<a class="nav-link" href="member_table.php">
<i class="fas fa-fw fa-user-friends"></i>
&nbsp<span>รายชื่อลูกค้าทั้งหมด</span>
</a>
</li>-->

<li class="nav-item active">
 <a class="nav-link" href="test01.php">
<i class="fas fa-fw fa-user-friends"></i>
&nbsp<span>ลูกค้าประจำร้าน</span>
</a>
</li>

<li class="nav-item active">
<a class="nav-link" href="member_add.php">
<i class="fas fa-fw fa-user-friends"></i>
&nbsp<span>เพิ่มลูกค้าประจำร้าน</span>
</a>
</li>

<li class="nav-item active">
<a class="nav-link" href="service_insert_form.php">
<i class="fas fa-fw fa-wrench"></i>
&nbsp<span>เพิ่มรูปแบบบริการ</span>
</a>
</li>

<li class="nav-item active">
<a class="nav-link" href="promo.php">
<i class="fas fa-star"></i>
&nbsp<span>โปรโมชั่นพิเศษ</span>
</a>
</li>

<li class="nav-item active">
<a class="nav-link" href="manual_table.php">
<i class="fas fa-fw fa-wrench"></i>
&nbsp<span>แก้ไขคู่มือดูแลรถ</span>
</a>
</li>

<li class="nav-item active">
<a class="nav-link" href="manual_insert_form.php">
<i class="fas fa-fw fa-user-friends"></i>
&nbsp<span>เพิ่มคู่มือดูแลรถ</span>
</a>
</li>

  <li  class="nav-item active">
        <a class="nav-link" href="service_table.php"> 
        <i class="fas fa-fw fa-wrench"></i>
        &nbsp<span>แก้ไขรูปแบบบริการ</span>
         </a>
        </li> 

        <li class="nav-item active">
            <a class="nav-link" href="daily_report.php">
             <i class="fas fa-cloud-download-alt"></i>
             &nbsp<span>สรุปรายงานประจำวัน</span>
             </a>
        </li>
        




<!--<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<i class="fas fa-fw fa-folder"></i>
<span>เพิ่มรายการคิว</span>
</a>
<div class="dropdown-menu" aria-labelledby="pagesDropdown">
<h6 class="dropdown-header">เมนูหลัก :</h6>
<a class="dropdown-item" href="queue_walkin_form.php">เพิ่มคิวล้างรถลูกค้า</a>
<a class="dropdown-item" href="service_insert_form.php">เพิ่มรูปแบบบริการ</a>
<div class="dropdown-divider"></div>
<h6 class="dropdown-header">รายการอื่นๆ :</h6>
<a class="dropdown-item" href="member_add.php">เพิ่มลูกค้าประจำ</a>
<a class="dropdown-item" href="promo.php">แก้ไขโปโมชั่น</a>
</div>
</li>-->




<li class="nav-item active">

<a class="dropdown-item" class="fas fa-sign-out-alt" style="font-size:17px;color:white" href="#" data-toggle="modal" data-target="#logoutModal">ออกจากระบบ</a>

</li>







</ul>

    <body class="dg-dark">

      <div class="container">
        <div class="card card-register mx-auto mt-5">
            <div class="card-header">เพิ่มคิว</div>
            <div class="card-body">

      <form action="member_queue_insert.php" method="post" enctype="multipart/form-data" id="form">
  <fieldset>


        <label>email: </label><input type="text" name="email" id="email" size="40" value="<?php echo $rowuser['email']; ?>">
        <label>ชื่อ: </label><input type="text" name="username" id="username" size="40" value="<?php echo $rowuser['username']; ?>">

        <label>ทะเบียน: </label><input type="text" name="license" id="license" size="20" value="<?php echo $rowuser['license']; ?>">
       
        <label>จังหวัดตามทะเบียน</label>
        <?php
            $q = "SELECT * FROM province";
            $result = mysqli_query($dbcon, $q);
         ?>
        <select name="province_id" id="province_id">
          
          <?php
                while ($row = mysqli_fetch_array($result, MYSQLI_NUM)){

                  if ($row[0]==$rowuer['province_id']) {

                        echo "<option value='$row[0]' selected>$row[1]</option>";
                  }  else{

                    echo "<option value='$row[0]'>$row[1]</option>";
                  }


                }
          ?>


        </select>

        <label>โทร: </label><input type="text" name="tel" id="tel" size="30" value="<?php echo $rowuser['tel'];?>">

        
        <label>เวลา </label>
<?php
          date_default_timezone_set('Asia/Bangkok');
           //print_r ( localtime ( time(), true ) );

           $Dt = new \DateTime();
           $hour = $Dt->format('H');
           $minute = $Dt->format('i');
           $second = $Dt->format('s');
           $endHour = '19';


          ?>



          <?php
           if($second > 0 || $minute > 0)
           {
              $Dt->setTime($hour, '0', '0');
              $Dt->add(new \DateInterval('PT1H'));
            }
          ?>


          <select name="time"id="time">
            <option value="">---เลือกเวลา----</option>
         <option>
          <?php
            for ($i= $Dt->format('H'); $i <= $endHour; $i++)
            {
              echo $Dt->format('H:i:s') . '<option>' . PHP_EOL;
              $Dt->add(new \DateInterval('PT1H'));

            }

           ?>
         </option>
         </select>



        <label>บริการ</label>
        <?php
            $q = "SELECT * FROM booking_service";
            $result = mysqli_query($dbcon, $q);
         ?>
        <select name="booking_service_id" id="booking_service_id">
          <option value="">---เลือกบริการ----</option>
          <?php
                while ($row = mysqli_fetch_array($result, MYSQLI_NUM)){
                  echo "<option value='$row[0]'>$row[1]</option>";
                }
          ?>
        </select>



                  <label>สถานะ</label>
                  <label>
                    <input type="radio" name="status_id" value="1" id="status_id_1">รอรับบริการ</label>
                  <label>
                    <input type="radio" name="status_id" value="2" id="status_id_2">กำลังใช้บริการ</label>


          <input type="hidden" name="user_type" id="user_type" value="1">
        <input type="hidden" name="user_id" value="<?php echo $rowuser['user_id']; ?>">
        <br></br>
        <input name="submit" type="submit" id="submit" value="จองคิว">
        <input type=button onClick='window.history.back()' value='ย้อนกลับ'>
    </fieldset>




  </form>
</div>
</div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    </body>



</html>
