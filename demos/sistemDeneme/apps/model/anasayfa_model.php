<?php
	class anasayfaModel extends model{
		public function __construct(){
			parent::__construct();
		}
		public function modelSec(){
			$data=array();
			$data["ornek"]="Ornek veri.";
			return $data;
		}
		public function __destruct(){
			$db=null;
		}
	}
?>