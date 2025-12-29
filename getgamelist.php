<?php
include('config/koneksi.php');

$getProvider = mysqli_query($conn,"SELECT * FROM `tb_tripayapi` WHERE status IN('1') ORDER BY cuid ASC") or die(mysqli_error());
while($gp = mysqli_fetch_array($getProvider)){
    $providerCode = $gp['providerCode'];
    $provider = $gp['provider'];
    echo $provider;
    $postArray = [
        'agent_code' => 'AGENT_CODE', 
        'agent_token' => 'AGENT_TOKEN',
        'provider_code' => $providerCode,
        'lang' => "id"
    ];
    $jsonData = json_encode($postArray);

    $url1 = $urlRequest.'game_list';
			$ch1 = curl_init();
			curl_setopt($ch1, CURLOPT_URL, $url1); 
			curl_setopt($ch1, CURLOPT_CUSTOMREQUEST, "POST");                                                                     
			curl_setopt($ch1, CURLOPT_POSTFIELDS, $jsonData);                                                                  
			curl_setopt($ch1, CURLOPT_RETURNTRANSFER, true);                                                                      
			curl_setopt($ch1, CURLOPT_HTTPHEADER, array(                                                                          
			    'Content-Type: application/json'                                                                       
			));   
			curl_setopt($ch1, CURLOPT_SSL_VERIFYPEER, FALSE);

			//execute post
			$response1 = curl_exec($ch1);
    echo $response1;
			curl_close($ch1);
    
    $hasil = json_decode($response1,true);
    
    for($i=0;$i<COUNT($hasil['games']);$i++){
        $code = str_replace(array("’","'"),"&apos;",$hasil['games'][$i]['game_code']);
        $game_name = str_replace(array("’","'"),"&apos;",$hasil['games'][$i]['game_name']);
        $image = str_replace(array("’","'"),"&apos;",$hasil['games'][$i]['banner']);
        
        $insert = mysqli_query($conn,"INSERT INTO `tb_gamelist` (`provider`, `image`, `gameid`, `gamename`, `category`, `datatype`) VALUES ('$provider','$image','$code','$game_name','slot','SL')") or die(mysqli_error($conn));
    }
}
?>