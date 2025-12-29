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
$stat = mysqli_query($conn,"INSERT INTO `tb_stat` (`ip`, `date`, `hits`, `page`, `user`) VALUES ('$ip', '$date', 1, 'Slot', '$pengguna')") or die (mysqli_error());
$hari = array('Senin','Selasa','Rabu','Kamis','Jumat','Sabtu','Minggu');

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Slot | <?php echo $s0['instansi']; ?></title>
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
            Selamat Datang Di Situs InBefore Sebagai Agen Judi Slot Resmi Indonesia
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
              Selamat Datang Di Situs InBefore Sebagai Agen Judi Slot Resmi Indonesia
            </marquee>
          </div>
        </div>
      </div>
    </section>

    <section class="mt-2">
      <div class="container">
        <div class="breadcrumb">
          <a href="<?php echo $urlweb; ?>" class="mr-2">Beranda</a> 
          <i class="fas fa-chevron-right" style="font-size: 10px; margin-top: 6px;"></i>
          <?php if(!isset($_GET['slug'])){ ?> 
          <span class="ml-2" style="color: #FFB302;">Slot</span>
          <?php } else { ?>
          <a href="<?php echo $urlweb; ?>/slot/" class="ml-2 mr-2">Slot</a> 
          <i class="fas fa-chevron-right" style="font-size: 10px; margin-top: 6px;"></i>
          <span class="ml-2" style="color: #FFB302;"><?php echo $_GET['slug']; ?></span>
          <?php } ?>
        </div>
      </div>
    </section>

    <section class="mt-2 mb-3 d-none d-sm-block">
      <div class="container">
        <div class="row">
          <div class="col-md-2 col-sm-3 pr-1 slotMenu">
            <div class="card p-0">
              <div class="card-body p-0">
                <ul class="nav flex-column">
                  <li class="nav-item">
                    <a href="<?php echo $urlweb; ?>/slot/" class="nav-link<?php if(!isset($_GET['slug'])) { echo ' active'; } ?>">
                      <img src="<?php echo $urlweb; ?>/upload/icon/hot.png" class="mb-1" style="float: left; width: 20px; height: 20px; margin-right:8px;">
                      Hot
                    </a>
                  </li>
                  <?php
                    $getProvider = mysqli_query($conn,"SELECT * FROM `tb_tripayapi` WHERE jenis = '1' ORDER BY cuid ASC") or die(mysqli_error());
                    while($gp = mysqli_fetch_array($getProvider)){
                  ?>
                  <li class="nav-item">
                    <a href="<?php echo $urlweb; ?>/slot/<?php echo $gp['provider']; ?>" class="nav-link<?php if(isset($_GET['slug'])){ if($_GET['slug'] == $gp['provider']) { echo ' active'; }} ?>">
                      <img src="<?php echo $urlweb; ?>/upload/icon/logogame/<?php echo $gp['image']; ?>" class="mb-1" style="float: left; width: 20px; height: 20px; margin-right:8px;">
                      <?php echo $gp['provider']; ?>
                    </a>
                  </li>
                  <?php } ?>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-10 col-sm-9 pl-1">
            <?php if(!isset($_GET['slug'])){ ?>
            <div class="card p-0 mb-2">
              <div class="card-body p-2 pb-0">
                <img src="<?php echo $urlweb; ?>/upload/icon/hot.png" class="mb-1" style="float: left; width: 30px; height: 30px; margin-right:5px; margin-bottom: 0px;">
                <p style="margin-top: 18px; line-height: 0;">Hot</p>
              </div>
            </div>
            <?php
              } else {
                $slug = $_GET['slug'];
                $sql_provider = mysqli_query($conn,"SELECT * FROM `tb_tripayapi` WHERE provider = '$slug'") or die(mysqli_error());
                $sp = mysqli_fetch_array($sql_provider);
            ?>
            <div class="card p-0 mb-2">
              <div class="card-body p-2 pb-0">
                <img src="<?php echo $urlweb; ?>/upload/icon/logogame/<?php echo $sp['image']; ?>" class="mb-1" style="float: left; width: 30px; height: 30px; margin-right:5px; margin-bottom: 0px;">
                <p style="margin-top: 18px; line-height: 0;"><?php echo $sp['provider']; ?></p>
              </div>
            </div>
            <?php } ?>
            <?php
              if(isset($_GET['slug'])){
                $where = "provider = '".$_GET['slug']."' AND `datatype` = 'SL' ORDER BY cuid ASC";
              } 
              else {
                $where = "`datatype` = 'SL' AND `provider` IN ('PRAGMATIC','PGSOFT') ORDER BY rand() LIMIT 30";
              }               
              $sql_3 = mysqli_query($conn,"SELECT * FROM `tb_gamelist` WHERE $where") or die(mysqli_error($conn));
              $s33 = mysqli_num_rows($sql_3);
              if($s33 == 0){
                echo '
                  <img src="'.$urlweb.'/upload/icon/slot_not_found.png" class="img-fluid" style="display: block; margin: 0 auto;">
                  <h3 class="text-center" style="margin-bottom: 100px;">Game Sedang Maintenance</h3>
                ';
              }
              else {
            ?>
            <div class="gameListSlot">
            
              <?php
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
                        $playUrl = 'href="'.$urlweb.'/playgame/'.$s3['provider'].'/'.$s3['gameid'].'"';
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
              ?>
              <div class="gameListSlotColoumn text-center">
                <a <?php echo $playUrl; ?>>
                  <div style="width: 100%; height: 175px!important; background: url('<?php echo $s3['image']; ?>') no-repeat; background-size: 100% 100%; background-position: center center; border: 1px solid #481c5f;">
                    <div style="position: relative; top: 0px; left: 0px; z-index: 1; width: 40px; height: 40px; background: #481c5f; padding: 3px; border-bottom-right-radius: 50%;">
                      <img src="<?php echo $urlweb; ?>/upload/icon/logogame/<?php echo $pm['image']; ?>" style="width: 30px; height: 30px; ">
                    </div>
                  </div>
                  <p class="mt-2" style="font-size: 0.75rem;"><?php echo $s3['gamename']; ?></p>
                      
                </a>
              </div>
              <?php } ?>
               
            </div>
            <?php } ?>
          </div>
        </div>
      </div>
    </section>

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
            <div class="card-body p-1 pb-3">
              <div class="row">
                <?php
                  $getProvider = mysqli_query($conn,"SELECT * FROM `tb_tripayapi` WHERE jenis = '1' ORDER BY cuid ASC") or die(mysqli_error());
                  while($gp = mysqli_fetch_array($getProvider)){
                ?>
                <div class="col-3 p-1 m-0">
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
      </div>
      <div class="container">
        <section class="mt-2">
          <?php
              if(isset($_GET['slug'])){
                $where = "provider = '".$_GET['slug']."' AND `datatype` = 'SL' ORDER BY cuid ASC";
              } 
              else {
                $where = "`provider` IN ('PRAGMATIC','PGSOFT') AND `datatype` = 'SL' ORDER BY rand() LIMIT 30";;
              }               
              $sql_3 = mysqli_query($conn,"SELECT * FROM `tb_gamelist` WHERE $where") or die(mysqli_error($conn));
              $s33 = mysqli_num_rows($sql_3);
              if($s33 == 0){
                echo '
                  <img src="'.$urlweb.'/upload/icon/slot_not_found.png" class="img-fluid" style="display: block; margin: 0 auto;">
                  <h3 class="text-center" style="margin-bottom: 100px;">Game Sedang Maintenance</h3>
                ';
              }
              else {
            ?>
            <div class="gameListSlot">
            
              <?php
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
                        $playUrl = 'href="'.$urlweb.'/playgame/'.$s3['provider'].'/'.$s3['gameid'].'"';
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
              ?>
              <div class="gameListSlotColoumn text-center">
                <a <?php echo $playUrl; ?>>
                  <div style="width: 100%; height: 100px!important; background: url('<?php echo $s3['image']; ?>') no-repeat; background-size: 100% 100%; background-position: center center; border: 1px solid #481c5f;">
                    <div style="position: relative; top: 0px; left: 0px; z-index: 1; width: 40px; height: 40px; background: #481c5f; padding: 3px; border-bottom-right-radius: 50%;">
                      <img src="<?php echo $urlweb; ?>/upload/icon/logogame/<?php echo $pm['image']; ?>" style="width: 30px; height: 30px; ">
                    </div>
                  </div>
                  <p class="mt-2" style="font-size: 0.75rem;"><?php echo $s3['gamename']; ?></p>
                      
                </a>
              </div>
              <?php } ?>
               
            </div>
            <?php } ?>
        </section>
      </div>
    </div>   
    
    <!--Start footer-->
    <?php include('footer.php'); ?>
    
</body>
</html>

