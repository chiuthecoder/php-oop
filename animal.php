<?php
class Animal
{
	public $name, $health;

	function __construct($name)
	{
		$this->name = $name;
		$this->health = 100;

	}

	public function walk()
	{
		$this->health -=1;
		return $this->health;
	}

	public function run()
	{
		$this->health -=5;
		$this->health;
	}

	public function displayHealth()
	{
		return "Name: ".$this->name."<br> Health: ". $this->health;  
	}

}

class Dog extends Animal
{
	function __construct($name)
	{
		parent::__construct($name);
		$this->health = 150;
	}

	public function pet()
	{
		$this->health -=5;
		return $this->health;
	}

}

class Dragon extends Animal
{
	function __construct($name)
	{
		parent::__construct($name);
		$this->health = 170;
	}

	public function fly()
	{
		$this->health -=5;
		return $this->health;
	}

}

$animal1 = new Animal("Cat");
$animal1->walk();
$animal1->walk();
$animal1->walk();
$animal1->run();
$animal1->run();
echo $animal1->displayHealth();
echo "<br><br>";

$dog1 = new Dog("Dog");
$dog1->walk();
$dog1->walk();
$dog1->walk();
$dog1->run();
$dog1->run();
$dog1->pet();
echo $dog1->displayHealth();
echo "<br><br>";

$dragon1 = new Dragon("Dragon");
$dragon1->walk();
$dragon1->walk();
$dragon1->walk();
$dragon1->run();
$dragon1->run();
$dragon1->fly();
$dragon1->fly();
echo $dragon1->displayHealth();
?>
