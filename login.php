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

$stat = mysqli_query($conn,"INSERT INTO `tb_stat` (`ip`, `date`, `hits`, `page`, `user`) VALUES ('$ip', '$date', 1, 'Masuk Akun', '$pengguna')") or die (mysqli_error());
$hari = array('Senin','Selasa','Rabu','Kamis','Jumat','Sabtu','Minggu');

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Masuk Akun | <?php echo $s0['instansi']; ?></title>
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
          <a href="<?php echo $urlweb; ?>" class="mr-2">Beranda</a> <i class="fas fa-chevron-right" style="font-size: 10px; margin-top: 6px;"></i> <span class="ml-2" style="color: #FFB302;">Masuk Akun</span>
        </div>
      </div>
    </section>

    <section class="mt-2 mb-3">
      <div class="container">
        <div class="row">
          <div class="col-sm-2"></div>
          <div class="col-sm-8">
            <div class="card">
              <div class="card-body">
                <h5 class="text-center text-white"><strong>Masuk</strong></h5>
                <?php
                    error_reporting(0);
                    if (!empty($_GET['notif'])) {
                      if ($_GET['notif'] == 1) {
                        echo '
                          <div class="alert alert-warning alert-dismissible mb-2" role="alert">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <div class="alert-message">
                              <span><strong>Warning!</strong> Username atau Password Salah, <a href="'.$urlweb.'/forgot/" class="text-danger">Klik Disini</a> Apabila Anda Lupa dengan Password Anda!</span>
                            </div>
                          </div>
                        ';
                      }
                      if ($_GET['notif'] == 2) {
                        echo '
                          <div class="alert alert-warning alert-dismissible mb-2" role="alert">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <div class="alert-message">
                              <span><strong>Warning!</strong> Password Yang Anda Masukan Salah, <a href="'.$urlweb.'/forgot/" class="text-danger">Klik Disini</a> Apabila Anda Lupa dengan Password Anda!</span>
                            </div>
                          </div>
                        ';
                      }
                      if ($_GET['notif'] == 3) {
                        echo '
                          <div class="alert alert-warning alert-dismissible mb-2" role="alert">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <div class="alert-message">
                              <span><strong>Warning!</strong> Username dan Password Tidak Cocok!</span>
                            </div>
                          </div>
                        ';
                      }
                      if ($_GET['notif'] == 5) {
                        echo '
                          <div class="alert alert-warning alert-dismissible mb-2" role="alert">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <div class="alert-message">
                              <span><strong>Warning!</strong> Oops ... Sepertinya akun kamu tidak aktif!</span>
                            </div>
                          </div>
                        ';
                      }
                    }
                  ?>
                <form role="form" action="<?php echo $urlweb; ?>/login-proses.php" method="POST">
                  <div class="form-group mb-3">
                    <input type="text" name="user" class="form-control" pattern="[a-z0-9]+" placeholder="Username" title="Username Tidak Valid" required>                  
                  </div>
                  <div class="form-group mb-3">
                    <input type="password" name="pass" class="form-control" pattern="[a-z0-9A-Z]{8}+" placeholder="Password" title="Password Hanya Masukan Huruf dan Angka" required>                  
                  </div>
                  <button type="submit" class="btn btn-main w-100 mb-3">Masuk</button>
                  <hr>
                  <div class="text-center">
                    <a href="<?php echo $urlweb; ?>/forgot/" style="font-size: 14px;">Lupa Password?</a> | 
                    <a href="<?php echo $urlweb; ?>/register/" style="font-size: 14px;">Buat Akun</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="col-sm-2"></div>
        </div>
      </div>
    </section>    
    
    <!--Start footer-->
    <?php include('footer.php'); ?>
    
</body>
</html>

