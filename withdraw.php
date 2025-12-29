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
  <title>Withdraw | <?php echo $s0['instansi']; ?></title>
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
          <a href="<?php echo $urlweb; ?>" class="mr-2">Beranda</a> <i class="fas fa-chevron-right" style="font-size: 10px; margin-top: 6px;"></i> <span class="ml-2" style="color: #FFB302;">Withdraw</span>
        </div>
      </div>
    </section>

    <section class="mt-2 mb-3">
      <div class="container">
        <div class="card">
          <div class="card-header p-2">
            <div class="row">
              <div class="col-6">
                <img src="<?php echo $urlweb; ?>/upload/withdraw.png" class="mb-1" style="float: left; width: 30px; height: 30px; filter: brightness(0) invert(1); margin-right:8px; margin-bottom: 0px;">
                <p style="margin-top: 18px; line-height: 0;">Withdraw</p>
              </div>
              <div class="col-6 text-right">
                <p style="line-height: 0px; margin-top: 8px;"><small>Saldo Tersedia :</small></p>
                <p style="line-height: 0px; color: #FFB302!important;">Rp. <?php echo number_format($sb['active']); ?></p>
              </div>
            </div>
          </div>
          <div class="card-body p-3">
            <?php
              error_reporting(0);
              $useridnya = $u['cuid'];
              $cekTransaksi = mysqli_query($conn,"SELECT * FROM `tb_transaksi` WHERE userID = '$useridnya' AND jenis = 2 AND status = 0") or die(mysqli_error());
              $ct = mysqli_num_rows($cekTransaksi);
              if($ct > 0){
                echo '
                  <div class="alert alert-success alert-dismissible mb-2" role="alert">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <div class="alert-message">
                      <span>Anda masih memiliki Permintaan Penarikan yang Belum Diproses. Silahkan Tunggu Hingga Proses Penarikan Sebelumnya Selesai.</span>
                    </div>
                  </div>
                ';
              }
              else {
                if (!empty($_GET['notif'])) {
                  if ($_GET['notif'] == 1) {
                    echo '
                      <div class="alert alert-success alert-dismissible mb-2" role="alert">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <div class="alert-message">
                          <span>Permintaan Penarikan Dana Berhasil! Proses Penarikan membutuhkan waktu 5 - 10 Menit.</span>
                        </div>
                      </div>
                    ';
                  }
                  if ($_GET['notif'] == 2) {
                    echo '
                      <div class="alert alert-warning alert-dismissible mb-2" role="alert">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <div class="alert-message">
                          <span>Minimal Penarikan Rp. '.number_format($sad['min_wd']).'</span>
                        </div>
                      </div>
                    ';
                  }
                  if ($_GET['notif'] == 3) {
                    echo '
                      <div class="alert alert-warning alert-dismissible mb-2" role="alert">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <div class="alert-message">
                          <span>Password Yang Anda Masukan Salah</span>
                        </div>
                      </div>
                    ';
                  }
                  if ($_GET['notif'] == 4) {
                    echo '
                      <div class="alert alert-warning alert-dismissible mb-2" role="alert">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <div class="alert-message">
                          <span>Permintaan Penarikan Gagal! Nominal yang Anda Masukan Melebihi Saldo Anda.</span>
                        </div>
                      </div>
                    ';
                  }
                  if ($_GET['notif'] == 4) {
                    echo '
                      <div class="alert alert-warning alert-dismissible mb-2" role="alert">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <div class="alert-message">
                          <span>Anda masih memiliki Permintaan Penarikan yang Belum Diproses. Silahkan Tunggu Hingga Proses Penarikan Sebelumnya Selesai.</span>
                        </div>
                      </div>
                    ';
                  }
                }
            ?>
            <form role="form" class="row mt-3" action="<?php echo $urlweb; ?>/function/withdraw.php" method="POST">
              <div class="col-sm-8 mb-2">
                <div class="form-group mb-1">
                  <label>Bank Tujuan</label>
                  <input type="text" class="form-control" value="<?php echo $sbs['akun']; ?> - <?php echo $sbs['no_rek']; ?> a/n <?php echo $sbs['pemilik']; ?>" readonly>
                  <input type="hidden" name="metode" placeholder="Masukan Jumlah Deposit" class="form-control" value="<?php echo $sbs['akun']; ?>">
                  
                </div>
                <div class="form-group mb-2">
                  <label>Nominal</label>
                  <input type="text" name="nominal" placeholder="Masukan Jumlah Penarikan" class="form-control" value="">
                  <span style="font-size: 12px;">Minimal Withdraw Rp. <?php echo number_format($sad['min_wd']); ?></span>
                </div>
                <div class="form-group mb-4">
                  <label>Password</label>
                  <input type="password" class="form-control" name="password" placeholder="Passoword Anda">
                </div>
                <button type="submit" name="submit" value="submit" class="btn btn-secondaries w-100">Withdraw</button>
              </div>
              <div class="col-sm-4">
                <div class="card" style="background: #311540;">
                  <div class="card-body">
                    CATATAN :<br>
                    <ol style="margin-left: 20px; font-size: 14px;">
                      <li>Jika ada beberapa perubahan dalam jadwal offline bank ini bukan otoritas kami.</li>
                      <li>Biaya admin akan diinfokan ketika proses transaksi telah selesai di proses.</li>
                      <li>Apabila Memiliki Kendala Withdraw, Hubungi Live Chat Kami.</li>
                    </ol>
                  </div>
                </div>
              </div>
            </form>
            <?php } ?>
          </div>
        </div>
      </div>
    </section>    
    
    <!--Start footer-->
    <?php include('footer.php'); ?>
    
</body>
</html>

