<?php
require_once('vendor/facebook/php-sdk/src/facebook.php');

class EventMembers{
	private $facebook;
	private $eid;

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
			$call=$this->facebook->api('/'.$this->eid.'/attending/');
			$members=$call['data'];
			$next=$call['next'];
			while(  $next != null ) {
				$call=$this->facebook->api($next);
				$members=array_merge( $members,$call['next'] );
			}
			return $members;
	}

	public function process_event_members($event_members) {
		foreach ($event_members as $key => $member) {
			//going to be a query
			$call=$this->facebook->api('/'.$member['id']./'mutualfriends')
		}
	}



    /**
     * Gets the value of facebook.
     *
     * @return mixed
     */
    public function getFacebook()
    {
        return $this->facebook;
    }
    
    /**
     * Sets the value of facebook.
     *
     * @param mixed $facebook the facebook
     *
     * @return self
     */
    public function setFacebook($facebook)
    {
        $this->facebook = $facebook;

        return $this;
    }
}