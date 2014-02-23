<?php

require_once('vendor/facebook/php-sdk/src/facebook.php');
require_once('Friend.php');

class FindMutualFriends {
	private $members;
	private $facebook;
	private $secret_key;
	private $app_id;
	public 	$friend_array;
	public 	$sorted_friend_array;

	public function __construct($members) {
		$this->members=$members;
		$this->secret_key="fe3a9c260de6710b79449236504136ea";
		$this->app_id="1469715466577879";
			$config=array(
				'appId' => $this->app_id,
			     'secret' => $this->secret_key,
			     'file_upload' => false,
			     'allowSignedRequest' => true,
			);
			$this->facebook=new facebook($config);
			$this->friend_array=array();
	}
	public function find_mutual_friends() {

		foreach ($this->members as $key => $member) {
				$call=$this->facebook->api('/me/mutualfriends/'.$member['id']);
			if($call) {
				$count=count($call['data']);
				if($count>0) {
					$photo_call=new FacebookPhotos($member['id']);
					$url=$photo_call->get_urL_from_id();
					$this->friend_array[]=new Friend($member['name'],$member['id'],$count,$url['call']['url']);
				}
				// var_dump($call);
			}
		}
		return $this->friend_array;

	}
	public function cmp($a,$b)
	{
		return ($a->mutual_friend_count > $b->mutual_friend_count);
	}

}