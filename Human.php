<?php
//описывается общий класс Человек, с присущими любому человеку свойствами и функциями
class Human
{
	private $name;
	private $age;
	private $pets = array('puppy', 'kitty');

	public function __construct($name, $age)
	{
		$this->name = $name;
		$this->age = $age;
	}

	public function getName()
	{
		return $this->name;
	}
	
	public function getAge()
	{
		return $this->age;
	}
	
	public function getDress()
	{
		return dress['tshort', 'shirt', 'pants'];
	}
	
	public function __toString()
	{
		return $this->name;
	}
}
?>
