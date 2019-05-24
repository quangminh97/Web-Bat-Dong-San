<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
	<script type="text/javascript" src="../../bootstrap-4/js/jsdemo.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
</head>
<body>
<button type="button" onclick="sendajax()">an vao</button>
<div id="result">
	quangminh
</div>
	
</body>
<script type="text/javascript">
	
	var sendajax = function () {
    //Khoi tao doi tuong
    var xhttp = new XMLHttpRequest() || ActiveXObject();
    //Bat su kien thay doi trang thai cuar request
    xhttp.onreadystatechange = function () {
        //Kiem tra neu nhu da gui request thanh cong
        if (this.readyState == 4 && this.status == 200) {
            //In ra data nhan duoc
            addData(this.responseText);
            alert(lay_do_dai_class());
        }
    }
    //cau hinh request
    xhttp.open('GET','../Product_Structure/text-col-1-text.php',true);
    //gui request
    xhttp.send();
}
var addData = function (data) {
    document.getElementById('result').innerHTML += data;

}

function lay_do_dai_class(){
	var leght=document.getElementsByClassName('text_demo').length;
	// alert(leght);
	return leght;

	
}

</script>

</html>