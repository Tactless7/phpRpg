<?php 
	
	class Utilisateur{
		private $_email;
		private $_id;
		private $_createdAt;
		
		public function __construct($email, $id){
			$this->_email = $email;
			$this->_id = $id;
			$this->_createdAt = Date("d-m-Y H:i:s");
		}

		
		
	}