<?php
//buat class smartphone
class smartphone{
	//property dengan hak akses protected
	private $pembuat = "China";
	public function tampilkan_pembuat(){
		return $this->pembuat;
	}
}
//buat class tablet
class tablet extends smartphone{
	public function tampilkan_pembuat(){
		return $this->pembuat;
	}
}
//buat objek 
$smartphone_baru = new smartphone();
$tablet_baru = new tablet();
//jalankan method
echo $smartphone_baru->tampilkan_pembuat();
echo $tablet_baru->tampilkan_pembuat();
?>