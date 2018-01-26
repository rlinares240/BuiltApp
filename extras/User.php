<?php
	declare(strict_types=1);	

	class User {
		private $name;
		private $email;
		private $weight;
		private $feet;
		private $inches;
		private $gender;
		
		// Gender: should we use enum ???
		public function __construct(string $name, string $email, int $weight, int $feet, int $inches, $gender) {
			$this->name = $name;		
			$this->email = $email;
			$this->weight = $weight;
			$this->feet = $feet;
			$this->inches = $inches;
			$this->gender = $gender;
		}

		// Getter and Setters		
		public function getName() : string {
			return $this->name;
		}
		public function setName(string $name){
			$this->name = $name;
		}	
		public function getEmail() : string {
			return $this->email;
		}
		public function setEmail(string $email) {
			$this->email = $email;
		}	
		public function getWeight() : int {
			return $this->weight;
		}
		public function setWeight(int $weight) {
			$this->weight = $weight;
		}
		public function getFeet() : int {
			return $this->feet;
		}
		public function setFeet(int $feet) {
			$this->feet = $feet;
		}
		public function getInches() : int {
			return $this->inches;
		}
		public function setInches(int $inches) {
			Sthis->inches = $inches;
		}
		public function getGender() {
			return $this->gender;
		}
		public function setInches($gender) {
			Sthis->gender = $gender;
		}
		
		public function __toString() {
		}
	
		public function __destruct() {
		}
		
	}
?>