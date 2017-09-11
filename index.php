<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
	<meta http-equiv="Pragma" content="no-cache" />
	<meta http-equiv="Expires" content="0" />
	<title>HDs's DOTA 2 Competition 2014</title>
	<link link rel="icon" href="images/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/main.css">
</head>
<body>
	<script type="text/javascript">

	//var currenttime = '<!--#config timefmt="%B %d, %Y %H:%M:%S"--><!--#echo var="DATE_LOCAL" -->' //SSI method of getting server date
	var currenttime = '<?php print date("F d, Y H:i:s", time()); ?>' //PHP method of getting server date

	var montharray=new Array("January","February","March","April","May","June","July","August","September","October","November","December")
	var serverdate=new Date(currenttime)

	function padlength(what){
	var output=(what.toString().length==1) ? "0" + what : what
	return output
	}

	function displaytime(){
	serverdate.setSeconds(serverdate.getSeconds()+1)
	var datestring = padlength(serverdate.getDate()) + " " + montharray[serverdate.getMonth()] + " " + serverdate.getFullYear()
	var timestring = padlength(serverdate.getHours()) + ":" + padlength(serverdate.getMinutes()) + ":" + padlength(serverdate.getSeconds())
	document.getElementById("servertime").innerHTML = datestring + " " + timestring
	}

	window.onload=function(){
	setInterval("displaytime()", 1000)
	}

	</script>
	<header>
		<div id="header-container">
			<nav>
				<ul>
					<li><a href="#" class="gttext selected">Home</a></li>
					<li><a href="register.html" class="gttext">Register</a></li>
					<li><a href="rule.html" class="gttext">Rules</a></li>
					<li><a href="bracket.html" class="gttext">Bracket</a></li>
				</ul>
			</nav>
		</div>
	</header>
	<div id="wrapper">
		<section id="overview">
			<img src="images/overview_s.jpg" alt="HardwareData Store DOTA 2 Competition overview">
			<span class="upt">No matter you are nice or not, only take your courage and your friends then let fight in the battle with enemies ! </span>
			<span>ไม่จำเป็นต้องเก่งกาจ ขอแค่คุณมีความกล้า จัดทีมของคุณมาสิ แล้วลงมาร่วมแข่งขันกับผู้เล่นอีกมากมาย !</span>
			<span><b style="color: #ccc;font-size: 1.6em;">Refer time for battle</b><div id="servertime" style="font-size: 2em; color: #3399FF;"></div></span>
		</section>
		<section id="schedule">
			<h2 class="gttext">Schedule</h2>
			<ul>
				<li>
					<span class="date_title">วันเสาร์ที่ 4 - วันศุกร์ที่ 10</span>
					<p>เปิดลงทะเบียนเข้าแข่งขันที่หน้าเว็บ</p>
				</li>
				<li>
					<span class="date_title">วันอาทิตย์ที่ 2 พฤศจิกายน - ชิงชนะเลิศ</span>
					<p>การแข่งขันชิงชนะเลิศแบบ BO3 ระหว่างทีม Call Me Friends พบกับทีม No Meepo เวลา 20.00 น.</p>
				</li>
			</ul>
			<div class="schedule_note">
				แข่งขันวันละ 2 คู่ เริ่มแข่ง 20.00น. แข่งคู่ละ 1 ชม<br>
				ทุกการแข่งขันสามารถรับชมบน DOTA 2<br>
				ตารางจะอัพเดทหลังจากจบการแข่งขันในแต่ละวัน
			</div>
		</section>
		<section id="prize" class="secset">
			<h2 class="gttext">Winner Prize</h2>
			<span class="prize_total">฿ 3,000</span><br/>
			<span class="prize_text">รางวัลสำหรับผู้ชนะอันดับหนึ่ง</span>
			<a href="register.html" class="button"><div class="button_text">ร่วมแข่งขัน</div></a>
		</section>
		<footer>
			<a href="https://www.hardwaredatastore.com" class="hds-logo"></a>
			<a href="http://www.dota2.com/" class="dota2-logo"></a>
			<a href="http://www.valvesoftware.com/" class="valve-logo"></a>
			<p>&copy; 2014 HardwareData Store and Valve Corpotation, all rights reserved. Dota and the Dota logo are trademarks and/or registered trademarks of Valve Corporation. This website own by HardwareData OP.</p>
		</footer>
	</div>
</body>
</html>