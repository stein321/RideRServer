<?php

require_once('vendor/facebook/php-sdk/src/facebook.php');

class EventMembers{
	private $facebook;
	private $eid;
	private $secret_key;
	private $app_id;

	public function __construct($event_id) {
			$this->secret_key="fe3a9c260de6710b79449236504136ea";
			$this->app_id="1469715466577879";
			$this->eid=$event_id;
			$config=array(
				'appId' => $this->app_id,
			     'secret' => $this->secret_key,
			     'file_upload' => false,
			     'allowSignedRequest' => false,
			);
			$this->facebook=new facebook($config);
	}
	public function get_all_event_members() {
			$call=$this->facebook->api('/'.$this->eid.'/attending/');
			$members=$call['data'];
			$next=$call['paging']['next'];
			if (next != null)
				$next_call=$this->parse_next_string($next);
			// echo $next_call;
			while(  $next_call != null ) {
				$call=$this->facebook->api($next_call);
				$members=array_merge($members,$call['data'] );
				$next_call=$this->parse_next_string($call['paging']['next']);
			}
			return $members;
	}

	// public function parse_next_string($next) {
	// 	$next_call=substr($next,26);
	// 	return $next_call;

	// }

    
}