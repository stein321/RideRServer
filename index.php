<?php


require_once('vendor/facebook/php-sdk/src/facebook.php');
// include_once('getFriends.php');
include_once('EventMembers.php');
include_once('FindMutualFriends.php');
include_once('EventData.php');


$secret="fe3a9c260de6710b79449236504136ea";
$app_id="1469715466577879";

// var_dump($_GET);
$id=$_GET['id'];
// $facebook=new Get_Friends($id);
// $friends=$facebook->get_friends();
//var_dump($friends);
// $events = new EventData();
// $eventIds=$events->get_event_ids();
$eid = "1459514514266526";
$event=new EventMembers($eid);
$members=$event->get_all_event_members();
$mutual_friend=new FindMutualFriends($members);
$friends_array=$mutual_friend->find_mutual_friends();
usort($friends_array, $mutual_friend->cmp);
// echo $friends_array;
echo json_encode($friends_array);
