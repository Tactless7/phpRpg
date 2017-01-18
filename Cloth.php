<?php 

	require 'Product.php';

	class Cloth extends Product{
		private $_brand;

		public function __construct($id, $name, $price, $brand){
			parent::__construct($id, $name, $price);
			$this->_brand = $brand;
		}

		public function getBrand(){
			return $this->_brand;
		}

		public function setBrand($brand){
			$this->_brand = $brand;
		}

		public function try(){
			
		}
	}