<?php


require_once('vendor/facebook/php-sdk/src/facebook.php');
include_once('getFriends.php');
include_once('EventMembers.php');
//include_once('FindMutualFriends.php');

$secret="f57c5b006bae8c63bc170578bd582589";
$app_id="436860186416914";

// var_dump($_GET);
$id=$_GET['id'];
//$facebook=new Get_Friends($id);
// $friends=$facebook->get_friends();
//var_dump($friends);
echo("here");
$event=new EventMembers("1459514514266526");

die();
$members=$event->get_all_event_members();
//$mutual_friend=new FindMutualFriends($members);
//$mutual_friend->find_mutual_friends();
var_dump($members);
