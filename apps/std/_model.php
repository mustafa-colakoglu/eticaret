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
			}
			return $data;
		}
		public function __destruct(){
			$db=null;
		}
	}
?>