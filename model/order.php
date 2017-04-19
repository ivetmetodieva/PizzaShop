<?php

class Order{
	private $id;
	private $beveragesList = array();
	private $additionsList = array();
	private $productsList = array();
	private $isReady;
	private $price;
	
	public function __construct($newId,$newBeveragesList,$newAdditionsList,$newProductsList,$ready,$newPrice){
		$this->id = newId;
		$this->beveragesList = $newBeveragesList;
		$this->additionsList = $newAdditionsList;
		$this->productsList = $newProductsList;
		$this->isReady = $ready;
		$this->price = $newPrice;
	}
	
	//TODO getters $ setters $ logic for adding ,removing from lists calculating price 

}
?>