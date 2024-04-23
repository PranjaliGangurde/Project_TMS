<?php
//post
$url="http://www.way2sms.com/api/v1/sendCampaign";
$message = urlencode("Thanks for Sai Sanstan Registration");// urlencode your message
$curl = curl_init();
curl_setopt($curl, CURLOPT_POST, 1);// set post data to true
curl_setopt($curl, CURLOPT_POSTFIELDS, "apikey=NQABMP59LYBR69937SH2E2L9GCK12IDY&secret=ZOQISOWHSSELVXVZ&usetype=stage &phone=8657805682&senderid=[active-sender-id]&message=[$message]");// post data
// query parameter values must be given without squarebrackets.
 // Optional Authentication:
curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($curl);
curl_close($curl);
//echo $result;
?>
