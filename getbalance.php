<?php
include('session.php');
error_reporting(0);
$userID = $u['cuid'];

$getLastBalance = mysqli_query($conn,"SELECT * FROM `tb_saldo_member` WHERE userID = '$userID'") or die(mysqli_error());
$glb = mysqli_fetch_array($getLastBalance);
echo 'Rp. '.number_format($glb['active']);
?>