<?php
// method_exists(object, method_name);

// return method_exists("Product", "getPrice");

// $p = new Product("Name", 20, "Description");
// return method_exist($p, "getPrice");

// is_subclass_of(object, class_name);
// class Product
// {
// 	//our parent class
// }

// class Soda extends Product
// {
// 	//child of product
// }

// $s = new Soda();

// is_subclass_of($s, "Product")


//user variable to pass thru class name
$class = "Product";
$p = new $class;


$m = "getName";
$name = $p->m();
?>
