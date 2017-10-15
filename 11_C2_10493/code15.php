<?php
// buat abstract class
abstract class komputer{
 public static function hidupkan_komputer(){
 echo "Hidupkan Komputer";
 }
 // buat abstract method
 abstract public function lihat_spec();
 abstract public function lihat_processor();
 abstract public function lihat_harddisk();
 abstract public function lihat_pemilik();
}
class tablet extends komputer{
public function lihat_spec(){
		return "Lihat Spec Tablet...";
 }
public function lihat_processor(){
	 return "Lihat processor tablet..";
}
public function lihat_harddisk(){
	return "Lihat harddisk tablet..";
}
public function lihat_pemilik(){
	return "Pemilik tablet adalah ..";
}
}
$tablet_obj = new tablet();
echo $tablet_obj->hidupkan_komputer();
echo "<br />";
echo $tablet_obj->lihat_spec();
echo "<br />";
echo $tablet_obj->lihat_processor();
echo "<br />";
echo $tablet_obj->lihat_harddisk();
echo "<br />";
echo $tablet_obj->lihat_pemilik();
echo "<br />";
?>