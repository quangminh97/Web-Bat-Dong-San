<?php 

class HomeController
{
	
	  public function home()
    {
    	require 'Model/product_model.php';
    	$pd_md=new Product_Model;
    	$GLOBALS['spnb']=$pd_md->selectAll_product();
        require 'View/index.php';
        require 'View/home/home_view.php';

    }
     public function __call($r, $q)
    {
        echo "Not Found page \n";
    }
}
$home=new HomeController;
$m=$_GET['m'] ?? 'home';
$home->$m();


