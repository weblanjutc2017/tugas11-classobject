<?php
class smartphone {
	public static $merk = "Samsung";
	public function lihat_spec() {
		return "Spec smartphone: Samsung, Processor Snapdragon, Ram 1GB";
	}
}

class smartphone_dualsim extends smartphone {
	public $merk_dualsim = "asus";
	public function lihat_spec() {
		return "Spec smartphone dual sim: Asus, Processor Snapdragon, Ram 2GB";
	}
	public function lihat_spec_smartphone() {
		return parent::lihat_spec();
	}
	public function lihat_merk_smartphone() {
		return parent::$merk;
	}
}

$gadget_baru = new smartphone_dualsim();
echo $gadget_baru->lihat_spec();
echo "<br />";
echo $gadget_baru->lihat_spec_smartphone();
echo "<br />";
//echo $gadget_baru->lihat_merk_smartphone();
echo $gadget_baru::$merk;
?>
