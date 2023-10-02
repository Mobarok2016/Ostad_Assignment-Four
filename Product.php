<?php 

class Product {
    
    public $id , $name, $price;
    
    public function __construct($id, $name, $price) {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }


    public function getFormattedPrice(){
        $price= number_format($this->price,2);
        return "$".$price;
    }

    public function showDetails(){
       
        echo "Product Details : \nID: $this->id \nName: $this->name \nPrice: ".$this-> getFormattedPrice();
    }


    
}

$procuct = new Product(1,"sunglass",23.259999);
echo $procuct->showDetails();