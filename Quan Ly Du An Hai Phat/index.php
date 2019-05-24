<?php 
if(file_exists('route/web.php')){
    require 'route/web.php';
    // require 'View/index.php';
} else {
    die('He thong dang duoc nang cap, vui long quay lai sau');
}