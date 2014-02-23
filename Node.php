<?php
namspace stein321;

class Node {
	private $id
	private $name;
	private $number_of_mutual_friends;

	public function __construct($id, $name,$number_of_mutual_friends ) {
		$this->setName($name);
		$this->setNumber_of_mutual_friends($number_of_mutual_friends);
		$this->setName($name);
	}	


    /**
     * Gets the value of name.
     *
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }
    
    /**
     * Sets the value of name.
     *
     * @param mixed $name the name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Gets the value of number_of_mutual_friends.
     *
     * @return mixed
     */
    public function getNumber_of_mutual_friends()
    {
        return $this->number_of_mutual_friends;
    }
    
    /**
     * Sets the value of number_of_mutual_friends.
     *
     * @param mixed $number_of_mutual_friends the number_of_mutual_friends
     *
     * @return self
     */
    public function setNumber_of_mutual_friends($number_of_mutual_friends)
    {
        $this->number_of_mutual_friends = $number_of_mutual_friends;

        return $this;
    }
}