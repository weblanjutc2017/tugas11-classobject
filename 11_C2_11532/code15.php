<?php
// buat abstract class
abstract class smartphone{
 public static function hidupkan_komputer(){
 echo "Hidupkan Komputer";
 }
 // buat abstract method
 abstract public function lihat_spec();
 abstract public function lihat_processor();
 abstract public function lihat_hardisk();
 abstract public function lihat_pemilik();
}
class tablet extends smartphone{
 // .. isi class tablet
 public function lihat_spec(){
     return "Lihat Spec tablet...";
   }
 public function lihat_processor(){
     return "Lihat processor tablet...";
   }
 public function lihat_hardisk(){
     return "Lihat hardisk tablet...";
   }
 public function lihat_pemilik(){
     return "Pemilik tablet adalah...";
   }
}

$tablet_baru = new tablet();
echo $tablet_baru->lihat_spec(); 
echo "<br />";
echo $tablet_baru->lihat_processor(); 
echo "<br />";
echo $tablet_baru->lihat_hardisk(); 
echo "<br />";
echo $tablet_baru->lihat_pemilik(); 
echo "<br />";
?>