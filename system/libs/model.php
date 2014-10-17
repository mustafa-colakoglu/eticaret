<?php
	class model extends PDO{
		public function __construct(){
			include "config.php";
			$db=parent::__construct("mysql:host=".$mysql["site"].";dbname=".$mysql["db"],$mysql["kadi"],$mysql["sifre"]);
		}
		public function select($tablo,$where=false,$satir=false,$diger=false){
			if($where){
				$where="WHERE ".$where;
			}
			else{
				$where="";
			}
			if($satir){
				$satir=$satir;
			}
			else{
				$satir="*";
			}
			if($diger){
				$diger=$diger;
			}
			else{
				$diger="";
			}
			$sql=("SELECT ".$satir." FROM ".$tablo." ".$where." ".$diger);
			$dizi = $this->prepare($sql);
			$dizi->execute();
			return $dizi->fetchAll();
		}
		public function insert($tablo,$satirlar,$degerler){
			$sql="INSERT INTO ".$tablo."(".$satirlar.") VALUES(".$degerler.")";
			return $this->exec($sql);
		}
		public function update($tablo,$set,$where=false){
			if($where){
				$sql="UPDATE ".$tablo." SET ".$set." WHERE ".$where;
			}
			else{
				$sql="UPDATE ".$tablo."SET ".$set;
			}
			return $this->query($sql);
		}
		public function delete($tablo,$where=false){
			if($where){
				$sql="DELETE FROM ".$tablo." WHERE ".$where;
			}
			else{
				$sql="DELETE FROM ".$tablo;
			}
			return $this->query($sql);
		}
		public function tam($sql){
			return $this->query($sql);
		}
		public function __destruct(){}
	}
?>