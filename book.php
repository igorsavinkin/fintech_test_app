<?php
/**
 * The `Book` class containing a composed field `records`.  
 * Field `records`' stores one address (class Address) and multiple associated contacts (class Contact)
 */
class Book {

	private $records = [];
	
	public function getRecords()   
    {
        return $this->records;
    }
	
	public function createAddress($address) {
		$addr = new Address;
		$address($addr); 
		$this->records[]['address']= $addr;
    }

	public function render(){ 
		$output = []; 
		foreach($this->getRecords() as $index => $record){

			$output[]= 'Book record #'.($index+1) . PHP_EOL;
			$output[]= 'Address: ' . $record['address']->getHouseNumber();
			if ($record['address']->getStreet())
			{
				$output[]= ' ' . $record['address']->getStreet();
			}
			if ($record['address']->getCity())
			{
				$output[]= ', ' . $record['address']->getCity();
			}
			if ($record['address']->getCounty())
			{
				$output[]= ', ' . $record['address']->getCounty();
			}
			if ($record['address']->getPostCode())
			{
				$output[]= ', ' . $record['address']->getPostCode();
			}
			if ($record['address']->getCountry())
			{
				$output[]= ', ' . $record['address']->getCountry();
			}
			$output[]=PHP_EOL;
			foreach($record['address']->getContacts() as $index => $contact){
				$output[]= 'Contact #'.($index+1).': '.  $contact->render() . PHP_EOL;
			}

		}
		foreach($output as $str)
		{
			echo nl2br($str);
		} 

	}

}