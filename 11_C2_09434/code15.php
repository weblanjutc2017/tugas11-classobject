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
	public static function hidupkan_komputer() {
		return parent::hidupkan_komputer();
	}
	public function lihat_spec(){
		echo "Lihat spec tablet...";
	}
	public function lihat_processor(){
		echo "Lihat processor tablet...";
	}
	public function lihat_harddisk(){
		echo  "Lihat hardisk tablet...";
	}
	public function lihat_pemilik(){
		echo "Pemilik tablet adalah...";
	}
} 

$tablet_baru = new tablet();
$tablet_baru->hidupkan_komputer();
echo "<br>";
$tablet_baru->lihat_spec();
echo "<br>";
$tablet_baru->lihat_processor();
echo "<br>";
$tablet_baru->lihat_harddisk();
echo "<br>";
$tablet_baru->lihat_pemilik();
?>