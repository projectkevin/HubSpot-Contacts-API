<?php
	$search = 'https://api.hubapi.com/leads/v1/lead/8a41f2f22906b93a012906b9438f0008?access_token=demooooo-oooo-oooo-oooo-oooooooooooo';
     $ch = curl_init($search);
     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
     $recived_content = curl_exec($ch); 
     $data = json_decode($recived_content,true);
     foreach ($data as $customer) {
	     echo $customer["firstName"] . ' ';
	     echo $customer["lastName"];
	     echo '<br>';
	 }
    echo '<p>&nbsp;</p>'; var_dump($data);
?>