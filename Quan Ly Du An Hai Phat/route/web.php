<?php 
class Route
{
    public function home()
    {
        require 'Controller/homecontroller.php';
    }

    public function product()
    {
        require 'Controller/productcontroller.php';
    }

    public function user()
    {
        require 'Controller/usercontroller.php';
    }

    public function __call($r, $q)
    {
        echo "Not Found page \n";
    }
}

$route = new Route;
// can bat duoc tham so tren url cua trinh duyet (chinh la request ma nguoi dung gui len)
// ?c=home&m=index
// c : ten cua controller
// m : ten method nam trong controller
$c = $_GET['c'] ?? 'home';
// dieu huong di vao controller
$route->$c();