<?php
// buat abstract class
abstract class smartphone{
	public static function hidupkan_komputer(){
		echo "Hidupkan Komputer";
	}
// buat abstract method
abstract public function lihat_spec();
abstract public function lihat_processor();
abstract public function lihat_harddisk();
abstract public function lihat_pemilik();
}
class tablet extends smartphone{
	//return parent::hidupkan_komputer();
	
	public function lihat_spec(){
		return "Lihat spec tablet...";
	}
	public function lihat_processor(){
		return "Lihat processor tablet...";
	}
	public function lihat_harddisk(){
		return "Lihat harddisk tablet...";
	}
	public function lihat_pemilik(){
		return "Pemilik tablet adalah...";
	}
// .. isi class tablet
}
echo smartphone::hidupkan_komputer()."<br/>";
echo tablet::lihat_spec()."<br/>";
echo tablet::lihat_processor()."<br/>";
echo tablet::lihat_harddisk()."<br/>";
echo tablet::lihat_pemilik();
?>