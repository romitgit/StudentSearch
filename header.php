<html>
	<head>

		<title>Romit | Student Search</title>
		<meta name='author' content='Romit Choudhary'>
		<meta http-equiv='cache-control' content='public'>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		<meta http-equiv='content-language' content='en-US'>
		<meta name='copyright' content='&copy; 2014 Romit Choudhary'>
		<meta name='description' content='A search engine for campus students to search for anyone in the campus.'>
		<meta name='keywords' content='student search iitk, student search, search iitk, search, romit iitk, romit choudhary iitk, romit, choudhary, web developer, coder, search engine'>
		<meta name='robots' content='index,follow'>
		<meta property='og:title' content='Student Search'>
		<meta property='og:type' content='website'>
		<meta property='og:site_name' content='Student Search'>
		<meta property='fb:admins' content='100002095998425'>		

		<style>

	#searchform{
				margin:0px;
				margin-top:30px;
				box-shadow: 0px 0px 6px black;
			}
			input{
				padding:6px;
				margin-left:20px;
				background: white;
			}
			select{
				padding:6px;
				margin-left:20px;
				margin-top: 10px;
				background: white;
			}
			input,select{
	background-color: #FFF;
	border: 1px solid #ccc;
	-webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,0.075);
	-moz-box-shadow: inset 0 1px 1px rgba(0,0,0,0.075);
	box-shadow: inset 0 1px 1px rgba(0,0,0,0.075);
	-webkit-transition: border linear .2s, box-shadow linear .2s;
	-moz-transition: border linear .2s, box-shadow linear .2s;
	-o-transition: border linear .2s, box-shadow linear .2s;
	transition: border linear .2s, box-shadow linear .2s;
	color: #555;
	font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
}
input:focus{
}
.btn{
	padding: 4px 12px;
	margin-bottom: 0px;
	font-size: 14px;
	line-height: 20px;
	color: #333;
	text-align: center;
	text-shadow: 0 1px 1px rgba(255,255,255,.75);
	vertical-align: middle;
	cursor: pointer;
	background-color: #f5f5f5;
	border: 1px solid #ccc;
	border-color: rgba(0,0,0,0.1) rgba(0,0,0,0.1) rgba(0,0,0,0.25);
	border-bottom-color: #b3b3b3;
	-webkit-border-radius: 4px;
	-moz-border-radius: 4px;
	border-radius: 4px;
	-webkit-box-shadow: inset 0 1px 0 rgba(255,255,255,0.2),0 1px 2px rgba(0,0,0,0.05);
	-moz-box-shadow: inset 0 1px 0 rgba(255,255,255,0.2),0 1px 2px rgba(0,0,0,0.05);
	-box-shadow: inset 0 1px 0 rgba(255,255,255,0.2),0 1px 2px rgba(0,0,0,0.05);
}

	</style>
	<script type="text/javascript">
		 function focusOnInput()
			{
		 		document.getElementById("sname").focus();
		 	}
 </script>	
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-43364785-4', 'auto');
  ga('send', 'pageview');

</script>

</head>
<body onload="focusOnInput()">
	<div id="searchform"  align="center" style='margin-top:0px;padding-top:20px;background:white;position:fixed;z-index:100;left:0px;right:0px;'>

				
				<form align="center" method="post" action="searchres.php" style='background:white;'>
			<input type="text" name="sname" placeholder="Name of student" autofocus autocomplete='off' onKeyUp="result(this)" style="width:12%;">
				<input type="text" name="roll" placeholder="Roll No" style="width:8%;">
				<input type="text" name="city" placeholder="City" style="width:10%;">
				<input type='text' name='email' placeholder='Email' style="width:10%;" >					
					<select name="gender">
						<option value="">Gender</option>
						<option value="M">Male</option>
						<option value="F">Female</option>
					</select>
					<select name="batch">
					<option value="">Batch</option>
						<option value="y14">Y14</option>
						<option value="y13">Y13</option>
						<option value="y12">Y12</option>
						<option value="y11">Y11</option>
					</select>
					<select name="program">
						<option value="">Program</option>
						<option value='BTech'>BTech</option>
						<option value='MTech'>MTech</option>
						<option value='BS'>BS</option>
						<option value='MSc(2 yr)'>MSc(2 yr)</option>
						<option value='PhD'>PhD</option>
						<option value='PhD(Dual)'>PhD(Dual)</option>
						<option value='MDes'>MDes</option>
						<option value='MBA'>MBA</option>
					</select>
					<select name="dept">
						<option value="">Dept</option>
						<option value="EE">EE</option>
						<option value="CSE">CSE</option>
						<option value="MSE">MSE</option>
						<option value="BSBE">BSBE</option>
						<option value="ME">ME</option>
						<option value="CE">CE</option>
						<option value="CHE">CHE</option>
						<option value="MTH">MTH</option>
						<option value="CHM">CHM</option>
						<option value="ECO">ECO</option>
<!-- 						<option value="MDes">MDes</option>
						<option value="STATISTICS">STATISTICS</option>
						<option value="HSS">HSS</option>
						<option value="Nuclear Engg.">Nuclear Engg.</option>
						<option value="LASER Technology">LASER</option>
						<option value="MSP">MSP</option>
						<option value="IME">IME</option>
 -->					</select>
					<select name="hall">
						<option value="">Hall</option>
						<option value="Hall 1">Hall 1</option>
						<option value="Hall 2">Hall 2</option>
						<option value="Hall 3">Hall 3</option>
						<option value="Hall 4">Hall 4</option>
						<option value="Hall 5">Hall 5</option>
						<option value="Hall 6">Hall 6</option>
						<option value="Hall 7">Hall 7</option>
						<option value="Hall 8">Hall 8</option>
						<option value="Hall 9">Hall 9</option>
						<option value="Hall 10">Hall 10</option>
						<option value="Hall 11">Hall 11</option>
						<option value="Gh">GH</option>
					</select>
					<select name="blood">
						<option value="">Blood Group</option>
						<option value="A&#43;">A+</option>
						<option value="A&#45;">A-</option>
						<option value="B&#43;">B+</option>
						<option value="B&#45;">B-</option>
						<option value="AB&#43;">AB+</option>
						<option value="AB&#45;">AB-</option>
						<option value="O&#43;">O+</option>
						<option value="O&#45;">O-</option>
					</select>
					
					<br><br>
				<a href="index.php" style="text-decoration:none;background:#007d9a;color:white;border:1px solid 		#007d9a;cursor:pointer;margin-top:20px;box-shadow:0px 0px 1px grey;font-size:16px;padding:3px;">Home</a>
			<input type="submit" name="submitforface" value="Search" style="font-size:16px;background:#007d9a;padding:3px;color:white;border:1px solid #007d9a;cursor:pointer;box-shadow:0px 0px 1px grey;">
				</form>
			<br>
			</div>

			<table>
				<tr>
					<p style='background:white;box-shadow:0px 0px 5px grey;padding:10px;text-align:center;margin-top:80px;font-weight:bold;position:fixed;bottom:0px;left:0px;right:0px;' >Designed and Developed By <a href="http://www.facebook.com/choudharyromit" target='_blank' style='text-decoration:underline;background:white;'>Romit Choudhary</a></p>
				</tr>
			</table>

		</body>
		</html>
