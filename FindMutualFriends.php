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
		$this->secret_key="f57c5b006bae8c63bc170578bd582589";
		$this->app_id="436860186416914";
			$config=array(
				'appId' => $this->app_id,
			     'secret' => $this->secret_key,
			     'file_upload' => false,
			     'allowSignedRequest' => true,
			);
			$this->facebook=new facebook($config);
			// $this->friend_array=[];
	}
	// public function find_mutual_friends() {

	// }


}