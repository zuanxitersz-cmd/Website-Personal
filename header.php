      <div class="topMenu">
        <div class="container">
          <?php
            error_reporting(0);
            if(isset($_SESSION['user'])){
              $user =mysqli_query($conn,"SELECT * FROM `tb_user` WHERE user = '".$_SESSION['user']."'") or die (mysqli_error());
              $u = mysqli_fetch_array($user);
              $userID = $u['cuid'];

              $sql_balance = mysqli_query($conn,"SELECT * FROM `tb_saldo_member` WHERE userID = '$userID'") or die(mysqli_error());
              $sb = mysqli_fetch_array($sql_balance);
          ?>
          <div class="d-none d-sm-block">
            <div class="row">
              <div class="col-md-2 col-sm-3">
                <a href="<?php echo $urlweb; ?>">
                  <img src="<?php echo $urlweb; ?>/upload/<?php echo $s0['image']; ?>" style="display: block; margin: 0 auto; width: auto; max-height: 50px; color: #fff!important;" alt="logo icon">
                </a>
              </div>
              <div class="col-md-10 col-sm-9">
                <form class="form-inline justify-content-end mt-2" action="<?php echo $urlweb; ?>/login-proses/" method="POST">
                  <a href="<?php echo $urlweb; ?>/account/" style="font-size: 14px;"><i class="fa fa-user-circle"></i>&nbsp; <?php echo $_SESSION['user']; ?></a>
                  <a href="#" class="balance ml-3 mr-3" style="font-size: 14px;">Rp. <?php echo number_format($sb['active']); ?></a>
                  <a href="<?php echo $urlweb; ?>/deposit/" class="btn btn-main mr-1"><i class="fa fa-money-bill-transfer"></i>&nbsp;Deposit</a>
                  <a href="<?php echo $urlweb; ?>/withdraw/" class="btn btn-secondaries mr-1"><i class="fa fa-money-bill-wave"></i>&nbsp;Withdraw</a>
                  
				  
                </form>
              </div>
            </div>
          </div>
          <div class="d-block d-sm-none">
            <div class="row">
              <div class="col-6">
                <a href="<?php echo $urlweb; ?>">
                  <img src="<?php echo $urlweb; ?>/upload/<?php echo $s0['image']; ?>" style="width: auto; max-height: 50px; color: #fff!important;" alt="logo icon">
                </a>
              </div>
              <div class="col-6 text-right">
                <form class="form-inline justify-content-end mt-2">
                  <p style="line-height: 0px; margin-top: 8px;"><small>Saldo Tersedia :</small></p>
                  <p style="line-height: 0px; color: #FFB302!important;">Rp. <?php echo number_format($sb['active']); ?></p>
                </form>
              </div>
            </div>
          </div>
          <?php } else { ?>
          <div class="d-none d-sm-block">
            <div class="row">
              <div class="col-md-2 col-sm-3">
                <a href="<?php echo $urlweb; ?>">
                  <img src="<?php echo $urlweb; ?>/upload/<?php echo $s0['image']; ?>" style="display: block; margin: 0 auto; width: auto; max-height: 50px; color: #fff!important;" alt="logo icon">
                </a>
              </div>
              <div class="col-md-10 col-sm-9">
                <form class="form-inline justify-content-end mt-2" action="<?php echo $urlweb; ?>/login-proses/" method="POST">
                  <a href="<?php echo $urlweb; ?>/forgot/" style="font-size: 14px;">Lupa Password?</a>
                  <input type="text" name="user" class="form-control ml-2 mr-2" pattern="[a-zA-Z0-9]+" placeholder="Username" title="Username Tidak Valid" required>
                  <input type="password" name="pass" class="form-control mr-2" pattern="[a-z0-9A-Z]{8}+" placeholder="Password" title="Password Hanya Masukan Huruf dan Angka" required>
                  <button type="submit" class="btn btn-main mr-2">Masuk</button>
                  <a href="<?php echo $urlweb; ?>/register/" class="btn btn-secondaries">Daftar</a>
                  
				  
                </form>
              </div>
            </div>
          </div>
          <div class="d-block d-sm-none">
            <div class="row">
              <div class="col-6">
                <a href="<?php echo $urlweb; ?>">
                  <img src="<?php echo $urlweb; ?>/upload/<?php echo $s0['image']; ?>" style="width: auto; max-height: 30px; color: #fff!important;" alt="logo icon">
                </a>
              </div>
              <div class="col-6">
                <form class="form-inline justify-content-end mt-2">
                  <button type="button" class="btn btn-main" data-toggle="modal" data-target="#modalLogin" data-backdrop="static" data-keyboard="false">Masuk</button>
                </form>
              </div>
            </div>
          </div>
          <?php } ?>
        </div>
      </div>
      <div class="topNav d-none d-sm-block">
        <div class="container">
          <ul class="nav justify-content-center">
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
            <li class="nav-item">
              <a class="nav-link" href="<?php echo $urlweb; ?>/promo/">
                <img src="<?php echo $urlweb; ?>/upload/icon/menu/icon/promo.png" style="width: 40px; height: 40px; display: block; margin: 0 auto; margin-bottom: 3px;">
                Promosi
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo $urlweb; ?>/referral/">
                <img src="<?php echo $urlweb; ?>/upload/icon/menu/icon/referral.png" style="width: 40px; height: 40px; display: block; margin: 0 auto; margin-bottom: 3px;">
                Referral
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://tawk.to/chat/667143139a809f19fb3eddf0/1i0l6s10f">
                <img src="<?php echo $urlweb; ?>/upload/icon/menu/icon/cs.png" style="width: 40px; height: 40px; display: block; margin: 0 auto; margin-bottom: 3px;">
                Kontak
              </a>
            </li>
          </ul>
        </div>
      </div>
      <div class="topNav d-block d-sm-none">
        <div class="container-fluid">
          <div class="row">
            <div class="col-9 pr-0">
              <div class="mobileNavWrapper">
                <ul class="nav">
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo $urlweb; ?>">
                      Beranda
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo $urlweb; ?>/slot/">
                      Slots
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo $urlweb; ?>/poker/">
                      Poker
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo $urlweb; ?>/sport/">
                      Sports+
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo $urlweb; ?>/casino/">
                      Casino
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo $urlweb; ?>/fishing/">
                      Fishing
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo $urlweb; ?>/lotto/">
                      Lotto
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo $urlweb; ?>/arcade/">
                      Arcade
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo $urlweb; ?>/promo/">
                      Promosi
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-3 pl-1">
              <button class="btn float-right" type="button" id="openBtn" href="javascript:void();" onclick="openNav();" style="font-weight: 700!important;">
                <strong>Menu <i class="fa fa-bars"></i></strong>
              </button>
            </div>
          </div>
        </div>
      </div>

      <div id="mySidenav" class="sidenav">
        <button class="closebtn" id="closeBtn" style="position: relative; top: 0; left: -20px; background: #1a0924; border: 1px solid #000; border-top-left-radius: 50%; border-bottom-left-radius: 50%; width: 30px; height: 30px; padding: 0!important; margin: 0!important; color: #fff; line-height: 20px; font-size: 18px;" onclick="closeNav()">
          <i class="fa fa-close"></i>
        </button>
        <div class="sidenavTop">
          <div class="sidebarMenuLeft">
            <div class="sidebarMenuLeftItem">
              <a href="<?php echo $urlweb; ?>/slot/">
                <img src="<?php echo $urlweb; ?>/upload/icon/menu2/icon/slot.png" style="width: 40px; height: 40px; display: block; margin: 0 auto; margin-bottom: 3px;">
                Slots
              </a>
            </div>
            <div class="sidebarMenuLeftItem">
              <a href="<?php echo $urlweb; ?>/poker/">
                <img src="<?php echo $urlweb; ?>/upload/icon/menu2/icon/poker.png" style="width: 40px; height: 40px; display: block; margin: 0 auto; margin-bottom: 3px;">
                Poker
              </a>
            </div>
            <div class="sidebarMenuLeftItem">
              <a href="<?php echo $urlweb; ?>/sport/">
                <img src="<?php echo $urlweb; ?>/upload/icon/menu2/icon/sport.png" style="width: 40px; height: 40px; display: block; margin: 0 auto; margin-bottom: 3px;">
                Sports+
              </a>
            </div>
            <div class="sidebarMenuLeftItem">
              <a href="<?php echo $urlweb; ?>/casino/">
                <img src="<?php echo $urlweb; ?>/upload/icon/menu2/icon/casino.png" style="width: 40px; height: 40px; display: block; margin: 0 auto; margin-bottom: 3px;">
                Casino
              </a>
            </div>
            <div class="sidebarMenuLeftItem">
              <a href="<?php echo $urlweb; ?>/fishing/">
                <img src="<?php echo $urlweb; ?>/upload/icon/menu2/icon/fishing.png" style="width: 40px; height: 40px; display: block; margin: 0 auto; margin-bottom: 3px;">
                Fishing
              </a>
            </div>
            <div class="sidebarMenuLeftItem">
              <a href="<?php echo $urlweb; ?>/lotto/">
                <img src="<?php echo $urlweb; ?>/upload/icon/menu2/icon/lottery.png" style="width: 40px; height: 40px; display: block; margin: 0 auto; margin-bottom: 3px;">
                Lotto
              </a>
            </div>
            <div class="sidebarMenuLeftItem">
              <a href="<?php echo $urlweb; ?>/arcade/">
                <img src="<?php echo $urlweb; ?>/upload/icon/menu2/icon/arcade.png" style="width: 40px; height: 40px; display: block; margin: 0 auto; margin-bottom: 3px;">
                Arcade
              </a>
            </div>
            <div class="sidebarMenuLeftItem">
              <a href="<?php echo $urlweb; ?>/promo/">
                <img src="<?php echo $urlweb; ?>/upload/icon/menu/icon/promo.png" style="width: 40px; height: 40px; display: block; margin: 0 auto; margin-bottom: 3px;">
                Promosi
              </a>
            </div>
          </div>
        </div>
        <div class="sidenavBottom">
          <div class="side_navigation mb-3">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a href="<?php echo $urlweb; ?>" class="nav-link">
                  <img src="<?php echo $urlweb; ?>/upload/home.png" class="mb-1" style="float: left; width: 20px; height: 20px; filter: brightness(0) invert(1); margin-right:8px;">
                  Beranda
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo $urlweb; ?>/promo/" class="nav-link">
                  <img src="<?php echo $urlweb; ?>/upload/promotions.png" class="mb-1" style="float: left; width: 20px; height: 20px; filter: brightness(0) invert(1); margin-right:8px;">
                  Promosi
                </a>
              </li>
              <?php if(isset($_SESSION['user'])){ ?>
              <li class="nav-item">
                <a href="<?php echo $urlweb; ?>/deposit/" class="nav-link">
                  <img src="<?php echo $urlweb; ?>/upload/deposit.png" class="mb-1" style="float: left; width: 20px; height: 20px; filter: brightness(0) invert(1); margin-right:8px;">
                  Deposit
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo $urlweb; ?>/history/" class="nav-link">
                  <img src="<?php echo $urlweb; ?>/upload/history.png" class="mb-1" style="float: left; width: 20px; height: 20px; filter: brightness(0) invert(1); margin-right:8px;">
                  Riwayat
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo $urlweb; ?>/withdraw/" class="nav-link">
                  <img src="<?php echo $urlweb; ?>/upload/withdraw.png" class="mb-1" style="float: left; width: 20px; height: 20px; filter: brightness(0) invert(1); margin-right:8px;">
                  Withdraw
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo $urlweb; ?>/account/" class="nav-link">
                  <img src="<?php echo $urlweb; ?>/upload/user.png" class="mb-1" style="float: left; width: 20px; height: 20px; filter: brightness(0) invert(1); margin-right:8px;">
                  Akun Saya
                </a>
              </li>
              <?php } ?>
              <li class="nav-item">
                <a href="<?php echo $urlweb; ?>/referral/" class="nav-link">
                  <img src="<?php echo $urlweb; ?>/upload/p2p.png" class="mb-1" style="float: left; width: 20px; height: 20px; filter: brightness(0) invert(1); margin-right:8px;">
                  Referral
                </a>
              </li>
              <li class="nav-item">
                <a href="https://tawk.to/chat/667143139a809f19fb3eddf0/1i0l6s10f" class="nav-link">
                  <img src="<?php echo $urlweb; ?>/upload/chat.png" class="mb-1" style="float: left; width: 20px; height: 20px; filter: brightness(0) invert(1); margin-right:8px;">
                  Kontak
                </a>
              </li>
            </ul>
          </div>
          <div class="sidenavBtn text-center">
            <?php if(isset($_SESSION['user'])){ ?>
            <a href="<?php echo $urlweb; ?>/logout/" class="btn btn-main" style="width: 125px; margin-left:-15px;">Keluar</a>
            <?php } else { ?>
            <a href="<?php echo $urlweb; ?>/register/" class="btn btn-secondaries" style="width: 125px; margin-left:-15px;">Daftar</a>
            <button type="button" class="btn btn-main" style="width: 150px;" data-toggle="modal" data-target="#modalLogin" data-backdrop="static" data-keyboard="false">Masuk</button>
            <?php } ?>
          </div>
        </div>
      </div>

<?php
error_reporting(0);
if($s0['onoff'] == 1){
    header('location:'.$urlweb.'/mtweb/');
}
if(isset($_SESSION['user'])){
    $user =mysqli_query($conn,"SELECT * FROM `tb_user` WHERE user = '".$_SESSION['user']."'") or die (mysqli_error());
    $u = mysqli_fetch_array($user);
    $users = $u['user'];
    if($u['level'] == 'user'){
        $usersID = $u['cuid'];
        $usernames = $u['extplayer'];
        
        $getBalance = mysqli_query($conn,"SELECT * FROM `tb_saldo_member` WHERE userID = '$usersID'") or die(mysqli_error());
        $gb = mysqli_fetch_array($getBalance);
                
        $getTransaksi = mysqli_query($conn,"SELECT * FROM `tb_transaksi` WHERE userID = '$usersID' AND jenis = 5 AND status = 0 ORDER BY cuid DESC LIMIT 1") or die(mysqli_error($conn));
        $gt = mysqli_fetch_array($getTransaksi);
      	$transaksiID = $gt['cuid'];
        $providerID = $gt['providerID'];
        $gameID = $gt['gameid'];
        $getGame = mysqli_query($conn,"SELECT * FROM `tb_tripayapi` WHERE cuid = '$providerID'") or die(mysqli_error());
        $gg = mysqli_fetch_array($getGame);
        $providerCode = $gg['providerCode'];
        $providerName = $gg['providerName'];
        $catatan = $providerName.' Transfer Back ';
      
        $postAgent = [
            'agent_code' => $agentCode, 
            'agent_token' => $agentToken,
            'user_code' => $usernames,
        ];
        $jsonAgent = json_encode($postAgent);

        $urlAgent = $urlRequest.'/info';
        $chAgent = curl_init();
        curl_setopt($chAgent, CURLOPT_URL, $urlAgent); 
        curl_setopt($chAgent, CURLOPT_CUSTOMREQUEST, "POST");                                                                     
        curl_setopt($chAgent, CURLOPT_POSTFIELDS, $jsonAgent);                                                                  
        curl_setopt($chAgent, CURLOPT_RETURNTRANSFER, true);                                                                      
        curl_setopt($chAgent, CURLOPT_HTTPHEADER, array(                                                                          
            'Content-Type: application/json'                                                                       
        ));   
        curl_setopt($chAgent, CURLOPT_SSL_VERIFYPEER, FALSE);

        //execute post
        $responseAgent = curl_exec($chAgent);
        //echo $responseAgent;
        curl_close($chAgent);
        $hasilAgent = json_decode($responseAgent, true);
      
        $balanceMember = $hasilAgent['user_list'][0]['user_balance'];
      	
        if($balanceMember > 0){
          $postTransaksi = [
              'agent_code' => $agentCode, 
              'agent_token' => $agentToken,
              'user_code' => $usernames,
              'amount' => $balanceMember
          ];
          $jsonTransaksi = json_encode($postTransaksi);
          $urlTransaksi = $urlRequest.'/user_withdraw';
          $chTransaksi = curl_init();
          curl_setopt($chTransaksi, CURLOPT_URL, $urlTransaksi); 
          curl_setopt($chTransaksi, CURLOPT_CUSTOMREQUEST, "POST");                                                                     
          curl_setopt($chTransaksi, CURLOPT_POSTFIELDS, $jsonTransaksi);                                                                  
          curl_setopt($chTransaksi, CURLOPT_RETURNTRANSFER, true);                                                                      
          curl_setopt($chTransaksi, CURLOPT_HTTPHEADER, array(                                                                          
              'Content-Type: application/json'                                                                       
          ));   
          curl_setopt($chTransaksi, CURLOPT_SSL_VERIFYPEER, FALSE);

          //execute post
          $responseTransaksi = curl_exec($chTransaksi);
          //echo $responseTransaksi;
          curl_close($chTransaksi);
          $hasilTransaksi = json_decode($responseTransaksi, true);
          if($hasilTransaksi['status'] == 1){
            $kode_unik = substr(str_shuffle(1234567890),0,3);
            $kd_transaksi = date('Ymds').$kode_unik.$usersID;
            $created_date = date('Y-m-d H:i:s');
            if($gt['status'] == 0){
                if($gb['active'] == 0){
                    $insert_transaksi = mysqli_query($conn,"INSERT INTO `tb_transaksi` (`kd_transaksi`, `date`, `transaksi`, `total`, `saldo`, `note`, `gameid`, `providerID`, `jenis`, `metode`, `pay_from`, `userID`, `status`) VALUES ('$kd_transaksi','$created_date','Transfer','$balanceMember',0, '$catatan', '', '$providerID','6','0','$providerID','$usersID',1)") or die(mysqli_error($conn));
                    $updateBalance = mysqli_query($conn,"UPDATE `tb_saldo_member` SET `active` = '$balanceMember' WHERE userID = '$usersID'") or die(mysqli_error($conn));
                    $updateTransaksi = mysqli_query($conn,"UPDATE `tb_transaksi` SET `status` = 1 WHERE cuid = '$transaksiID'") or die(mysqli_error($conn));
                }
            }
          }
        }       
    }
}
?>