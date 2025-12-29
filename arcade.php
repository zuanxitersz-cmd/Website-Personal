<?php
ob_start();
session_start();
date_default_timezone_set("Asia/Jakarta");
include('config/koneksi.php');
$sid = session_id();
$sql_0 = mysqli_query($conn,"SELECT * FROM `tb_seo` WHERE cuid = 1") or die(mysqli_error());
$s0 = mysqli_fetch_array($sql_0);
$urlweb = $s0['urlweb'];
$urlwebs = $s0['urlweb'];
$pengguna = $s0['user'];
$sql_1a = mysqli_query($conn,"SELECT * FROM `tb_social` WHERE user = '$pengguna'") or die(mysqli_error());
$s1a = mysqli_fetch_array($sql_1a);
$sql_1b = mysqli_query($conn,"SELECT * FROM `tb_user` WHERE user = '$pengguna'") or die(mysqli_error());
$s1b = mysqli_fetch_array($sql_1b);
$ip = $_SERVER['REMOTE_ADDR'];
$date = date('Y-m-d');
$stat = mysqli_query($conn,"INSERT INTO `tb_stat` (`ip`, `date`, `hits`, `page`, `user`) VALUES ('$ip', '$date', 1, 'Arcade', '$pengguna')") or die (mysqli_error());
$hari = array('Senin','Selasa','Rabu','Kamis','Jumat','Sabtu','Minggu');

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Arcade | <?php echo $s0['instansi']; ?></title>
  <meta name="description" content="<?php echo $s0['deskripsi']; ?>">
  <meta name="keywords" content="<?php echo $s0['keyword']; ?>">
  <meta property="og:title" content="<?php echo $s0['instansi']; ?>"/>
  <meta property="og:description" content="<?php echo $s0['deskripsi']; ?>" />
  <meta property="og:url" content="<?php echo $urlweb; ?>" />
  <meta property="og:image" content="<?php echo $urlweb; ?>/upload/<?php echo $s0['image']; ?>" />
  <meta name="resource-type" content="document" />
  <meta http-equiv="content-type" content="text/html; charset=US-ASCII" />
  <meta http-equiv="content-language" content="en-us" />
  <meta name="author" content="<?php echo $urlweb; ?>" />
  <meta name="contact" content="<?php echo $urlweb; ?>" />
  <meta name="copyright" content="Copyright (c) <?php echo $urlweb; ?>. All Rights Reserved." />
  <meta name="robots" content="index, nofollow">

  <link rel="shortcut icon" type="image/x-icon" href="<?php echo $urlweb; ?>/upload/favicon.png">
  
  <link rel="stylesheet" href="<?php echo $urlweb; ?>/assets/plugins/summernote/dist/summernote-bs4.css"/>
  <!-- simplebar CSS-->
  <link href="<?php echo $urlweb; ?>/assets/plugins/simplebar/css/simplebar.css" rel="stylesheet"/>
  <!-- Bootstrap core CSS-->
  <link href="<?php echo $urlweb; ?>/assets/css/bootstrap.min.css" rel="stylesheet"/>
  <!--Data Tables -->
  <link href="<?php echo $urlweb; ?>/assets/plugins/bootstrap-datatable/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css">
  <link href="<?php echo $urlweb; ?>/assets/plugins/bootstrap-datatable/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css">
  <!-- animate CSS-->
  <link href="<?php echo $urlweb; ?>/assets/css/animate.css" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="<?php echo $urlweb; ?>/assets/css/icons.css" rel="stylesheet" type="text/css"/>
  <!-- Custom Style-->
  <link href="<?php echo $urlweb; ?>/assets/css/style-main.css" rel="stylesheet"/>
  <link href="<?php echo $urlweb; ?>/assets/css/owl.carousel.css" rel="stylesheet"/>
  <link href="<?php echo $urlweb; ?>/assets/css/owl.carousel.min.css" rel="stylesheet"/>
</head>

<body>

  <!-- Start wrapper-->
  <div id="wrapper">
    <header>
      <?php include('header.php'); ?>
    </header>

    <section class="mt-2 d-none d-sm-block">
      <div class="container">
        <div class="boxInfo">
          <div class="iconAlert">
            <i class="fa fa-volume-high"></i>
          </div>
          <div class="contentAlert">
            <marquee style="color: #fff;">
              <?php echo $s0['news']; ?>
            </marquee>
          </div>
        </div>
      </div>
    </section>

    <section class="mt-2 d-block d-sm-none">
      <div class="container-fluid">
        <div class="boxInfo">
          <div class="iconAlert">
            <i class="fa fa-volume-high"></i>
          </div>
          <div class="contentAlert">
            <marquee style="color: #fff;">
              <?php echo $s0['news']; ?>
            </marquee>
          </div>
        </div>
      </div>
    </section>

    <section class="mt-2">
      <div class="container">
        <div class="breadcrumb">
          <a href="<?php echo $urlweb; ?>" class="mr-2">Beranda</a> <i class="fas fa-chevron-right" style="font-size: 10px; margin-top: 6px;"></i> <span class="ml-2" style="color: #FFB302;">Arcade</span>
        </div>
      </div>
    </section>

    <div class="mobile mt-2 mb-3 d-block d-sm-none">
      <div class="mobileNavWrapper">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo $urlweb; ?>/slot/">
              <img src="<?php echo $urlweb; ?>/upload/icon/menu2/slots.b9a2790.svg" style="width: 40px; height: 40px; display: block; margin: 0 auto; margin-bottom: 3px;">
              Slots
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo $urlweb; ?>/poker/">
              <img src="<?php echo $urlweb; ?>/upload/icon/menu2/poker.54e041a.svg" style="width: 40px; height: 40px; display: block; margin: 0 auto; margin-bottom: 3px;">
              Poker
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo $urlweb; ?>/sport/">
              <img src="<?php echo $urlweb; ?>/upload/icon/menu2/sports.a310c3c.svg" style="width: 40px; height: 40px; display: block; margin: 0 auto; margin-bottom: 3px;">
              Sports+
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo $urlweb; ?>/casino/">
              <img src="<?php echo $urlweb; ?>/upload/icon/menu2/casino.83bbddf.svg" style="width: 40px; height: 40px; display: block; margin: 0 auto; margin-bottom: 3px;">
              Casino
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo $urlweb; ?>/fishing/">
              <img src="<?php echo $urlweb; ?>/upload/icon/menu2/fishing.e0181ef.svg" style="width: 40px; height: 40px; display: block; margin: 0 auto; margin-bottom: 3px;">
              Fishing
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo $urlweb; ?>/lotto/">
              <img src="<?php echo $urlweb; ?>/upload/icon/menu2/lotto.7791847.svg" style="width: 40px; height: 40px; display: block; margin: 0 auto; margin-bottom: 3px;">
              Lotto
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo $urlweb; ?>/arcade/">
              <img src="<?php echo $urlweb; ?>/upload/icon/menu2/arcade.b036a75.svg" style="width: 40px; height: 40px; display: block; margin: 0 auto; margin-bottom: 3px;">
              Arcade
            </a>
          </li>
        </ul>
      </div>
    </div>

    <section class="mt-2 mb-3">
      <div class="container">
        <img src="<?php echo $urlweb; ?>/upload/icon/poker_not_found.png" class="img-fluid" style="display: block; margin: 0 auto;">
        <h3 class="text-center" style="margin-bottom: 100px;">Game Sedang Maintenance</h3>
      </div>
    </section>  
    
    <!--Start footer-->
    <?php include('footer.php'); ?>
    
</body>
</html>

