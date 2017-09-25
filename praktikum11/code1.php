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
?>