<?php
include('session.php');
$hari = array('Senin','Selasa','Rabu','Kamis','Jumat','Sabtu','Minggu');
$monthly = date('Y-m');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>History | <?php echo $s0['instansi']; ?></title>
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
          <a href="<?php echo $urlweb; ?>" class="mr-2">Beranda</a> <i class="fas fa-chevron-right" style="font-size: 10px; margin-top: 6px;"></i> <span class="ml-2" style="color: #FFB302;">History</span>
        </div>
      </div>
    </section>

    <section class="mt-2 mb-3">
      <div class="container">
        <div class="card">
          <div class="card-header p-2">
            <div class="row">
              <div class="col-6">
                <img src="<?php echo $urlweb; ?>/upload/history.png" class="mb-1" style="float: left; width: 30px; height: 30px; filter: brightness(0) invert(1); margin-right:8px; margin-bottom: 0px;">
                <p style="margin-top: 18px; line-height: 0;">History</p>
              </div>
              <div class="col-6 text-right">
                <p style="line-height: 0px; margin-top: 8px;"><small>Saldo Tersedia :</small></p>
                <p style="line-height: 0px; color: #FFB302!important;">Rp. <?php echo number_format($sb['active']); ?></p>
              </div>
            </div>
          </div>
          <div class="card-body p-3">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
              <li class="nav-item" role="presentation">
                <button class="nav-link active" id="home-tab" data-toggle="tab" data-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Transaksi</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="profile-tab" data-toggle="tab" data-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Slot</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="contact-tab" data-toggle="tab" data-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Casino</button>
              </li>
            </ul>
			<div class="tab-content" id="myTabContent">
              <div class="tab-pane fade show active pt-3 pb-3" id="home" role="tabpanel" aria-labelledby="home-tab">
              	<div class="table-responsive">
                  <table class="table table-hovered table-stripped table-bordered default-datatable">
                    <thead>
                      <tr style="background: #311540;">
                        <th class="text-center text-white" style="vertical-align: middle; font-size: 12px;">Date</th>
                        <th class="text-center text-white" style="vertical-align: middle; font-size: 12px;">Transaction</th>
                        <th class="text-center text-white" style="vertical-align: middle; font-size: 12px;">Amount</th>
                        <th class="text-center text-white" style="vertical-align: middle; font-size: 12px;">Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      	$sql_transaksi = mysqli_query($conn,"SELECT * FROM `tb_transaksi` WHERE `userID` = '$userID' AND `date` LIKE '$monthly%' ORDER BY cuid DESC") or die(mysqli_error());
                      	while($st = mysqli_fetch_array($sql_transaksi)){
                      ?>
                      <tr>
                        <td class="text-center text-white pt-1 pb-1" style="vertical-align: middle; white-space: nowrap; font-size: 12px;"><?php echo date('Y-m-d', strtotime($st['date'])); ?><br><?php echo date('H:i:s', strtotime($st['date'])); ?></td>
                        <td class="text-center text-white pt-1 pb-1" style="vertical-align: middle; white-space: nowrap; font-size: 12px;"><?php echo $st['transaksi']; ?></td>
                        <td class="text-right text-white pt-1 pb-1" style="vertical-align: middle; white-space: nowrap; font-size: 12px; text-align: right;">Rp. <?php echo number_format($st['total']); ?></td>
                        <td class="text-center text-white pt-1 pb-1" style="vertical-align: middle; white-space: nowrap; font-size: 12px;">
                          <?php
                            if($st['jenis'] == 1){
                              if($st['status'] == 0){
                                echo '
                                  <a href="'.$urlweb.'/deposit/?trxID='.$st['kd_transaksi'].'" class="badge badge-info w-100 p-2">Bayar</a>
                                ';
                              }
                              else if($st['status'] == 1){
                                echo '
                                  <a href="#" class="badge badge-success w-100 p-2">Berhasil</a>
                                ';
                              }
                              else if($st['status'] == 2){
                                echo '
                                  <a href="#" class="badge badge-danger w-100 p-2">Ditolak</a>
                                ';
                              }
                            }
                            else {
                              if($st['status'] == 0){
                                echo '
                                  <a href="#" class="badge badge-info w-100 p-2">Menunggu</a>
                                ';
                              }
                              else if($st['status'] == 1){
                                echo '
                                  <a href="#" class="badge badge-success w-100 p-2">Berhasil</a>
                                ';
                              }
                              else if($st['status'] == 2){
                                echo '
                                  <a href="#" class="badge badge-danger w-100 p-2">Ditolak</a>
                                ';
                              }
                            }
                          ?>
                        </td>
                      </tr>
                      <?php } ?>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="tab-pane fade pt-3 pb-3" id="profile" role="tabpanel" aria-labelledby="profile-tab">
              	<div class="table-responsive">
                  <table class="table table-hovered table-stripped table-bordered default-datatable">
                    <thead>
                      <tr style="background: #311540;">
                        <th class="text-center text-white" style="vertical-align: middle; font-size: 12px;">Date</th>
                        <th class="text-center text-white" style="vertical-align: middle; font-size: 12px;">Game</th>
                        <th class="text-center text-white" style="vertical-align: middle; font-size: 12px;">Bet</th>
                        <th class="text-center text-white" style="vertical-align: middle; font-size: 12px;">Win</th>
                        <th class="text-center text-white" style="vertical-align: middle; font-size: 12px;">Balance</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      	$sql_transaksi = mysqli_query($conn,"SELECT * FROM `tb_taruhan` WHERE `userID` = '$userID' AND `created_date` LIKE '$monthly%' AND `jenis` = 'RNG' ORDER BY cuid DESC") or die(mysqli_error());
                      	while($st = mysqli_fetch_array($sql_transaksi)){
                      ?>
                      <tr>
                        <td class="text-center text-white pt-1 pb-1" style="vertical-align: middle; white-space: nowrap; font-size: 12px;"><?php echo date('Y-m-d', strtotime($st['created_date'])); ?><br><?php echo date('H:i:s', strtotime($st['created_date'])); ?></td>
                        <td class="text-center text-white pt-1 pb-1" style="vertical-align: middle; white-space: nowrap; font-size: 12px;"><?php echo $st['code']; ?></td>
                        <td class="text-right text-white pt-1 pb-1" style="vertical-align: middle; white-space: nowrap; font-size: 12px; text-align: right;">Rp. <?php echo number_format($st['nominal']); ?></td>
                        <td class="text-right text-white pt-1 pb-1" style="vertical-align: middle; white-space: nowrap; font-size: 12px; text-align: right;">Rp. <?php echo number_format($st['bayar']); ?></td>
                        <td class="text-right text-white pt-1 pb-1" style="vertical-align: middle; white-space: nowrap; font-size: 12px; text-align: right;">Rp. <?php echo number_format($st['jumlah']); ?></td>
                      </tr>
                      <?php } ?>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="tab-pane fade pt-2 pb-3" id="contact" role="tabpanel" aria-labelledby="contact-tab">
              	<div class="table-responsive">
                  <table class="table table-hovered table-stripped table-bordered default-datatable">
                    <thead>
                      <tr style="background: #311540;">
                        <th class="text-center text-white" style="vertical-align: middle; font-size: 12px;">Date</th>
                        <th class="text-center text-white" style="vertical-align: middle; font-size: 12px;">Game</th>
                        <th class="text-center text-white" style="vertical-align: middle; font-size: 12px;">Bet</th>
                        <th class="text-center text-white" style="vertical-align: middle; font-size: 12px;">Win</th>
                        <th class="text-center text-white" style="vertical-align: middle; font-size: 12px;">Balance</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      	$sql_transaksi = mysqli_query($conn,"SELECT * FROM `tb_taruhan` WHERE `userID` = '$userID' AND `created_date` LIKE '$monthly%' AND `jenis` = 'LC' ORDER BY cuid DESC") or die(mysqli_error());
                      	while($st = mysqli_fetch_array($sql_transaksi)){
                      ?>
                      <tr>
                        <td class="text-center text-white pt-1 pb-1" style="vertical-align: middle; white-space: nowrap; font-size: 12px;"><?php echo date('Y-m-d', strtotime($st['created_date'])); ?><br><?php echo date('H:i:s', strtotime($st['created_date'])); ?></td>
                        <td class="text-center text-white pt-1 pb-1" style="vertical-align: middle; white-space: nowrap; font-size: 12px;"><?php echo $st['code']; ?></td>
                        <td class="text-right text-white pt-1 pb-1" style="vertical-align: middle; white-space: nowrap; font-size: 12px; text-align: right;">Rp. <?php echo number_format($st['nominal']); ?></td>
                        <td class="text-right text-white pt-1 pb-1" style="vertical-align: middle; white-space: nowrap; font-size: 12px; text-align: right;">Rp. <?php echo number_format($st['bayar']); ?></td>
                        <td class="text-right text-white pt-1 pb-1" style="vertical-align: middle; white-space: nowrap; font-size: 12px; text-align: right;">Rp. <?php echo number_format($st['jumlah']); ?></td>
                      </tr>
                      <?php } ?>
                    </tbody>
                  </table>
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

