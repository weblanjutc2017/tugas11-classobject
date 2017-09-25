<?php
// buat class 
class smartphone {
   // buat method 
   public function hidupkan_smartphone($pemilik = "Ciko",$merk = "Samsung") {
     return "Hidupkan smartphone $merk punya $pemilik";
   }
}
// buat objek (instansiasi)
$smartphone_obj= new smartphone();
echo $smartphone_obj->hidupkan_smartphone();
echo "<br>";
echo $smartphone_obj->hidupkan_smartphone("Ana", "Lenovo");
?>