<?php
// buat class 
class smartphone { 
   // buat property 
   public $pemilik="Ana";  
   // buat method 
   public function hidupkan_smartphone() {
     return "Hidupkan smartphone $this->pemilik";
   }
}
  
// buat objek (instansiasi)
$smartphone_baru = new smartphone();
echo $smartphone_baru->hidupkan_smartphone(); 
echo "<br>";
// ubah isi property $pemilik pada objek $smartphone_baru
$smartphone_baru->pemilik="Bela";
echo $smartphone_baru->hidupkan_smartphone();
echo "<br>";
// buat objek baru
//$smartphone_lama = new smartphone();
//echo $smartphone_lama->hidupkan_smartphone();
?>