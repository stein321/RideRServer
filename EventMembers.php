<?php

require_once('vendor/facebook/php-sdk/src/facebook.php');

class EventMembers{
	// private $facebook;
	// private $eid;
	// private $secret_key;
	// private $app_id;

	public function __construct($eid) {
			$this->secret_key="f57c5b006bae8c63bc170578bd582589";
			$this->app_id="436860186416914";
			$this->eid=$eid;
			$config=array(
				'appId' => $this->app_id,
			     'secret' => $this->secret_key,
			     'file_upload' => false,
			     'allowSignedRequest' => false,
			);
			$this->facebook=new facebook($config);
	}
	public function get_all_event_members() {
			echo "uh oh";
			$call=$this->facebook->api('/'.$this->eid.'/attending/');
			$members=$call['data'];
			$next=$call['paging']['next'];
			// while(  $next != '' ) {
				$call=$this->facebook->api($next);
				$members=array_merge( $members,$call['paging']['next'] );
			// }
			return $members;
	}

	// public function process_event_members($event_members) {
	// 	foreach ($event_members as $key => $member) {
	// 		//going to be a query
	// 		$call=$this->facebook->api('/'.$member['id']./'mutualfriends')
	// 	}
	// }

    
}