<?php 

	//require 'ip.php';
	
	include "connect.inc.php";

?>
<html>
	<head>
		<script>

		<?php 

			include 'ajax.js';

		?>

</script>
		<style>
			*{
				margin:0px;
				padding:0px;
				font:normal 14px arial;
				background: #e5e5e5;
			}
			
			h1{
				padding:10px;
				padding-left:50px;
				font:normal 36px arial;
				background:#003399;
				color:white;
			}
			img{
				border: none;
			}
			a{
				text-decoration:none;
			}
			a:hover{
				text-decoration:underline;
			}
			.home{
				font:normal 26px arial;
				position:absolute;
				left:30px;
				top:80px;
				box-shadow:0px 0px 1px grey;
				background:#2daebf;
				color:white;
				padding:5px;
				-webkit-transition:background 1s,color 1s;
				-moz-transition:background 1s,color 1s;
				-box-transition:background 1s,color 1s;
			}
			.home:hover{
				background:rgba(255, 255,255,0.7);;
				color:grey;
			}
			.newdes{
				font:normal 26px arial;
				position:absolute;
				right:30px;
				top:80px;
				box-shadow:0px 0px 1px grey;
				background:#2daebf;
				color:white;
				padding:5px;
				-webkit-transition:background 1s,color 1s;
				-moz-transition:background 1s,color 1s;
				-box-transition:background 1s,color 1s;
			}
			.newdes:hover{
				background:rgba(255, 255, 255,0.7);;
				color:grey;
			}
			a:link {text-decoration:none;}      /* unvisited link */
			a:visited {text-decoration:none;}  /* visited link */
			a:hover {text-decoration:none;}  /* mouse over link */
			a:active {text-decoration:none;}  /* selected link */ 
		</style>
	</head>
	<body>
		<!-- headergoeshere -->
			<?php   

				include 'header.php';

			?>
			

		<div id='info' align="center" style='margin-top:10%;position:absolute;z-index:1;background:#EEEEEE;box-shadow:0px 0px 5px black;width:100%;'></div>
		
		<table style='margin:0px auto;'>
			<tr>
		
			<div id="studimages"  style="margin:220px auto;width:900px;box-shadow:inset 0px 0px 10px black;" align='center'>
			
			<h2 style='font:bold 30px arial;'>What's new !!</h2>
			<hr />
			<hr />
			<div style="padding:20px;">
			<img src="search.jpg" height="240px" style="float:right;">
			<h2 align="left" style="font:normal 18px arial;">This time you can make many complex queries. For example:</h2>
			<ul align="left" style="margin-top:20px;;">
				<li>Search all students named <span style="font-weight:bold;">Rahul</span> who are from <span style="font-weight:bold;">Indore</span> and are in <span style="font-weight:bold;">Y12</span> batch.</li>
<br>

				<li>Search all <span style="font-weight:bold;">BTech</span> students who are <span style="font-weight:bold;">A+</span> and are in <span style="font-weight:bold;">Y14</span> batch.</li>
			</ul>
			</div>

			</div>
			
			</tr>
			</table>
	</body>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-43364785-4', 'auto');
  ga('send', 'pageview');

</script>
</html>
