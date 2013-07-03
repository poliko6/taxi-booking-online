<?php

$apiKey = ''; // Your MailChimp API Key
$listId = ''; // Your MailChimp List ID
$double_optin=false;
$send_welcome=false;
$email_type = 'html';
$email = $_POST['lp-subscribe-email'];
//replace us2 with your actual datacenter
$submit_url = "http://us5.api.mailchimp.com/1.3/?method=listSubscribe";

if( isset( $email ) AND $email != '' ) {

    $data = array(
        'email_address'=>$email,
        'apikey'=>$apiKey,
        'id' => $listId,
        'double_optin' => $double_optin,
        'send_welcome' => $send_welcome,
        'email_type' => $email_type
    );
    
    $payload = json_encode($data);
     
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $submit_url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, urlencode($payload));
     
    $result = curl_exec($ch);
    curl_close ($ch);
    $data = json_decode($result);
    
    if ( isset( $data->error ) AND $data->error != '' ){
        echo '<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">&times;</button>' . $data->error . '</div>';
    } else {
        echo '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">&times;</button>You have been <strong>successfully</strong> subscribed to our Email List.</div>';
    }

}

?>