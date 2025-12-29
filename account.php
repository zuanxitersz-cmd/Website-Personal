<?php
include('session.php');
$hari = array('Senin','Selasa','Rabu','Kamis','Jumat','Sabtu','Minggu');

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Akun Saya | <?php echo $s0['instansi']; ?></title>
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
          <a href="<?php echo $urlweb; ?>" class="mr-2">Beranda</a> <i class="fas fa-chevron-right" style="font-size: 10px; margin-top: 6px;"></i> <span class="ml-2" style="color: #FFB302;">Akun Saya</span>
        </div>
      </div>
    </section>

    <section class="mt-2 mb-3">
      <div class="container">
        <div class="card">
          <div class="card-header p-2">
            <div class="row">
              <div class="col-6">
                <img src="<?php echo $urlweb; ?>/upload/user.png" class="mb-1" style="float: left; width: 30px; height: 30px; filter: brightness(0) invert(1); margin-right:8px; margin-bottom: 0px;">
                <p style="margin-top: 18px; line-height: 0;">Akun Saya</p>
              </div>
              <div class="col-6 text-right">
                <p style="line-height: 0px; margin-top: 8px;"><small>Saldo Tersedia :</small></p>
                <p style="line-height: 0px; color: #FFB302!important;">Rp. <?php echo number_format($sb['active']); ?></p>
              </div>
            </div>
          </div>
          <div class="card-body p-3">
            <div class="row">
              <div class="col-sm-8 mb-2">
                <div class="card mb-2" style="background: #311540;">
                  <div class="card-body">
                    <form role="form" action="#" method="POST">
                      <p class="mb-2" style="color: #FFB302!important;"><strong>INFORMASI PRIBADI</strong></p>
                      <div class="row">
                        <div class="form-group col-sm-6 mb-2">
                          <label>User</label>
                          <input type="text" class="form-control" value="<?php echo $u['user']; ?>" readonly>
                        </div>
                        <div class="form-group col-sm-6 mb-2">
                          <label>Nama</label>
                          <input type="text" class="form-control" value="<?php echo $u['full_name']; ?>" readonly>
                        </div>
                        <div class="form-group col-sm-6 mb-2">
                          <label>Email</label>
                          <input type="text" class="form-control" value="<?php echo $u['email']; ?>" readonly>
                        </div>
                        <div class="form-group col-sm-6 mb-2">
                          <label>No. Handphone</label>
                          <input type="text" class="form-control" value="<?php echo $u['no_hp']; ?>" readonly>
                        </div>
                      </div>
                    </form>
                    <div style="width: 100%; height: auto; padding: 5px; border: 1px solid #fff; font-size: 12px;">
                      Silahkan Hubungi Live Chat kami untuk melakukan perubahan Informasi Pribadi
                    </div>
                  </div>
                </div>
                <div class="card mb-2" style="background: #311540;">
                  <div class="card-body">
                    <form role="form" action="#" method="POST">
                      <p class="mb-2" style="color: #FFB302!important;"><strong>INFORMASI REKENING</strong></p>
                      <div class="row">
                        <div class="form-group col-sm-6 mb-2">
                          <label>Bank</label>
                          <input type="text" class="form-control" value="<?php echo $sbs['akun']; ?>" readonly>
                        </div>
                        <div class="form-group col-sm-6 mb-2">
                          <label>Nama Rekening</label>
                          <input type="text" class="form-control" value="<?php echo $sbs['pemilik']; ?>" readonly>
                        </div>
                        <div class="form-group col-sm-6 mb-2">
                          <label>No. Rekening</label>
                          <input type="text" class="form-control" value="<?php echo 'xxx-xxx-'.substr($sbs['no_rek'],-4); ?>" readonly>
                        </div>
                      </div>
                    </form>
                    <div style="width: 100%; height: auto; padding: 5px; border: 1px solid #fff; font-size: 12px;">
                      Silahkan Hubungi Live Chat kami untuk melakukan perubahan Informasi Rekening
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="card mb-2" style="background: #311540;">
                  <div class="card-body">
                    
                    <form role="form" class="mb-2" action="#" method="POST">
                      <p class="mb-2" style="color: #FFB302!important;"><strong>GANTI PASSWORD</strong></p>
                      <div class="row">
                        <div class="form-group col-sm-12 mb-2">
                          <label>Password Baru</label>
                          <input type="password" class="form-control" name="pass" pattern="[a-z0-9A-Z]{8}+" title="Kombinasi Huruf dan Angka, Minimal 8 Karakter" required>
                        </div>
                        <div class="form-group col-sm-12 mb-2">
                          <label>Ulangi Password Baru</label>
                          <input type="password" class="form-control" name="repass" pattern="[a-z0-9A-Z]{8}+" title="Kombinasi Huruf dan Angka, Minimal 8 Karakter" required>
                        </div>
                        <div class="form-group col-sm-12 mb-2">
                          <label>Password Saat Ini</label>
                          <input type="password" class="form-control" name="old_pass" required>
                        </div>
                      </div>
                      <div style="width: 100%; height: auto; padding: 5px; border: 1px solid #fff; font-size: 12px;">
                        Password wajib memiliki minimal 8 karakter, dan wajib memiliki minimal 1 huruf dan 1 angka. Menggunakan Karakter spesial tidak diperbolehkan.
                      </div>
                      <button type="submit" name="submit" value="submit" class="btn btn-secondaries w-100 mt-3">Ganti Password</button>
                    </form>
                    <?php
                      error_reporting(0);
                      if (!empty($_GET['notif'])) {
                        if ($_GET['notif'] == 1) {
                          echo '
                            <div class="alert alert-success alert-dismissible" role="alert" style="font-size: 12px;">
                              <button type="button" class="close" data-dismiss="alert">&times;</button>
                              <div class="alert-message">
                                <span><strong>Well done!</strong> Perubahan Password Disimpan!</span>
                              </div>
                            </div>
                          ';
                        }
                        if ($_GET['notif'] == 2) {
                          echo '
                            <div class="alert alert-warning alert-dismissible" role="alert" style="font-size: 12px;">
                              <button type="button" class="close" data-dismiss="alert">&times;</button>
                              <div class="alert-message">
                                <span><strong>Warning!</strong> Password Yang Anda Masukan Salah!</span>
                              </div>
                            </div>
                          ';
                        }
                        if ($_GET['notif'] == 3) {
                          echo '
                            <div class="alert alert-warning alert-dismissible" role="alert" style="font-size: 12px;">
                              <button type="button" class="close" data-dismiss="alert">&times;</button>
                              <div class="alert-message">
                                <span><strong>Warning!</strong> Password Yang Anda Masukan Tidak Sama!</span>
                              </div>
                            </div>
                          ';
                        }
                      }
                    ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>    
    
    <!--Start footer-->
    <?php include('footer.php'); ?>
    
</body>
</html>

