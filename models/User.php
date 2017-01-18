<?php 
	
	class Utilisateur{
		private $_email;
		private $_id;
		private $_createdAt;
		
		public function __construct($email, $id){
			$this->_email = $email;
			$this->_id = $id;
			$this->_createdAt = Date("Y-m-d H:i:s");
		}

		public function getEmail(){
			return $this->_email;
		}

		public function setEmail($newEmail){
			$this->_email = $newEmail;
		}

		public function getId(){
			return $this->_id;
		}

		public function setId($newId){
			$this->_id = $newId;
		}

		public function getCreatedAt(){
			return $this->_createdAt;
		}

		public function setCreatedAt($newDate){
			$this->_createdAt = $newDate;
		}
		
	}