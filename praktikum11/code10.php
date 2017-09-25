<?php
class smartphone {
   private $pemilik = "Ana";
   private $merk = "Lenovo";
   public function __construct(){
     echo "Ini berasal dari Constructor smartphone";
   }
   public function hidupkan_smartphone(){
     return "Hidupkan smartphone $this->merk punya $this->pemilik";
   }
   public function __destruct(){
     echo "Ini berasal dari Destructor smartphone";
   }
}
$smartphone_obj = new smartphone();

echo "<br />";
echo $smartphone_obj->hidupkan_smartphone();
echo "<br />";
  
// hapus objek $smartphone_obj
unset($smartphone_obj);
  
echo "<br />";
echo "Objek Telah Dihancurkan";
echo "<br />";
?>