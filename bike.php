<?php
class Bike
{
	public $price;
	public $max_speed;
	public $miles;


	function __construct($price, $max_speed)
	{
		$this->price = $price;
		$this->max_speed = $max_speed;
		$this->miles = 0;
	}

	public function displayInfo()
	{
		echo "<br>";
		return "Price: ".$this->price.", Maximum Speed: ".$this->max_speed.", Total Miles: ".$this->miles;
	}

	//adds the miles by 10
	public function drive()
	{
		$this->miles += 10;
		echo "<br> Driving! ". $this->miles;
	}

	//subtracts the miles by 5
	public function reverse()
	{
		$this->miles -= 5;
		echo "<br> Reversing! ". $this->miles;
		if($this->miles < 0)
		{
			$this->miles = 0;
		}
	}
}


$bike1 = new Bike(200, "25mph");
echo $bike1->drive();
echo $bike1->drive();
echo $bike1->drive();
echo $bike1->reverse();
echo $bike1->displayInfo();

$bike2 = new Bike(100, "15mph");
echo $bike2->drive();
echo $bike2->drive();
echo $bike2->reverse();
echo $bike2->reverse();
echo $bike2->displayInfo();

$bike3 = new Bike(50, "5mph");
echo $bike3->reverse();
echo $bike3->reverse();
echo $bike3->reverse();
echo $bike3->displayInfo();


?>