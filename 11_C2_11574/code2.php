<?php
	//parent
	class smartphone {
		private $merk = "Samsung";
		//untuk enkapsulasi agar variabel merk tidak bisa diakses dari luar class
		public function lihat_spec() {
			return "Spec smartphone: Samsung,
					Processor Snapdragon, Ram 1GB";
		}
		
		// akses variabel merk yang diprivate
		public function lihat_merk_smartphone() {
			return $this->merk;
		}
		
	}
	
	//child
	class smartphone_dualsim extends smartphone {
		
		public function lihat_spec() {
			return "Spec smartphone dual sim: Asus,
					Processor Snapdragon, Ram 2GB";
		}	
		public function lihat_spec_smartphone() {
			return parent::lihat_spec();
		}
		
	}
	
	$gadget_baru = new smartphone_dualsim();
	echo $gadget_baru->lihat_spec();
	echo "<br />";
	echo $gadget_baru->lihat_spec_smartphone();
	echo "<br />";
	echo $gadget_baru->lihat_merk_smartphone();
?>