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
$stat = mysqli_query($conn,"INSERT INTO `tb_stat` (`ip`, `date`, `hits`, `page`, `user`) VALUES ('$ip', '$date', 1, 'Beranda', '$pengguna')") or die (mysqli_error());
$hari = array('Senin','Selasa','Rabu','Kamis','Jumat','Sabtu','Minggu');

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo $s0['instansi']; ?></title>
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
  <!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','<?php echo $s0['gtask']; ?>');</script>
  <!-- End Google Tag Manager -->
</head>

<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=<?php echo $s0['gtask']; ?>"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
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
             Selamat Datang Di Situs InBefore Sebagai Agen Judi Slot Resmi Indonesia
            </marquee>
          </div>
        </div>
      </div>
    </section>

    <section class="mt-2 d-none d-sm-block">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 pr-1">
            <div id="carouselExampleIndicators" class="carousel slide mb-2" data-ride="carousel">
              <ol class="carousel-indicators">
                <?php
                  $sql_21 = mysqli_query($conn,"SELECT * FROM `tb_slide` ORDER BY sort ASC") or die(mysqli_error());
                  $nos=0;
                  while($s21 = mysqli_fetch_array($sql_21)){
                    $nos++;
                    $a = $nos - 1;
                ?>
                <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $a; ?>"<?php if($nos == 1){ echo ' class="active"'; } ?>></li>
                <?php } ?>
              </ol>
              <div class="carousel-inner">
                <?php
                  $sql_2 = mysqli_query($conn,"SELECT * FROM `tb_slide` ORDER BY sort ASC") or die(mysqli_error());
                  $no = 0;
                  while($s2 = mysqli_fetch_array($sql_2)){
                    $no++;
                ?>
                <div class="carousel-item<?php if($no == 1) { echo ' active'; } ?>">
                  <img class="d-block w-100" src="<?php echo $urlweb; ?>/upload/<?php echo $s2['image']; ?>" alt="First slide">
                </div>
                <?php } ?>
              </div>
            </div>
            <div class="row">
              <div class="col-4 pr-1">
                <a href="<?php echo $urlweb; ?>/promo/" class="btn btn-helper btn-block"><i class="fa fa-percent"></i>&nbsp;Promosi</a>
              </div>
              <?php if(isset($_SESSION['user'])){ ?>
              <div class="col-4 pl-1 pr-1">
                <a href="<?php echo $urlweb; ?>/history/" class="btn btn-secondaries btn-block"><i class="fa fa-calendar"></i>&nbsp;Riwayat</a>
              </div>
              <div class="col-4 pl-1">
                <a href="#" class="btn btn-main btn-block"><i class="fa fa-money-bill-transfer"></i>&nbsp;Deposit</a>
              </div>
              <?php } else { ?>
              <div class="col-4 pl-1 pr-1">
                <a href="<?php echo $urlweb; ?>/register/" class="btn btn-secondaries btn-block"><i class="fa fa-lock"></i>&nbsp;Daftar</a>
              </div>
              <div class="col-4 pl-1">
                <a href="#" class="btn btn-main btn-block" data-toggle="modal" data-target="#modalLogin" data-backdrop="static" data-keyboard="false"><i class="fa fa-user-circle"></i>&nbsp;Masuk</a>
              </div>
              <?php } ?>
            </div>
          </div>
          <div class="col-sm-4 pl-1">
            <div style="width: 100%; height: 100%; max-height: 306px; border: 1px solid #481c5f;">
              <div id="carouselExampleIndicators" class="carousel slide mb-2" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" src="<?php echo $urlweb; ?>/upload/game_menu/PragmaticPlay.png" alt="First slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="<?php echo $urlweb; ?>/upload/game_menu/PGSoft.png" alt="First slide">
                  </div>
                   
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="mt-2 d-block d-sm-none">
      <div class="container-fluid">
        <div id="carouselExampleIndicators" class="carousel slide mb-2" data-ride="carousel">
          <ol class="carousel-indicators">
            <?php
              $sql_21 = mysqli_query($conn,"SELECT * FROM `tb_slide` ORDER BY sort ASC") or die(mysqli_error());
              $nos=0;
              while($s21 = mysqli_fetch_array($sql_21)){
                $nos++;
                $a = $nos - 1;
            ?>
            <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $a; ?>"<?php if($nos == 1){ echo ' class="active"'; } ?>></li>
            <?php } ?>
          </ol>
          <div class="carousel-inner">
            <?php
              $sql_2 = mysqli_query($conn,"SELECT * FROM `tb_slide` ORDER BY sort ASC") or die(mysqli_error());
              $no = 0;
              while($s2 = mysqli_fetch_array($sql_2)){
                $no++;
            ?>
            <div class="carousel-item<?php if($no == 1) { echo ' active'; } ?>">
              <img class="d-block w-100" src="<?php echo $urlweb; ?>/upload/<?php echo $s2['image']; ?>" alt="First slide">
            </div>
            <?php } ?>
          </div>
        </div>
        <div class="ml-1 mr-1">
          <div class="row">
            <div class="col-4 pr-1">
              <a href="<?php echo $urlweb; ?>/promo/" class="btn btn-helper btn-block"><i class="fa fa-percent"></i>&nbsp;Promosi</a>
            </div>
            <?php if(isset($_SESSION['user'])){ ?>
            <div class="col-4 pl-1 pr-1">
              <a href="<?php echo $urlweb; ?>/history/" class="btn btn-secondaries btn-block"><i class="fa fa-calendar"></i>&nbsp;Riwayat</a>
            </div>
            <div class="col-4 pl-1">
              <a href="<?php echo $urlweb; ?>/deposit/" class="btn btn-main btn-block"><i class="fa fa-money-bill-transfer"></i>&nbsp;Deposit</a>
            </div>
            <?php } else { ?>
            <div class="col-4 pl-1 pr-1">
              <a href="<?php echo $urlweb; ?>/register/" class="btn btn-secondaries btn-block"><i class="fa fa-lock"></i>&nbsp;Daftar</a>
            </div>
            <div class="col-4 pl-1">
              <a href="#" class="btn btn-main btn-block" data-toggle="modal" data-target="#modalLogin" data-backdrop="static" data-keyboard="false"><i class="fa fa-user-circle"></i>&nbsp;Masuk</a>
            </div>
            <?php } ?>
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
             Selamat Datang Di Situs InBefore Sebagai Agen Judi Slot Resmi Indonesia
            </marquee>
          </div>
        </div>
      </div>
    </section>

    <div class="mt-2 d-none d-sm-block mb-5">
      <div class="container">
        <section>
          <div class="topContent">
            <div class="row">
              <div class="col-md-2 col-sm-2 mb-0 pt-4">
                <img src="<?php echo $urlweb; ?>/upload/icon/menu2/icon/slot.png" style="float: left; width: 40px; height: 40px; display: block; margin: 0 auto; margin-right: 10px;">
                <p style="margin-top: 10px; font-weight: 700;">Slots</p>
              </div>
              <div class="col-sm-8 mb-0">
                <div class="main-content">
                  <div class="owl-carousel owl-theme">
                    <div class="item">
                      <a class="nav-link text-center" href="<?php echo $urlweb; ?>" style="font-size: 0.65rem;">
                        <img src="<?php echo $urlweb; ?>/upload/icon/hot.png" style="width: 100%; height: auto; display: block; margin: 0 auto;">
                        Hot
                      </a>
                    </div>
                    <?php
                      $getProvider = mysqli_query($conn,"SELECT * FROM `tb_tripayapi` WHERE jenis = '1' ORDER BY cuid ASC") or die(mysqli_error());
                      while($gp = mysqli_fetch_array($getProvider)){
                        if(isset($_SESSION['user'])){
                          $linknya = 'href="'.$urlweb.'/slot/'.$gp['provider'].'"';
                        }
                        else {
                          $linknya = 'href="#" data-toggle="modal" data-target="#modalLogin" data-backdrop="static" data-keyboard="false"';
                        }
                    ?>
                    <div class="item">
                      <a class="nav-link text-center" <?php echo $linknya; ?> style="font-size: 0.65rem;">
                        <img src="<?php echo $urlweb; ?>/upload/icon/logogame/<?php echo $gp['image']; ?>" style="width: 100%; height: auto; display: block; margin: 0 auto;">
                        <?php echo $gp['provider']; ?>
                      </a>
                    </div>
                    <?php } ?>
                  </div>
                  <div class="owl-theme">
                    <div class="owl-controls">
                      <div class="custom-nav owl-nav"></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-2 mb-0 pt-4">
                <a href="<?php echo $urlweb; ?>/slot/" class="btn btn-main btn-block mt-1">Lihat Semua</a>
              </div>
            </div>
          </div>
        </section>

        <section class="mt-3">
          <div class="gameList">
            
              <?php                
                $sql_3 = mysqli_query($conn,"SELECT * FROM `tb_gamelist` WHERE `datatype` = 'SL' AND `provider` IN('Pragmatic','Pgsoft') ORDER BY rand() LIMIT 18") or die(mysqli_error($conn));
                while($s3 = mysqli_fetch_array($sql_3)){
                  $provider = $s3['provider'];
                  $ProviderMana = mysqli_query($conn,"SELECT * FROM `tb_tripayapi` WHERE provider = '$provider'") or die(mysqli_error());
                  $pm = mysqli_fetch_array($ProviderMana);
                  if(isset($_SESSION['user'])){
                    $externalPlayerId = $_SESSION['user'];
                    $getMemberUser = mysqli_query($conn,"SELECT * FROM `tb_user` WHERE user = '$externalPlayerId'") or die(mysqli_error());
                    $gmu = mysqli_fetch_array($getMemberUser);
                    if($gmu['ongame'] == 1){
                      if($pm['status'] == 1){
                        $playUrl = 'href="'.$urlweb.'/playgame/'.$s3['provider'].'/'.$s3['gameid'].'" target="_blank"';
                      }
                      else {
                        $playUrl = 'href="#" data-toggle="modal" data-target="#modalGame" data-backdrop="static" data-keyboard="false"';
                      }
                    }
                    else {
                        $playUrl = 'href="#" data-toggle="modal" data-target="#modalAlert" data-backdrop="static" data-keyboard="false"';
                    }
                  }
                  else {
                    $playUrl = 'href="#" data-toggle="modal" data-target="#modalLogin" data-backdrop="static" data-keyboard="false"';
                  }
                  $getProvider1 = mysqli_query($conn,"SELECT * FROM `tb_tripayapi` WHERE provider = '$provider'") or die(mysqli_error());
                  $gp1 = mysqli_fetch_array($getProvider1);
              ?>
              <div class="gameListColoumn text-center">
                <a <?php echo $playUrl; ?>>
                  <div style="width: 100%; height: 175px!important; background: url('<?php echo $s3['image']; ?>') no-repeat; background-size: 100% 100%; background-position: center center; border: 1px solid #481c5f;">
                    <div style="position: relative; top: 0px; left: 0px; z-index: 1; width: 40px; height: 40px; background: #481c5f; padding: 3px; border-bottom-right-radius: 50%;">
                      <img src="<?php echo $urlweb; ?>/upload/icon/logogame/<?php echo $gp1['image']; ?>" style="width: 30px; height: 30px; ">
                    </div>
                  </div>
                  <p class="mt-2" style="font-size: 0.75rem;"><?php echo $s3['gamename']; ?></p>
                  
                </a>
              </div>
              <?php } ?>
            
          </div>
        </section>

        <section class="mt-3">
          <div class="row">
            <div class="col-sm-8 pr-1">
              <div class="card p-1">
                <div class="card-header p-1">
                  <div class="row">
                    <div class="col-9 pt-2">
                      <img src="<?php echo $urlweb; ?>/upload/icon/menu2/icon/casino.png" style="float: left; width: 40px; height: 40px; display: block; margin: 0 auto; margin-right: 10px;">
                      <p style="margin-top: 10px; font-weight: 700;">Casino</p>
                    </div>
                    <div class="col-3 pt-2">
                      <a href="<?php echo $urlweb; ?>/casino/" class="btn btn-main btn-block mt-1">Lihat Semua</a>
                    </div>
                  </div>
                </div>
                <div class="card-body p-1">
                  <div class="casinoList">
                    <div class="casinoListColoumn">
                      <a href="<?php echo $urlweb; ?>/casino/BigGaming">
                        <div style="width: 100%; height: 250px!important; background: url('<?php echo $urlweb; ?>/upload/BigGaming.gif') no-repeat #481c5f; background-size: 100% 100%; background-position: center center; border: 1px solid rgb(255,255,255,0.5);">
                          <div style="position: relative; bottom: -220px; left: 0px; z-index: 1; width: auto; height: 30px; line-height: 20px; background: rgb(0,0,0,0.5); padding: 3px;">
                            <p style="font-size: 0.75rem;">BigGaming</p>
                          </div>
                        </div>
                      </a>
                    </div>
                    <div class="casinoListColoumn">
                      <a href="<?php echo $urlweb; ?>/casino/Evolution">
                        <div style="width: 100%; height: 250px!important; background: url('<?php echo $urlweb; ?>/upload/evo.gif') no-repeat #481c5f; background-size: 100% 100%; background-position: center center; border: 1px solid rgb(255,255,255,0.5);">
                          <div style="position: relative; bottom: -220px; left: 0px; z-index: 1; width: auto; height: 30px; line-height: 20px; background: rgb(0,0,0,0.5); padding: 3px;">
                            <p style="font-size: 0.75rem;">Evolution</p>
                          </div>
                        </div>
                      </a>
                    </div>
                    <div class="casinoListColoumn">
                      <a href="<?php echo $urlweb; ?>/casino/DreamGaming">
                        <div style="width: 100%; height: 250px!important; background: url('<?php echo $urlweb; ?>/upload/dg.gif') no-repeat #481c5f; background-size: 100% 100%; background-position: center center; border: 1px solid rgb(255,255,255,0.5);">
                          <div style="position: relative; bottom: -220px; left: 0px; z-index: 1; width: auto; height: 30px; line-height: 20px; background: rgb(0,0,0,0.5); padding: 3px;">
                            <p style="font-size: 0.75rem;">DreamGaming</p>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-4 pl-1">
              <div class="card p-1">
                <div class="card-header p-1">
                  <div class="row">
                    <div class="col-6 pt-2">
                      <img src="<?php echo $urlweb; ?>/upload/icon/menu2/icon/sport.png" style="float: left; width: 40px; height: 40px; display: block; margin: 0 auto; margin-right: 10px;">
                      <p style="margin-top: 10px; font-weight: 700;">Sports+</p>
                    </div>
                    <div class="col-6 pt-2">
                      <a href="<?php echo $urlweb; ?>/sport/" class="btn btn-main btn-block mt-1">Lihat Semua</a>
                    </div>
                  </div>
                </div>
                <div class="card-body p-1">
                  <a href="<?php echo $urlweb; ?>/sport/">
                    <img src="<?php echo $urlweb; ?>/upload/icon/sport.png" style="display: block; margin: 0 auto; width: 100%; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>

    <div class="mobile mt-2 d-block d-sm-none">
      <div class="mobileNavWrapper">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo $urlweb; ?>/slot/">
              <img src="<?php echo $urlweb; ?>/upload/icon/menu2/icon/slot.png" style="width: 40px; height: 40px; display: block; margin: 0 auto; margin-bottom: 3px;">
              Slots
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo $urlweb; ?>/poker/">
              <img src="<?php echo $urlweb; ?>/upload/icon/menu2/icon/poker.png" style="width: 40px; height: 40px; display: block; margin: 0 auto; margin-bottom: 3px;">
              Poker
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo $urlweb; ?>/sport/">
              <img src="<?php echo $urlweb; ?>/upload/icon/menu2/icon/sport.png" style="width: 40px; height: 40px; display: block; margin: 0 auto; margin-bottom: 3px;">
              Sports+
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo $urlweb; ?>/casino/">
              <img src="<?php echo $urlweb; ?>/upload/icon/menu2/icon/casino.png" style="width: 40px; height: 40px; display: block; margin: 0 auto; margin-bottom: 3px;">
              Casino
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo $urlweb; ?>/fishing/">
              <img src="<?php echo $urlweb; ?>/upload/icon/menu2/icon/fishing.png" style="width: 40px; height: 40px; display: block; margin: 0 auto; margin-bottom: 3px;">
              Fishing
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo $urlweb; ?>/lotto/">
              <img src="<?php echo $urlweb; ?>/upload/icon/menu2/icon/lottery.png" style="width: 40px; height: 40px; display: block; margin: 0 auto; margin-bottom: 3px;">
              Lotto
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo $urlweb; ?>/arcade/">
              <img src="<?php echo $urlweb; ?>/upload/icon/menu2/icon/arcade.png" style="width: 40px; height: 40px; display: block; margin: 0 auto; margin-bottom: 3px;">
              Arcade
            </a>
          </li>
        </ul>
      </div>
      <div class="container-fluid">
        <section class="mt-2">
          <div class="card p-1">
            <div class="card-header p-1">
              <div class="row">
                <div class="col-6 pt-2">
                  <img src="<?php echo $urlweb; ?>/upload/icon/menu2/icon/slot.png" style="float: left; width: 40px; height: 40px; display: block; margin: 0 auto; margin-right: 10px;">
                  <p style="margin-top: 10px; font-weight: 700;">Slots</p>
                </div>
                <div class="col-6 pt-2">
                  <a href="<?php echo $urlweb; ?>/slot/" class="btn btn-main btn-block mt-1">Lihat Semua</a>
                </div>
              </div>
            </div>
            <div class="card-body p-1 pb-3">
              <div class="row">
                <?php
                  $getProvider = mysqli_query($conn,"SELECT * FROM `tb_tripayapi` WHERE jenis = 'SL' ORDER BY cuid ASC") or die(mysqli_error());
                  while($gp = mysqli_fetch_array($getProvider)){
                ?>
                <div class="col-3 p-1 mb-0">
                  <a class="nav-link text-center" href="<?php echo $urlweb; ?>/slot/<?php echo $gp['provider']; ?>" style="font-size: 0.65rem;">
                    <img src="<?php echo $urlweb; ?>/upload/icon/logogame/<?php echo $gp['image']; ?>" style="width: auto; height: 50px; display: block; margin: 0 auto;">
                    <?php echo $gp['provider']; ?>
                  </a>
                </div>
                <?php } ?>
              </div>
            </div>
          </div>
        </section>

        <section style=" margin-top: -15px;">
          <div class="card p-1" style="background: #311540;">
            <div class="card-header p-1">
              <div class="row">
                <div class="col-6 pt-2">
                  <img src="<?php echo $urlweb; ?>/upload/icon/menu2/icon/casino.png" style="float: left; width: 40px; height: 40px; display: block; margin: 0 auto; margin-right: 10px;">
                  <p style="margin-top: 10px; font-weight: 700;">Casino</p>
                </div>
                <div class="col-6 pt-2">
                  <a href="<?php echo $urlweb; ?>/casino/" class="btn btn-main btn-block mt-1">Lihat Semua</a>
                </div>
              </div>
            </div>
            <div class="card-body p-1 pb-3">
              <div class="casinoList">
               
			   
			   
              </div>
            </div>
          </div>
        </section>

        <section style=" margin-top: -15px;">
          <div class="card p-1">
            <div class="card-header p-1">
              <div class="row">
                <div class="col-6 pt-2 pr-1">
                  <img src="<?php echo $urlweb; ?>/upload/icon/menu2/icon/sport.png" style="float: left; width: 40px; height: 40px; display: block; margin: 0 auto; margin-right: 10px;">
                  <p style="margin-top: 10px; font-weight: 700;">Sports+</p>
                </div>
                <div class="col-6 pt-2 pl-1">
                  <img src="<?php echo $urlweb; ?>/upload/icon/menu2/icon/fishing.png" style="float: left; width: 40px; height: 40px; display: block; margin: 0 auto; margin-right: 10px;">
                  <p style="margin-top: 10px; font-weight: 700;">Fishing</p>
                </div>
              </div>
            </div>
            <div class="card-body p-1 pb-3">
              <div class="row">
                <div class="col-6 pr-1">
                  <a href="<?php echo $urlweb; ?>/sport/">
                    <img src="<?php echo $urlweb; ?>/upload/icon/sport.png" style="display: block; margin: 0 auto; width: 100%; height: auto;">
                  </a>
                </div>
                <div class="col-6 pl-1">
                  <a href="<?php echo $urlweb; ?>/fishing/">
                    <img src="<?php echo $urlweb; ?>/upload/icon/fishing.png" style="display: block; margin: 0 auto; width: 100%; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
    
    <!--Start footer-->
    <?php include('footer.php'); ?>
    <script>
      $(window).on('load', function() {
        $('#exampleModal').modal({show: true, backdrop: 'static', keyboard: false});
      });
    </script>
</body>
</html>

