<?php



class Friend {
	public $name;
	public $id;
	public $mutual_friend_count;
	public function __construct($name,$id,$count) {
		$this->name=$name;
		$this->id=$id;
		$this->mutual_friend_count=$count;
	}
}