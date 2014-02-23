<?php



require_once('vendor/facebook/php-sdk/src/facebook.php');
include_once('getFriends.php');
$secret="f57c5b006bae8c63bc170578bd582589";
$app_id="436860186416914";

$id=$_GET['id'];
$facebook=new Get_Friends($id);
$friends=$facebook->get_friends();
var_dump($friends);
