<?php
// buat class smartphone
class smartphone {
  
   // buat protected property untuk class smartphone
   protected $pemilik = "Ana";

   public function akses_pemilik() {
      return $this->pemilik;
   }
   protected function hidupkan_smartphone() {
     return "Hidupkan smartphone";
   }
   public function paksa_hidup() {
      return $this->hidupkan_smartphone();
   }

}
  
// buat objek dari class smartphone (instansiasi)
$smartphone_ana = new smartphone();
  
// tampilkan method akses_pemilik()
echo $smartphone_ana->akses_pemilik();
echo "<br>";  
// tampilkan method paksa_hidup()
echo $smartphone_ana->paksa_hidup();
?>