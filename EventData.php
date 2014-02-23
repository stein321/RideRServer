<?php
require_once('vendor/facebook/php-sdk/src/facebook.php');

//returning event ids
class EventData {
	private $facebook;
	private $secret_key;
	private $app_id;


	public function __construct() {
			$this->secret_key="fe3a9c260de6710b79449236504136ea";
			$this->app_id="1469715466577879";
			$config=array(
				'appId' => $this->app_id,
			     'secret' => $this->secret_key,
			     'file_upload' => false,
			     'allowSignedRequest' => false,
			);
			$this->facebook=new facebook($config);
	}

	public function get_event_ids() {
		$call=$this->facebook->api('/me/events/attending/');
		$events=$call['data'];
		return $events;
	}
	

}