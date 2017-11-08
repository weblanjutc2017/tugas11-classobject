<?php
class smartphone {
 const DOLLAR = '12000';
}
class tablet extends smartphone {
 const DOLLAR = '13000';
 public function beli_smartphone($harga){
 return "Beli Smartphone Baru, Rp .".$harga*parent::DOLLAR;
 }

 public function beli_tablet($harga){
 return "Beli Tablet baru, Rp .".$harga*self::DOLLAR;
 }
}

$tablet_obj = new tablet();

echo $tablet_obj->beli_tablet(200);
echo "<br />";
echo $tablet_obj->beli_smartphone(400);
?>
