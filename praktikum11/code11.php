<?php
// buat class induk
class smartphone {
   protected function beli_smartphone() {
     return "Beli smartphone baru";
   }
}
// turunkan class smartphone
class tablet extends smartphone {
   protected function beli_tablet() {
     return "Beli tablet baru";
   }
}
// turunkan class tablet
class smartphone_dualsim extends tablet {
   protected function beli_smartphone_dualsim() {
     return "Beli smartphone dual sim baru";
   }  
   public function beli_semua(){
     $a = $this->beli_smartphone();
     $b = $this->beli_tablet();    
     $c = $this->beli_smartphone_dualsim();
     return "$a <br /> $b <br /> $c";
   }
} 
// buat objek (instansiasi)
$gadget_baru = new smartphone_dualsim(); 
//panggil method objek
echo $gadget_baru->beli_semua();
echo $gadget_baru->beli_smartphone();
?>