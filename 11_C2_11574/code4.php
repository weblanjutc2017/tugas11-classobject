<?php
	class smartphone {
		public function __construct() {
			echo "Constructor dari class smartphone <br />";
		}
		
		public function __destruct() {
			echo "Destructor dari class smartphone <br />";
		}
	}
	
	class smartphone_dualsim extends smartphone {
		public function __construct() {
			echo "Constructor dari class smartphone_dualsim <br />";
		}
		
		public function __destruct() {
			echo "Destructor dari class smartphone_dualsim <br />";
		}
	}
	class smartphone_singlesim extends smartphone {
		public function __construct() {
			echo "Constructor dari class smartphone_singlesim <br />";
		}
		
		public function __destruct() {
			echo "Destructor dari class smartphone_singlesim <br />";
		}
	}
	
	$gadget_a = new smartphone();
	$gadget_b = new smartphone_dualsim();
	$gadget_baru = new smartphone_singlesim();

	echo "Belajar OOP PHP <br />";
?>