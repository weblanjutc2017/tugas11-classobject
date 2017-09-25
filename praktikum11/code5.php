<?php
//buat class smartphone
class smartphone{
	//property dengan hak akses protected
	protected $pembuat = "China";
}
//buat class tablet
class tablet extends smartphone{
	public function tampilkan_pembuat(){
		return $this->pembuat;
	}
}
//buat objek dari class tablet
$tablet_baru = new tablet();
//jalankan method
echo $tablet_baru->tampilkan_pembuat();
?>