<?php
class Car
{
	public $price, $speed, $fuel, $mileage, $tax;

	function __construct($price, $speed, $fuel, $mileage)
	{
		$this->price = $price;
		$this->speed = $speed;
		$this->fuel = $fuel;
		$this->mileage = $mileage;
		$this->tax = 0.12;
	}

	public function Display_all()
	{
		if($this->price > 10000)
		{
			$this->tax = 0.15;
		}
		
		return 
		"<div class='box'><p>".
		"Price: ".$this->price."</p><p>".
		"Speed: ".$this->speed."</p><p>".
		"Fuel: ".$this->fuel."</p><p>".
		"Mileage: ".$this->mileage."</p><p>".
		"Tax: ".$this->tax."</p></div>";
		
	}
}

$car1 = new Car(200, "35mph", "Full", "15mph");
echo $car1->Display_all();

$car2 = new Car(200, "25mph", "Not Full", "105mph");
echo $car2->Display_all();

$car3 = new Car(200, "35mph", "King of Full", "95mph");
echo $car3->Display_all();

$car4 = new Car(200, "35mph", "Empty", "25mph");
echo $car4->Display_all();

$car5 = new Car(20000000, "35mph", "Empty", "15mph");
echo $car5->Display_all();

?>
<style>
.box{
	font: normal 14px arial;
	border: 1px dotted #ccc;
	background: #efefef;
	padding: 10px;
	margin: 10px;
}
p{
	margin: 0;
}
</style>