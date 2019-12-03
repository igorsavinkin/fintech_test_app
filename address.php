<?php
/**
 * Class Address having fields: 
 *
 * Long description
 * Broken down into several lines
 *
 * License notice...
 */
class Address {

	private $houseNumber;
	private $street;
	protected $city;
	protected $county;
	public $postcode;
	public $country;
	private $contacts;
	
	public function __construct()
    {
		$this->houseNumber = ''; 
		$this->street = ''; 
		$this->city = ''; 
		$this->county = ''; 
		$this->postcode = ''; 
		$this->country = ''; 
		$this->contacts = []; 		
    }
	// getters
	public function getHouseNumber()   
    {
        return $this->houseNumber;
    } 
	public function getStreet()   
    {
        return $this->street;
    } 
	public function getCity()   
    {
        return $this->city;
    } 
	public function getCounty()   
    {
        return $this->county;
    } 
    public function getContacts()   
    {
        return $this->contacts;
    } 	
	public function getPostCode()
	{
        return $this->postcode;
    }
	public function getCountry()   
    {
        return $this->country; 
    }  
	// setters
	public function setHouseNumber($houseNumber)   
    {
        $this->houseNumber = $houseNumber;
    }  
	public function setStreet($street)   
    {
        $this->street = $street; 
		return $this;
    } 
	public function setCity($city)
	{
		$this->city = $city;
	}
	public function setCounty($county)   
    {
        $this->county = $county; 
    }
	public function setPostCode($postcode)   
    {
        $this->postcode = $postcode; 
    }
	public function setCountry($country)   
    {
        $this->country = $country; 
    }  	
	// end of setters
	
	public function addContact($contact)
	{
		$this->contacts[] = $contact;
	}
}