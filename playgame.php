<?php
require_once('session.php');
error_reporting(0);

$usersID = $u['cuid'];
$usernames = $u['extplayer'];
$balanceMember = $s3['active'];

$provider = $_GET['slug'];
$gameide = $_GET['gameid'];

$kode_unik = substr(str_shuffle(1234567890),0,3);
$kd_transaksi = date('Ymds').$kode_unik.$usersID;
$requestID = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz123456789'),0,8);
$created_date = date('Y-m-d H:i:s');


$cekGame = mysqli_query($conn,"SELECT * FROM `tb_gamelist` WHERE `gameid` = '$gameide' AND `provider` = '$provider'") or die(mysqli_error());
$cek = mysqli_fetch_array($cekGame);
$gameType = strtolower($cek['category']);
$getProvider = mysqli_query($conn,"SELECT * FROM `tb_tripayapi` WHERE `provider` = '$provider'") or die(mysqli_error());
$gp = mysqli_fetch_array($getProvider);
$providerID = $gp['cuid'];
$providerCode = $gp['providerCode'];
$providerName = $gp['providerName'];
$gameid = $gameide;
$ishtml = 1;

if($gameType == 'slot'){
    $urlBack = $urlweb.'/slot/';
}
else if($gameType == 'eGames'){
    $urlBack = $urlweb.'/arcade/';
}
else if($gameType == 'arcade'){
    $urlBack = $urlweb.'/arcade/';
}
else if($gameType == 'fishing'){
    $urlBack = $urlweb.'/fishing/';
}
else if($gameType == 'casino'){
    $urlBack = $urlweb.'/casino/';
}
else if($gameType == 'sport'){
    $urlBack = $urlweb.'/sport/';
}
else {
    $urlBack = $urlweb.'/';
}

$catatan = 'Transfer to '.$providerName;

$postAgent = [
    'agent_code' => $agentCode, 
    'agent_token' => $agentToken,
  	'user_code' => $usernames
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
echo $responseAgent;
curl_close($chAgent);
$hasilAgent = json_decode($responseAgent, true);
if($hasilAgent['agent_balance'] < $balanceMember){
    $balanceTransfer = 0; 
}
else {
    $balanceTransfer = $balanceMember; 
}

$postLaunch = [
    'agent_code' => $agentCode, 
    'agent_token' => $agentToken,
    'user_code' => $usernames,
    'game_type' => $gameType,
    'provider_code' => $providerCode,
    'game_code' => $gameid,
    'lang' => 'en',
    'deposit_amount' => $balanceTransfer,
];
$jsonLaunch = json_encode($postLaunch, JSON_NUMERIC_CHECK);
    
$urlLaunch = $urlRequest.'/game_launch';
$chLaunch = curl_init();
curl_setopt($chLaunch, CURLOPT_URL, $urlLaunch); 
curl_setopt($chLaunch, CURLOPT_CUSTOMREQUEST, "POST");                                                                     
curl_setopt($chLaunch, CURLOPT_POSTFIELDS, $jsonLaunch);                                                                  
curl_setopt($chLaunch, CURLOPT_RETURNTRANSFER, true);                                                                      
curl_setopt($chLaunch, CURLOPT_HTTPHEADER, array(                                                                          
    'Content-Type: application/json'                                                                       
));   
curl_setopt($chLaunch, CURLOPT_SSL_VERIFYPEER, FALSE);

//execute post
$responseLaunch = curl_exec($chLaunch);
echo $responseLaunch;
curl_close($chLaunch);
$hasilLaunch = json_decode($responseLaunch, true);
if($hasilLaunch['status'] == 1){
    $playUrl = $hasilLaunch['launch_url'];
  	if($balanceTransfer > 0){
        $insert_transaksi = mysqli_query($conn,"INSERT INTO `tb_transaksi` (`kd_transaksi`, `date`, `transaksi`, `total`, `saldo`, `note`, `gameid`, `providerID`, `jenis`, `metode`, `pay_from`, `userID`, `status`) VALUES ('$kd_transaksi', '$created_date', 'Transfer', '$balanceTransfer', 0, '$catatan', '$gameid', '$providerID', 5, 0, 0,'$usersID', 0)") or die(mysqli_error());
    	$updateSaldoMember = mysqli_query($conn,"UPDATE `tb_saldo_member` SET `active` = 0, `transfer` = transfer + '$balanceTransfer' WHERE userID = '$usersID'") or die(mysqli_error());
    }
    header('Location:'.$playUrl);
    exit();
}
else {
  header('Location:'.$urlBack);
  exit(); 
}
                            
?>