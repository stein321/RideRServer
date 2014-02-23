<?php


//getting list of friends
require_once('vendor/facebook/php-sdk/src/facebook.php');

class Get_Friends{
	private $secret_key;
	private $app_id;
	private $facebook;
	private $id;
	public function __construct($id){
			$this->secret_key="f57c5b006bae8c63bc170578bd582589";
			$this->app_id="436860186416914";
			$this->$id=$id;
			
			$config=array(
				'appId' => $this->app_id,
			     'secret' => $this->secret_key,
			     'file_upload' => false,
			     'allowSignedRequest' => false,
			);
			$this->facebook=new facebook($config);
	}



	public function get_user() {
		return $this->facebook->getUser();
	}
	public function get_friends() {
		$friends=$this->facebook->api(
		'/'.$this->get_user().'/friends'
		);
		
		return $friends;
	}


// echo "hello";
// echo var_dump($uid);

// echo var_dump($facebook);
}

