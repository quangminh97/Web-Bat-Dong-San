	<form onsubmit="return true" action="queeyq" method="get" accept-charset="utf-8">
	<div class="container-fluid tt-duan" >
		<div class="row ">

			<?php if (!isset($detail)): ?>
				<!-- start	form insert du lieu len database -->
				<input type="text" class="col-10 demo_from model_1_ip_h2" onblur="event_hide_form(0)" name="" placeholder="Tieu de du an">
				<h2 class="col-sm-12 text_demo model_1_h2" style="display: none;" ondblclick="event_show_form(0)">ban can them thong tin</h2>
				<input type="text" class="col-10 demo_from model_1_ip_p" name="" onblur="event_hide_form(1)" placeholder="Tieu de ul">
				<p class="tieude-ul col-sm-12 text_demo" style="display: none;" ondblclick="event_show_form(1)"></p>
				<textarea name="" class="col-sm-10 demo_from model_1_txrea_ul" rows="5">
				</textarea>
				<ul style="list-style-type: circle;" class="ul-tt">
				</ul>
				<input type="file" name="" value="" id="minh" onclick="hientenanh()" placeholder="">
				<div class="row justify-content-center">
					<img src="C:\Users\Administrator\Pictures\img_em_yeu.jpg" alt="">
				</div>
				<!-- end form insert du lieu len database -->
				<?php else: ?>
					<h2 class="col-sm-12" ><span style="font-size: 14pt" id="h2_td">  TỔNG QUAN QUY MÔ DỰ ÁN CHUNG CƯ THĂNG LONG CAPITAL:</span></h2>
					<!-- <textarea name="p" cols="80" rows="2"></textarea> -->
					<p class="tieude-ul col-sm-12">1. Đối với khách hàng vay vốn ngân hàng để mua căn hộ. (Miễn lãi 18 tháng và ân hạn nợ gốc 12 tháng)</p>
					<!-- <textarea name="ul" cols="80" rows="5"></textarea> -->
					<ul style="list-style-type: circle;" class="ul-tt">
						<?php $exp = explode("\n", $detail['text_thongtin']);?>
						<?php foreach ($exp as $key => $val):?>
							<li><?php echo $val; ?></li>
						<?php endforeach;?>	
					</ul>
					<div class="row justify-content-center">
						<img src="https://www.vubahai.vn/wp-content/uploads/2018/11/chungcuthanglongcapital.jpg" style="max-height:100vh"  alt="" class="col-10">
					</div>
				<?php endif;?>
			</div>
		</div>
	</form>
	<script type="text/javascript" src="../../bootstrap-4/js/jsdemo.js">
		window.onload = function()
{

};


	alert(lay_do_dai_class());


	</script>
