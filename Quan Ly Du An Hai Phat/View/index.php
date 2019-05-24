<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title></title>
	<link rel="stylesheet" href="">
	<script src="bootstrap-4\js\jquery-3.3.1.min.js" type="text/javascript"></script>
	<script src="bootstrap-4\js\bootstrap.min.js" type="text/javascript"></script>
	<link rel="stylesheet" href="bootstrap-4/css/bootstrap.min.css">
	<link rel="stylesheet" href="bootstrap-4/css/bootstrap-theme.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="bootstrap-4/css/product_view.css">
	
</head>
<body>
	<!-- strat thanh menu -->
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<a class="navbar-brand" href="#">
			<img src="View/imgs/logo_haiphat.png" width="70" height="70" alt="">
			Hai Phat Land
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Giới Thiệu
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="#">Phương Châm Hoạt Động</a>
						<a class="dropdown-item" href="#">Tin Tức Khách Hàng</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">Đội Ngũ Cộng Sự</a>
					</div>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Dự Án Phân Phối
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="#">Căn Hộ Chung Cư</a>
						<a class="dropdown-item" href="#">Biệt Thự Liền Kề</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">Đất Nền Xây Dựng</a>
					</div>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						TIn Tức Hải Phát
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="#">Tin Tức Dự Án</a>
						<a class="dropdown-item" href="#">Chương Trình Chi Ân</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">Tin Tức Hai Phát</a>
					</div>
				</li>
				<li class="nav-link" href="#" role="button" aria-haspopup="true" aria-expanded="false">
					<a href="">Tuyển Dụng</a>
				</li>
				<li class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<a href="">Liên Hệ</a>
				</li>
				<!-- cai dat ung dung -->				
				<li class="nav-item dropdown">
					<a class="nav-link " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<i class="fas fa-angle-down"></i>
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="#">Tin Tức Dự Án</a>
						<a class="dropdown-item" href="#">Chương Trình Chi Ân</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">Tin Tức Hai Phát</a>
					</div>

				</li>
				

			</ul>
			
			
		</div>

	</nav>
	<!-- end thanh menu -->
	<!-- start carousel boottrap -->
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img class="d-block w-100" src="View/imgs/hanoihomeland.jpg" alt="First slide">
			</div>
			<div class="carousel-item ">
				<img class="d-block w-100 carousel-img" src="View/imgs/romanplaza.jpg" alt="Second slide">
			</div>
			<div class="carousel-item ">
				<img class="d-block w-100 carousel-img" src="View/imgs/thevesta.jpg" alt="Third slide">
			</div>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
	<!-- end carousel boottrao -->
	<!-- 	start tieu de du an -->
	<h1 class="tieude_duan"><?php echo $product['Name']; ?></h1>

	<!-- 	end tieu de du an -->
	
</body>
</html>

