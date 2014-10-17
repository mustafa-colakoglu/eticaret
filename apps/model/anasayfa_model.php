<?php
	class anasayfaModel extends model{
		public function __construct(){
			parent::__construct();
		}
		public function modelSec(){
			$data=array();
			include "config.php";
			if(@$_SESSION["kadi"]=="" || @$_SESSION["sifre"]==""){
				$data["giris"]="YAPILMADI";
			}
			else{
				$data["giris"]="YAPILDI";
				$id=$_SESSION["id"];
				$data["kullaniciBilgi"]=$this->select("kullanicilar","id='$id'");
			}
			$data["son40"]=$this->select("ilanlar","","","ORDER BY id DESC LIMIT 40");
			$data["firsatUrun"]=$this->select("ilanlar","firsat='1'","","ORDER BY id DESC");
			return $data;
		}
		public function __destruct(){
			$db=null;
		}
	}
?>