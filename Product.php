<?php

class Product {
    public $id;
    public $name;
    public $price;

    
    public function __construct($id, $name, $price) {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;

    }
     
    public function getFormattedPrice(){
           echo $this->price;
    } 

    public function showDetails(){
        echo 'ID:'. $this->id ."\nName: ". $this->name ."\nPrice : " .$this->price;

    }

}


$product = new Product(1, 'T-shirt', 19.99);
$product->showDetails();