// <script type="text/javascript" charset="utf-8" async defer>
		var text_demo=document.getElementsByClassName('text_demo');
		var demo_from=document.getElementsByClassName('demo_from');
		
		function event_hide_form(i){
			text_demo[i].style.display='inline';
			demo_from[i].style.display='none';
			text_demo[i].innerHTML=demo_from[i].value;
			

		// console.log(click.innerHTML);
	}
	function event_show_form(i){
		demo_from[i].style.display='inline';
		text_demo[i].style.display='none';
		// ip_from[i].value=text_demo[i].innerText;
	}
	function hientenanh(){
	var minh=document.getElementById('minh').value;
	alert(minh);
	}
// </script>

