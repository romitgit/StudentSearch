<?php 

	//require 'ip.php';
	
	include "connect.inc.php";

?>
<html>
	<head>
		<title>Faceit</title>
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
			

		<div id='info'  style='position:absolute;z-index:1;background:#EEEEEE;box-shadow:-10px 10px 15px black;min-width:100%;' align='center'></div>
		
		<table align="center" style='margin:0px auto;'>
			<tr>
		
			<div id="studimages"  style="margin:50px auto;width:900px;box-shadow:inset 0px 0px 10px black;" align='center'>
			
			</div>
			
			</tr>
			</table>

			<table>
				<tr>
					<p style='background:white;box-shadow:0px 0px 10px grey;padding:10px;text-align:center;margin-top:40px;font-weight:bold;' >Designed and Developed By <a href="http://www.facebook.com/choudharyromit" target='_blank' style='text-decoration:underline;'>Romit Choudhary</a></p>
				</tr>
			</table>
	</body>
</html>