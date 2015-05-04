<?php
class Product
{
	public static $manufature = "Toyota";
	public $name = 'default_name';
	public $price;
	public $desc;

	function __construct($name, $price, $desc)
	{
		$this->name = $name;
		$this->price = $price;
		$this->desc = $desc;
	}

	public function getInfo()
	{
		//return some info about our product.
		return "Product Name: ".$this->name;
	}

	public function getMaker(){
		return self::$manufature;
	}

}

Class Soda extends Product
{
	public $flavor;

	function __construct($name, $price, $desc, $flavor)
	{
		parent::__construct($name, $price, $desc);
		$this->flavor = $flavor;
	}

	public function getInfo(){
		echo "Product Name: ". $this->name.", Flavor: ".$this->flavor;
	}
}

$shirt = new Product("Space Juice T-Shirt", 20, "Awesome Grey T-Shirt");
$soda = new Soda("Space Juice Soda", 2, "Grape Flavored Thirst Mutilator", "Grape");

echo $shirt->getInfo();
echo $shirt->getMaker();
echo $shirt::$manufature;
echo "<br>";
echo $soda->getInfo();
echo $soda->getMaker();
?>