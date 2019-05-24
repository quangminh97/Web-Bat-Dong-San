<?php 
class ProductController
{
		// function home(){
		// 	require 'View/home/home_view.php'; 
		// }
	function product(){
		$id=$_GET['id'];
		require 'Model/product_model.php';
		$pd_md=new Product_Model;
		$product=$pd_md->select_detail($id);
		$detail_pd=$pd_md->SelectViewDetail($id);
		require 'View/index.php';
		require 'View/product/showproduct_view.php';

	}
	function insertProduct(){
		require 'View/index.php';
		require 'View/Product_Structure/text-col-1-text.php';
	}
}
$homeView=new ProductController;
$idex=$_GET['dx'] ?? 'product';
$homeView->$idex();

?>

