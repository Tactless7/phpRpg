<?php

	require_once 'User.php';

	class Client extends Utilisateur{
		private $_billAmount;
		private $_cart = [];


		public function getBillAmount(){
			return $this->_billAmount;
		}

		public function setBillAmount($amount){
			$this->_billAmount = $amount;
		}

		public function getCart(){
			return $this->_cart;
		}
		public function displayCart(){
			foreach ($this->_cart as $key => $value) {
				echo '<li>'. $value->getName() .'</li>';
			}
		}

		public function addProductToCart($product){
			array_push($this->_cart, $product);
		}

		public function buy($product){
			$this->_billAmount += $product->getPrice();
		}

		public function deleteProductFromCart($productIndex){
			unset($this->_cart[$productIndex]);
		}

	}
