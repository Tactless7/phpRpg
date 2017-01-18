<?php 
	
	require 'Product.php';
	
	class Vegetable extends Product {
		private $_productorName;
		private $_harvestedAt;
		private $_isFresh;

		public function __construct($id, $name, $price, $productor, $harvested){ // mktime(h, min, s, month, day, year)
			parent::__construct($id, $name, $price);
			$this->_productorName = $productor;
			$this->_harvestedAt = $harvested;
			$this->_isFresh = $this->_isFresh();
		}

		public function _isFresh(){
			$diff = (time() - $this->_harvestedAt) / (60 * 60);
			return ($diff < 24) ? true : false;
		}
	}