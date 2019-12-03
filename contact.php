<?php
/**
 * `Contact` class containing 2 fields: `name` and `email`
 *
 */
//namespace Test;

class Contact {
	
	private $name;
	private $email;
	function __construct() {
        $this->name = '';
		$this->email ='';
    }
	public function getName()   
    {
        return $this->name;
    }
	public function getEmail()   
    {
        return $this->email;
    }
	public function setName($name)   
    {
        $this->name = $name;
		return $this;
    }
	public function setEmail($email)   
    {
        $this->email = $email;
    }
	public function render()
	{
		return '&lt;'. $this->getEmail() . '&gt; ' . $this->getName();
	}
}