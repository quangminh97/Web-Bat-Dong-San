<?php
require "Config/Database.php";

class Product_Model extends Database
{
	
	function __construct()
	{
		parent::__construct();	
	}
	function selectAll_product(){
		try{
			$sql = "SELECT * FROM detail_project";
			$stmt = $this->pd->prepare($sql);	
			$stmt->setFetchMode(PDO::FETCH_ASSOC);
			$stmt->execute(); 
			$resut=$stmt->fetchAll();
			return $resut;
		}
		
		catch(PDOException $e) {
			echo "Error: " . $e->getMessage();
		}

	}
	function select_detail($id){
		$sql = "SELECT * FROM detail_project WHERE id=:id";
		$stmt = $this->pd->prepare($sql);
		$stmt->bindParam(':id',$id,PDO::PARAM_INT);
		$stmt->setFetchMode(PDO::FETCH_ASSOC);
		$stmt->execute(); 
		$resut=$stmt->fetch();
		return $resut;
	}
	function SelectViewDetail($id){
		$sql = "SELECT * FROM view_select_detail WHERE ID_Du_An=:id ORDER BY ViTri_BoCuc";
		$stmt = $this->pd->prepare($sql);
		$stmt->bindParam(':id',$id,PDO::PARAM_INT);
		$stmt->setFetchMode(PDO::FETCH_ASSOC);
		$stmt->execute(); 
		$resut=$stmt->fetchAll();
		return $resut;
	}
}
