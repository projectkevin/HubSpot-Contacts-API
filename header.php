 <?php
//Grab the cookie & IP address, then build out the HS context array
    $hubspotutk = $_COOKIE['hubspotutk'];
    $ip_addr = $_SERVER['REMOTE_ADDR'];
    $hs_context = array(
            'hutk' => $hubspotutk,
            'ipAddress' => $ip_addr,
            'pageUrl' => 'http://iamkev.in/hubspot/form',
            'pageTitle' => 'Test Form'
        );
    $hs_context_json = json_encode($hs_context);
    //Pull out the information submitted from the form
    extract($_POST);
    //Populate the vars with values from the form POST data, API requires them to be urlencoded
    $str_post = "firstname=" . urlencode($firstname) . 
    			"&lastname=" . urlencode($lastname) . 
    			"&email=" . urlencode($email) . 
    			"&hs_context=" . urlencode($hs_context_json);
    //Assign the URL to something easy to read in cURL - using demo account & a demo form...
    $endpoint = 'https://forms.hubspot.com/uploads/form/v2/152363/3dcdd9e2-03af-4961-9440-14244153c080';
    //cURL stuff is all standard bar the HTTP header array as per API requirements
    $ch = @curl_init();
    @curl_setopt($ch, CURLOPT_POST, true);
    @curl_setopt($ch, CURLOPT_POSTFIELDS, $str_post);
    @curl_setopt($ch, CURLOPT_URL, $endpoint);
    @curl_setopt($ch, CURLOPT_HTTPHEADER, array('application/x-www-form-urlencoded'));
    @curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = @curl_exec($ch);
    @curl_close($ch);
    echo $response; //if there is one
    echo $firstname . ' ' . $lastname . ' ' . $email; //Will only display this line if anything is passed.
    echo '<p>Go back to <a href="index.php">index</a>.</p>';
?>