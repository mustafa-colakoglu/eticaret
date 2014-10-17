<?php
	class girisModel extends model{
		public function __construct(){
			parent::__construct();
		}
		public function modelSec(){
			$data=array();
			include "config.php";
			if(@$_SESSION["kadi"]=="" || @$_SESSION["sifre"]==""){
				$data["giris"]="YAPILMADI";
				if($_POST){
					$kadi=$_POST["kadi"];
					$sifre=$_POST["sifre"];
					$md5Sifre=md5($_POST["sifre"]);
					$denetle=$this->select("kullanicilar","kadi='$kadi' && sifre='$md5Sifre'");
					if(count($denetle)==1){
						$_SESSION["kadi"]=$kadi;
						$_SESSION["sifre"]=$sifre;
						foreach($denetle as $denet){
							$_SESSION["id"]=$denet["id"];
						}
						$data["giris"]="YAPILDI";
						header("Location:".$data["doc"]."anasayfa");
					}
				}
				else{}
			}
			else{
				header("Location:".$data["doc"]."anasayfa");
			}
			return $data;
		}
		public function __destruct(){
			$db=null;
		}
	}
?>