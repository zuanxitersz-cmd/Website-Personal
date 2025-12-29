<footer>
  <div class="d-none d-sm-block">
    <div class="container">
      <hr>
      <div class="row">
        <div class="col-sm-8 pr-1">
          <div class="row">
            <div class="col-4">
              <h5 class="footTitle">Quick Links</h5>
              <ul class="nav flex-column">
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
              </ul>
            </div>
            <div class="col-4">
              <h5 class="footTitle">InBefore</h5>
              <ul class="nav flex-column">
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo $urlweb; ?>/page/tentang-kami">
                    Tentang Kami
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo $urlweb; ?>/kontak/">
                    Kontak Kami
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo $urlweb; ?>/page/deposit">
                    Deposit
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo $urlweb; ?>/page/withdraw">
                    Withdraw
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo $urlweb; ?>/referral/">
                    Referral
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo $urlweb; ?>/promo/">
                    Promosi
                  </a>
                </li>
              </ul>
            </div>
            <div class="col-4">
              <h5 class="footTitle">Legal</h5>
              <ul class="nav flex-column">
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo $urlweb; ?>/page/responsibe-gaming">
                    Responsible Gaming
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo $urlweb; ?>/page/syarat-ketentuan">
                    Syarat & Ketentuan
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo $urlweb; ?>/page/kebijakan-privasi">
                    Kebijakan Privasi
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo $urlweb; ?>/page/referral-syarat-ketentuan">
                    Referral Syarat & Ketentuan
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo $urlweb; ?>/page/pengaduan-konsumen">
                    Pengaduan Konsumen
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-sm-4 pl-1">
          <div class="row">
            <div class="col-6"></div>
            <div class="col-6">

              <img src="<?php echo $urlweb; ?>/upload/sigma.png" style="display: block; margin: 0 auto; width: 90%; height: auto;">
            </div>
          </div>
        </div>
      </div>

      <hr>
      <h5 class="footTitle">Provider</h5>
      <div class="row">
        <?php
        $getProvider = mysqli_query($conn,"SELECT * FROM `tb_tripayapi` ORDER BY cuid ASC") or die(mysqli_error());
        while($gp = mysqli_fetch_array($getProvider)){
          ?>
          <div class="col">
            <a class="nav-link text-center" href="#" style="font-size: 0.65rem;">
              <img src="<?php echo $urlweb; ?>/upload/icon/logogame/<?php echo $gp['image']; ?>" style="width: 50px; height: 50px; display: block; margin: 0 auto;">
              <?php echo $gp['provider']; ?>
            </a>
          </div>
        <?php } ?>
      </div>
      <hr>
      <h5 class="footTitle">Pembayaran</h5>
      <div class="row">
        <?php
        $sql_bankAdmin = mysqli_query($conn,"SELECT * FROM `tb_rekening_deposit` WHERE userID = 1 ORDER BY cuid ASC") or die(mysqli_error());
        while($sba = mysqli_fetch_array($sql_bankAdmin)){
          if($sba['status'] == 0){
            $aa = 'border : 1px solid rgba(213,214,213,.1);';
          }
          else {
            $aa = 'border : 1px solid #28a745;';
          }
          ?>
          <div class="col">
            <div style="width: 100%; height: auto; padding: 5px; <?php echo $aa; ?>">
              <img src="<?php echo $urlweb; ?>/upload/<?php echo $sba['image']; ?>" style="width: auto; height: 35px; filter: brightness(0) invert(1); display: block; margin: 0 auto;">
            </div>
          </div>
        <?php } ?>
      </div>
      <hr>
      <p class="text-center">&copy; <?php echo date('Y'); ?> InBefore. All rights reserved | 18+</p>
    </div>
  </div>
  <div class="d-block d-sm-none">
    <div class="container">

      <hr>
      <div class="row">
        <div class="col-6 mb-2">
          <h5 class="footTitle">Quick Links</h5>
          <ul class="nav flex-column">
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
          </ul>
        </div>
        <div class="col-6 mb-2">
          <h5 class="footTitle">InBefore</h5>
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link" href="#">
                Tentang Kami
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo $urlweb; ?>/kontak/">
                Kontak Kami
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo $urlweb; ?>/page_deposit/">
                Deposit
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo $urlweb; ?>/page_withdraw/">
                Withdraw
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo $urlweb; ?>/referral/">
                Referral
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo $urlweb; ?>/promo/">
                Promosi
              </a>
            </li>
          </ul>
        </div>
        <div class="col-6 mb-2">
          <hr>
          <h5 class="footTitle">Legal</h5>
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link" href="#">
                Responsible Gaming
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                Syarat & Ketentuan
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                Kebijakan Privasi
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                Referral Syarat & Ketentuan
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                Pengaduan Konsumen
              </a>
            </li>
          </ul>
        </div>
        <div class="col-6 mb-2">
          <hr>

          <img src="<?php echo $urlweb; ?>/upload/sigma.png" style="display: block; margin: 0 auto; width: 90%; height: auto;">
        </div>
      </div>
      <hr>
      <h5 class="footTitle">Partner</h5>
      <div class="row">
        <?php
        $getProvider = mysqli_query($conn,"SELECT * FROM `tb_tripayapi` ORDER BY cuid ASC") or die(mysqli_error());
        while($gp = mysqli_fetch_array($getProvider)){
          ?>
          <div class="col-3">
            <a class="nav-link text-center" href="#" style="font-size: 0.65rem;">
              <img src="<?php echo $urlweb; ?>/upload/icon/logogame/<?php echo $gp['image']; ?>" style="width: 50px; height: 50px; display: block; margin: 0 auto;">
              <?php echo $gp['provider']; ?>
            </a>
          </div>
        <?php } ?>
      </div>
      <hr>
      <h5 class="footTitle">Metode Deposit</h5>
      <div class="row">
        <?php
        $sql_bankAdmin = mysqli_query($conn,"SELECT * FROM `tb_rekening_deposit` WHERE userID = 1 ORDER BY cuid ASC") or die(mysqli_error());
        while($sba = mysqli_fetch_array($sql_bankAdmin)){
          if($sba['status'] == 0){
            $aa = 'border : 1px solid rgba(213,214,213,.1);';
          }
          else {
            $aa = 'border : 1px solid #28a745;';
          }
          ?>
          <div class="col-4 mb-2">
            <div style="width: 100%; height: auto; padding: 5px; <?php echo $aa; ?>">
              <img src="<?php echo $urlweb; ?>/upload/<?php echo $sba['image']; ?>" style="width: auto; height: 35px; filter: brightness(0) invert(1); display: block; margin: 0 auto;">
            </div>
          </div>
        <?php } ?>
      </div>
      <hr>
      <p class="text-center">&copy; <?php echo date('Y'); ?> InBefore. All rights reserved | 18+</p>
      <div style="width: 100%; height: 65px;"></div>
    </div>
    <div class="pt-2 pb-2 d-block d-sm-none" style="position: fixed; bottom: 0; width: 100%; background: #1a0924;">
      <div class="container">
        <div class="row">
          <div class="col pb-1 text-center">
            <a href="<?php echo $urlweb; ?>" style="color: #fff; font-size: 0.75rem; font-weight: 700;">
              <img src="<?php echo $urlweb; ?>/upload/home.png" class="mb-1" style="width: 30px; height: 30px; filter: brightness(0) invert(1); display: block; margin: 0 auto;">
              Beranda
            </a>
          </div>
          <?php if(isset($_SESSION['user'])){ ?>

          <?php } else { ?>
            <div class="col pb-1 text-center">
              <a href="<?php echo $urlweb; ?>/register/" style="color: #fff; font-size: 0.75rem; font-weight: 700;">
                <img src="<?php echo $urlweb; ?>/upload/edit.png" class="mb-1" style="width: 30px; height: 30px; filter: brightness(0) invert(1); display: block; margin: 0 auto;">
                Daftar
              </a>
            </div> 
            <div class="col pb-1 text-center">
              <a href="<?php echo $urlweb; ?>/login/" style="color: #fff; font-size: 0.75rem; font-weight: 700;">
                <img src="<?php echo $urlweb; ?>/upload/user.png" class="mb-1" style="width: 30px; height: 30px; filter: brightness(0) invert(1); display: block; margin: 0 auto;">
                Masuk
              </a>
            </div>
          <?php } ?>
          <div class="col pb-1 text-center">
            <a href="<?php echo $urlweb; ?>/promo/" style="color: #fff; font-size: 0.75rem; font-weight: 700;">
              <img src="<?php echo $urlweb; ?>/upload/promotions.png" class="mb-1" style="width: 30px; height: 30px; filter: brightness(0) invert(1); display: block; margin: 0 auto;">
              Promosi
            </a>
          </div> 
          <div class="col pb-1 text-center">
            <a href="https://tawk.to/chat/667143139a809f19fb3eddf0/1i0l6s10f" style="color: #fff; font-size: 0.75rem; font-weight: 700;">
              <img src="<?php echo $urlweb; ?>/upload/chat.png" class="mb-1" style="width: 30px; height: 30px; filter: brightness(0) invert(1); display: block; margin: 0 auto;">
              Kontak
            </a>
          </div>  
        </div>
      </div>
    </div>
  </div>
</footer>
</div>

<?php
$getChatLive = mysqli_query($conn,"SELECT * FROM `tb_livechat` WHERE cuid = 1") or die(mysqli_error());
$gcl = mysqli_fetch_array($getChatLive);
$livechatID = $gcl['lc_mobile'];
?>

<div style="position: fixed; bottom: 20px; left: 10px; width: 50px; height: auto;">
  <div class="foot_icon" style="width: 50px; height: 50px;">
    <a href="<?php echo $urlweb; ?>/rtp/" target="_blank">
      <img src="<?php echo $urlweb; ?>/upload/rtp.gif" class="mb-1">
    </a>
  </div>
  <div class="foot_icon" style="width: 50px; height: 50px;">
    <a href="https://api.whatsapp.com/send?phone=<?php echo $gcl['lc_js']; ?>&text=Hallo." target="_blank">
      <img src="<?php echo $urlweb; ?>/upload/whatsapp.gif">
    </a>
  </div>
</div>

<div class="modal fade" id="modalLogin">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content animated bounceIn" style="background: #481c5f; border-radius: 15px; border: 1px solid rgba(255,255,255,0.5)">
      <div class="modal-header p-2" style="border-bottom: 0!important;">
        <h5 class="modal-title"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="border: 2px solid #fff; border-radius: 50%; width: 30px; height: 30px; padding: 0!important; margin: 0!important; color: #fff; line-height: 20px; font-size: 18px;">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-dark pt-0">
        <h5 class="text-center text-white"><strong>Masuk</strong></h5>
        <form role="form" action="<?php echo $urlweb; ?>/login-proses.php" method="POST">
          <div class="form-group mb-3">
            <input type="text" name="user" class="form-control" pattern="[a-zA-Z0-9]+" placeholder="Username" title="Username Tidak Valid" required>                  
          </div>
          <div class="form-group mb-3">
            <input type="password" name="pass" class="form-control" pattern="[a-z0-9A-Z]{8}+" placeholder="Password" title="Password Hanya Masukan Huruf dan Angka" required>                  
          </div>
          <button type="submit" class="btn btn-main w-100 mb-3">Masuk</button>
          <hr>
          <div class="text-center">
            <a href="<?php echo $urlweb; ?>/forgot/" style="font-size: 14px;">Lupa Password?</a><br>
            <a href="<?php echo $urlweb; ?>/register/" style="font-size: 14px;">Buat Akun</a>
          </div>
        </form>  
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modalGame">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content animated bounceIn" style="background: #481c5f; border-radius: 15px; border: 1px solid rgba(255,255,255,0.5)">
      <div class="modal-header p-2" style="border-bottom: 0!important;">
        <h5 class="modal-title"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="border: 2px solid #fff; border-radius: 50%; width: 30px; height: 30px; padding: 0!important; margin: 0!important; color: #fff; line-height: 20px; font-size: 18px;">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-white pt-0">
        <img src="<?php echo $urlweb; ?>/upload/maintenance_imge.png" class="img-fluid" style="display: block; margin: 0 auto; margin-top: 25%;">
        <p class="text-center text-white">Mohon Maaf, Saat ini Game sedang tidak dapat dimainkan!</p> 
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="modalAlert">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content animated bounceIn" style="background: #481c5f; border-radius: 15px; border: 1px solid rgba(255,255,255,0.5)">
      <div class="modal-header p-2" style="border-bottom: 0!important;">
        <h5 class="modal-title"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="border: 2px solid #fff; border-radius: 50%; width: 30px; height: 30px; padding: 0!important; margin: 0!important; color: #fff; line-height: 20px; font-size: 18px;">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-white pt-0">
        <img src="<?php echo $urlweb; ?>/upload/maintenance_imge.png" class="img-fluid" style="display: block; margin: 0 auto; margin-top: 25%;">
        <p class="text-center text-white">Mohon Maaf, Anda Tidak Dapat memainkan Permainan ini!</p>
        <p class="text-center text-white">Silahkan Hubungi Admin untuk dapat bermain!</p>
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="<?php echo $urlweb; ?>/assets/js/jquery.min.js"></script>
<script src="<?php echo $urlweb; ?>/assets/js/popper.min.js"></script>
<script src="<?php echo $urlweb; ?>/assets/js/bootstrap.min.js"></script>
<script src="<?php echo $urlweb; ?>/assets/js/jquery.countdown.js"></script>
<script type="text/javascript" src="<?php echo $urlweb; ?>/assets/js/main.js"></script>

<!-- simplebar js -->
<script src="<?php echo $urlweb; ?>/assets/plugins/simplebar/js/simplebar.js"></script>
<!-- horizontal-menu js -->
<script src="<?php echo $urlweb; ?>/assets/js/horizontal-menu.js"></script>

<!-- Custom scripts -->
<script src="<?php echo $urlweb; ?>/assets/plugins/summernote/dist/summernote-bs4.min.js"></script>
<!--Select Plugins Js-->
<script src="<?php echo $urlweb; ?>/assets/plugins/select2/js/select2.min.js"></script>
<!--Data Tables js-->
<script src="<?php echo $urlweb; ?>/assets/plugins/bootstrap-datatable/js/jquery.dataTables.min.js"></script>
<script src="<?php echo $urlweb; ?>/assets/plugins/bootstrap-datatable/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo $urlweb; ?>/assets/plugins/bootstrap-datatable/js/dataTables.buttons.min.js"></script>
<script src="<?php echo $urlweb; ?>/assets/plugins/bootstrap-datatable/js/buttons.bootstrap4.min.js"></script>
<script src="<?php echo $urlweb; ?>/assets/plugins/bootstrap-datatable/js/jszip.min.js"></script>
<script src="<?php echo $urlweb; ?>/assets/plugins/bootstrap-datatable/js/pdfmake.min.js"></script>
<script src="<?php echo $urlweb; ?>/assets/plugins/bootstrap-datatable/js/vfs_fonts.js"></script>
<script src="<?php echo $urlweb; ?>/assets/plugins/bootstrap-datatable/js/buttons.html5.min.js"></script>
<script src="<?php echo $urlweb; ?>/assets/plugins/bootstrap-datatable/js/buttons.print.min.js"></script>
<script src="<?php echo $urlweb; ?>/assets/plugins/bootstrap-datatable/js/buttons.colVis.min.js"></script>
<script src="<?php echo $urlweb; ?>/assets/js/owl.carousel.js"></script>
<script src="<?php echo $urlweb; ?>/assets/js/owl.carousel.min.js"></script>

<script>
  $(document).ready(function() {
  //Default data table
    $('.default-datatable').DataTable({
      "searching": false,
      "dom": 'rtp'
    });
    setInterval(function () {
      $('.balance').load('<?php echo $urlweb; ?>/getbalance.php');
    }, 10000);
  });
  function openNav() {
    document.getElementById("mySidenav").style.width = "340px";
    document.getElementById("openBtn").style.color = "#FFB302";
  }

  function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("openBtn").style.color = "#fff";
  }

  $('.main-content .owl-carousel').owlCarousel({
    stagePadding: 50,
    loop: false,
    autoplay:false,
    margin: 10,
    nav: true,
    navText: [
      '<i class="fa fa-angle-left" aria-hidden="true"></i>',
      '<i class="fa fa-angle-right" aria-hidden="true"></i>'
      ],
    navContainer: '.main-content .custom-nav',
    responsive:{
      0:{
        items: 4
      },
      600:{
        items: 6
      },
      1000:{
        items: 6
      }
    }
  });
</script>