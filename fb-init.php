<?php
session_start();
require './vendor/autoload.php';
$fb = new Facebook\Facebook([
'app_id' => '668406270347920',
'app_secret' => '2edab78866452d3d75a0145251187c24',
'default_graph_version'=> 'v2.10'
]);

$helper = $fb->getRedirectLoginHelper();
$login_url = $helper->getLoginUrl("http://localhost/fb-login/");

try{
$accessToken = $helper->getAccessToken();
if(isset($accessToken)){
$_SESSION['access_token'] = (string)$accessToken;
header("Location:supporter.php");
}}
catch(Exception $exc){
echo $exc->getTraceAsString ();}
?>