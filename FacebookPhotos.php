<?php
require_once('vendor/facebook/php-sdk/src/facebook.php');

class FacebookPhotos {
	private $secret_key;
	private $app_id;
	private $facebook;
	private $id;
	private $friend_ids;



	public function __construct($id){
			$this->secret_key="fe3a9c260de6710b79449236504136ea";
			$this->app_id="1469715466577879";
			$this->$id=$id;
			echo $id;
			$config=array(
				'appId' => $this->app_id,
			     'secret' => $this->secret_key,
			     'file_upload' => false,
			     'allowSignedRequest' => false,
			);
			$this->facebook=new facebook($config);
	}	

	public function get_urL_from_id () {
		$call=$this->facebook->api('/'.$this->id."/picture");

		return $call;
		die();
		$url=$call['data']['url'];

		return $url;
	}
}