<?php
// buat class smartphone
class smartphone {
  
   // buat property untuk class smartphone
   var $pemilik;
   var $merk;
   var $ukuran_layar;
  
   // buat method untuk class smartphone
   function hidupkan_smartphone() {
     return "Hidupkan smartphone";
   }
   function matikan_smartphone() {
     return "Matikan smartphone";
   }
}
  
// buat objek dari class smartphone (instansiasi)
$smartphone_ana = new smartphone();

// set property
$smartphone_ana->pemilik="Ana";
$smartphone_ana->merk="Asus Zenfone 2";
$smartphone_ana->ukuran_layar="5 inchi";
  
// tampilkan property
echo $smartphone_ana->pemilik;
echo "<br />";
echo $smartphone_ana->merk;
echo "<br />";
echo $smartphone_ana->ukuran_layar;
echo "<br />";
  
// tampilkan method
echo $smartphone_ana->hidupkan_smartphone();
echo "<br />";
echo $smartphone_ana->matikan_smartphone();
?>