<?php 
//using api
$pass = 'SG.************.**********************'; // not the key, but the token
$url = 'https://api.sendgrid.com/';
//remove the user and password params - no longer needed
$params = array(
    'to'        => 'prakashtank106@gmail.com',     
    'subject'   => 'sub',
    'html'      => 'message',
    'from'      => 'jobseen.in',
);
$request =  $url.'api/mail.send.json';
$headr = array();
// set authorization header
$headr[] = 'Authorization: Bearer '.$pass;
$session = curl_init($request);
curl_setopt ($session, CURLOPT_POST, true);
curl_setopt ($session, CURLOPT_POSTFIELDS, $params);
curl_setopt($session, CURLOPT_HEADER, false);
curl_setopt($session, CURLOPT_RETURNTRANSFER, true);
// add authorization header
curl_setopt($session, CURLOPT_HTTPHEADER,$headr);
$response = curl_exec($session);
curl_close($session);
print_r($response);

?>