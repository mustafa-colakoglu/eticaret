<?php
	class anasayfaModel extends model{
		public function __construct(){
			parent::__construct();
		}
		public function modelSec(){
			$data=array();
			$data["konular"]=array(
				array("baslik"=>"deneme baslik","detay"=>"detaylar falan fisman1111"),
				array("baslik"=>"deneme baslik2","detay"=>"detaylar falan fisman2222")
			);
			return $data;
		}
		public function __destruct(){
			$db=null;
		}
	}
?>