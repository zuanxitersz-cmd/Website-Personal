<?php
include('config/koneksi.php');

$postArray = [
        'agent_code' => 'AGENT_CODE', 
        'agent_token' => 'AGENT_TOKEN',
        'game_type' => 'slot'
    ];
    $jsonData = json_encode($postArray);

    $url1 = $urlRequest.'provider_list';
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
    for($i=0;$i<COUNT($hasil['providers']);$i++){
        $code = $hasil['providers'][$i]['code'];
        $slug = ucwords(strtolower($code));
        $provide = $hasil['providers'][$i]['name'];
        
        $insert = mysqli_query($conn,"INSERT INTO `tb_tripayapi` (`image`, `providerCode`, `provider`, `providerName`, `status`, `jenis`) VALUES ('','$code','$slug','$provide',1,1)") or die(mysqli_error($conn));
    }
?>