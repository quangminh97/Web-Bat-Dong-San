
<?php
foreach ($detail_pd as $key => $value) {
	$detail=$value;		
 	require 'View/Product_Structure/'.$detail['Thumuc_chua'];
}

?>
<div class="form-bottom-fixed form-bottom-fixed-hide" id="form-bottom-fixed-hide">
	<div class="top1-form-bottom-fixed" onclick="form_bottom_fixed_hide()">
		<h3>Nhận tư vấn dự án</h3>
	</div>
	<form method="GET" accept-charset="utf-8" id="form_4">
		<label for="fullname">Họ và Tên</label>
		<br>
		<input type="text" name="fullname" class="col-sm-12" id="phone_number" placeholder="Họ và Tên">
		<br>
		<label for="phone_number">Số Điện Thoại</label>
		<br>
		<input type="text" name="phone_number" class="col-sm-12" id="phone_number" placeholder="Số Điện Thoại">
		<br>
		<label for="_email">Email</label>
		<br>
		<input type="text" name="_email" class="col-sm-12" id="phone_number" placeholder="Số Điện Thoại">
		<br>
		<button type="submit" onclick="checkData('form_4')" class="btn form-group btn-default col-sm-5 col-sm-push-3">Đăng Ký</button>
	</form>

</div>
<!-- bat dau hotline -->
<div class="hotline">
	<div id="phonering-alo-phoneIcon" class="phonering-alo-phone phonering-alo-green phonering-alo-show">
		<div class="phonering-alo-ph-circle"></div>
		<div class="phonering-alo-ph-circle-fill"></div>
		<div class="phonering-alo-ph-img-circle">
			<a class="pps-btn-img fa fa-volume-control-phone" title="Liên hệ" href="tel:0987494138"><span style="font-size: 24px;

			color: white;"><i class="fas fa-phone-volume"></i></span> </a>
		</div>
	</div>
	<div class="lienhe">
		<span href=""><?php echo $product['host_line']; ?></span>
	</div>

	
</div>
<!-- end hotline -->
<script type="text/javascript" charset="utf-8" async defer>
	var form_onclick=true;
	function form_bottom_fixed_hide(){
		if (form_onclick) {
			$('#form-bottom-fixed-hide').addClass('form-bottom-fixed-hide');
			form_onclick=false;
		}else{
			$('#form-bottom-fixed-hide').removeClass('form-bottom-fixed-hide');
			form_onclick=true;
		}
	}

</script>
	<!-- <textarea name="" id="ngoc" cols="30" rows="10" onkeyup="inra()"></textarea>
	<div >

	</div> -->
	<!-- <script type="text/javascript" charset="utf-8" async defer>
		var a=[];var i=0;var b=[];
		function inra() {
			var ngoc=document.getElementById('ngoc');
			a[0]=ngoc.value;
			b=(a[0].split('\n'));

			document.getElementById('minhk').innerHTML = foreach_array();
		
			function foreach_array(){
				var c='';
				for(var i=0;i < b.length;i++)
				{
					c+='<p>' + b[i] + '</p>';
				}
				return c;
			}

			// ngoc.onkeyup=function(e){
			// 	if (e.keyCode==13) {
			// 		document.getElementById('minh').innerHTML +='<br>';
			// 		alert(a[i]);
			// 		i++;
			// 	}else{
			// 		document.getElementById('minh').innerHTML +=e.key;
			// 		if (a[i]==null) {a[i]='';}
			// 		a[i] +=e.key;
			// 	}
			// }

		}
		inra();
	</script>
 -->