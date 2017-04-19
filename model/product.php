<?php
abstract class Product{
	private $name;
	private $ingredients = array();
	private $price;
	private $weight;
	private $image;//the path of the picture
	
	public function __construct($pName,$pIngredients,$pPrice,$pWeight,$pImage){
		$this->name = $pName;
		$this->ingredients = $pIngredients;
		$this->price = $pPrice;
		$this->weight = $pWeight;
		$this->image = $pImage;
	}
	
	public function get_name(){
		return $this->name;
	}
	
	public function set_name($new_name){
		$this->name = $new_name;
	}
	
	public function get_ingredients(){
		return $this->ingredients;
	}
	
	public function set_ingredients($new_ingredients){
		$this->ingredients = $new_ingredients;
	}
	
	public function get_price(){
		return $this->price;
	}
	
	public function set_price($new_price){
		$this->price = $new_price;
	}
	
	public function get_weigth(){
		return $this->weight;
	}
	
	public function set_weight($new_weight){
		$this->weight = $new_weight;
	}
	
	public function get_picture(){
		return $this->picture;
	}
	
	public function set_picture($new_picture_path){
		$this->picture = $new_picture_path;
	}
}

?>