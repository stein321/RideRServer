<?php

require_once('vendor/facebook/php-sdk/src/facebook.php');
require_once('Friend.php');

class FindMutualFriends {
	private $members;
	private $facebook;
	private $secret_key;
	private $app_id;
	public 	$friend_array;

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
				//var_dump($call);
			if($call) {
				$count=count($call);
				if($count>0) {
					echo $count;
				}
				// var_dump($call);
			}
		}

	}


}