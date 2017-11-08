<?php
	// buat abstract class
	abstract class smartphone{
		public static function hidupkan_komputer(){
		echo "Hidupkan Komputer <br>";
		}
	
		// buat abstract method
		abstract public function lihat_spec();
		abstract public function lihat_processor();
		abstract public function lihat_harddisk();
		abstract public function lihat_pemilik();
	}
	class tablet extends smartphone{
		public function lihat_spec(){
			return "Lihat spec tablet... <br>";
		}
		public function lihat_processor(){
			return "Lihat processor tablet...<br>";
		}
		public function lihat_harddisk(){
			return "Lihat harddisk tablet...<br>";
		}
		public function lihat_pemilik(){
			return "Pemilik tablet adalah...<br>";
		}
	}
	
	$tablet_epic = new tablet();
	echo $tablet_epic->hidupkan_komputer();
	echo $tablet_epic->lihat_spec();
	echo $tablet_epic->lihat_processor();
	echo $tablet_epic->lihat_harddisk();
	echo $tablet_epic->lihat_pemilik();
		
	
?>