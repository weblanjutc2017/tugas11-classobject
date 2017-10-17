<?php
abstract class smartphone{
	public static function hidupkan_komputer(){
		echo "Hidupkan Komputer";
	}

	abstract public function lihat_spec();
	abstract public function lihat_processor();
	abstract public function lihat_harddisk();
	abstract public function lihat_pemilik();
}

class tablet extends smartphone{
	public static function hidupkan_komputer(){
		return parent::hidupkan_komputer();
	}
	
	public function lihat_spec(){
		return "Lihat spec tablet...";
	}
	
	public function lihat_processor(){
		return "Lihat processor tablet...";
	}
	
	public function lihat_harddisk(){
		return "Lihat hardisk tablet...";
	}
	
	public function lihat_pemilik(){
		return "Pemilik tablet adalah...";
	}
}

$tablet_new = new tablet();
echo $tablet_new ->hidupkan_komputer(); echo "</br>";
echo $tablet_new ->lihat_spec();		echo "</br>";
echo $tablet_new ->lihat_processor();	echo "</br>";
echo $tablet_new ->lihat_harddisk();	echo "</br>";
echo $tablet_new ->lihat_pemilik();
?>