<?php 
	
	require_once 'User.php';
	
	class Client extends Utilisateur{
		private $_billAmount;
		private $_cart [];


		public function getBillAmount(){
			return $this->_billAmount;
		}

		public function setBillAmount($amount){
			$this->_billAmount += $amount;
		}

		public function getCart(){
			return $this->_cart;
		}

		public function addProductToCart($product){
			array_push($this->-cart, $item);
		}

		public function buy(){

		}

	}