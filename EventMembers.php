<?php
require_once('vendor/facebook/php-sdk/src/facebook.php');

class EventMembers{
	private $facebook;
	private $eid;
	private $secret_key;
	private $app_id;

	public function __construct($eid) {
		$this->setSecret_key("f57c5b006bae8c63bc170578bd582589");
			$this->app_id="436860186416914";
			$this->eid=$eid;
			// $config=array(
			// 	'appId' => $this->app_id,
			//      'secret' => $this->secret_key,
			//      'file_upload' => false,
			//      'allowSignedRequest' => false,
			// );
			// $this->facebook=new facebook($config);
	}
	// public function get_all_event_members() {
		
	// 		$call=$this->facebook->api('/'.$this->eid.'/attending/');
	// 		$members=$call['data'];
	// 		$next=$call['data']['next'];
	// 		while(  $next != null ) {
	// 			$call=$this->facebook->api($next);
	// 			$members=array_merge( $members,$call['data']['next'] );
	// 		}
	// 		return $members;
	// }

	// public function process_event_members($event_members) {
	// 	foreach ($event_members as $key => $member) {
	// 		//going to be a query
	// 		$call=$this->facebook->api('/'.$member['id']./'mutualfriends')
	// 	}
	// }

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

    /**
     * Gets the value of eid.
     *
     * @return mixed
     */
    public function getEid()
    {
        return $this->eid;
    }
    
    /**
     * Sets the value of eid.
     *
     * @param mixed $eid the eid
     *
     * @return self
     */
    public function setEid($eid)
    {
        $this->eid = $eid;

        return $this;
    }

    /**
     * Gets the value of secret_key.
     *
     * @return mixed
     */
    public function getSecret_key()
    {
        return $this->secret_key;
    }
    
    /**
     * Sets the value of secret_key.
     *
     * @param mixed $secret_key the secret_key
     *
     * @return self
     */
    public function setSecret_key($secret_key)
    {
        $this->secret_key = $secret_key;

        return $this;
    }

    /**
     * Gets the value of app_id.
     *
     * @return mixed
     */
    public function getApp_id()
    {
        return $this->app_id;
    }
    
    /**
     * Sets the value of app_id.
     *
     * @param mixed $app_id the app_id
     *
     * @return self
     */
    public function setApp_id($app_id)
    {
        $this->app_id = $app_id;

        return $this;
    }
}