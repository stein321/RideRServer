<?php


//getting list of friends
require_once('vendor/facebook/php-sdk/src/facebook.php');

class Get_Friends{
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


	public function get_a_users_friends($id) {
		$user=$this->facebook->api('/'.$id);
		$ids=get_users_ids_from_user($user);
		return $ids;
	}
	public function get_users_ids_from_user($user) {
		$friends=$this->facebook->api(
		'/'.$user.'/friends'	
			);
		return 0; 
	}

	public function get_user() {
		return $this->facebook->getUser();
	}
	public function get_friends() {
		$eid="1452625398292441";

		$friends=$this->facebook->api( array(
                         'method' => 'fql.query',
                         'query' => "SELECT name,mutual_friend_count,uid FROM user WHERE uid IN(
													SELECT uid FROM event_member WHERE eid = $eid AND rsvp_status = 'attending'
													) AND mutual_friend_count > 0 ORDER BY mutual_friend_count desc",
                     ));

		// $friends=$this->facebook->api(
		// 	'/fql?q='.
		// );	
		var_dump($friends);

		// $this->friend_ids=$this->process_friend_ids($friends['data']);
		return $friends;
	}
	// public function process_friend_ids($friends) {
	// 	$friend_ids=[];

	// 	foreach ($friends as $key => $friend) {

	// 		$friend_ids[]=$friend['id'];
	// 	}
	// 	return $friend_ids;
	// }



}

