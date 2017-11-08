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
 // .. isi class tablet
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
$tablet_br=new tablet();
echo $tablet_br->hidupkan_komputer()."</br>";
echo $tablet_br->lihat_spec()."</br>";
echo $tablet_br->lihat_processor()."</br>";
echo $tablet_br->lihat_harddisk()."</br>";
echo $tablet_br->lihat_pemilik()."</br>";
?>