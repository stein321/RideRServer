<?php



class Friend {
	public $name;
	public $id;
	public $mutual_friend_count;
	public $phto_url;
	public function __construct($name,$id,$count,$url) {
		$this->name=$name;
		$this->id=$id;
		$this->mutual_friend_count=$count;
		$this->photo_url=$url;
	}
}