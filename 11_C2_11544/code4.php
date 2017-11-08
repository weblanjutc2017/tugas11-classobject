<?php
class smartphone {
public function __construct() {
	echo "Constructor dari class smartphone <br />";
	echo "Constructor dari class smartphone_dualsim <br />";
	echo "Constructor dari class smartphone_singlesim <br />";
	}
public function __destruct() {
	echo "Destructor dari class smartphone_singlesim <br />";
	echo "Destructor dari class smartphone_dualsim <br />";
	echo "Destructor dari class smartphone <br />";
	}
}
class smartphone_dualsim extends smartphone {
public function __construct() {
	return parent::__construct();
	//echo "Constructor dari class smartphone_dualsim <br />";
}
public function __destruct() {
	return parent::__destruct();
//echo "Destructor dari class smartphone_dualsim <br />";
}
}
class smartphone_singlesim extends smartphone_dualsim {
public function __construct() {
	return parent::__construct();
	//echo "Constructor dari class smartphone_singlesim <br />";
	}
public function __destruct() {
	return parent::__destruct();
	//echo "Destructor dari class smartphone_singlesim <br />";
	}
}

$gadget_baru = new smartphone_singlesim();
echo "Belajar OOP PHP <br />";
?>