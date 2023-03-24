<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$appName = 'sso';

$clientID = 'Client id here';
$tenantID = 'Tenant id here';
$redirectUrl = 'Redirect url here';

$url = 'https://login.microsoftonline.com/'.$tenantID.'/oauth2/v2.0/authorize?client_id='.$clientID.'&response_type=code&redirect_uri='.$redirectUrl.'&response_mode=form_post&scope=offline_access%20user.read%20mail.read&state=12345';
header('location: '.$url);
?>