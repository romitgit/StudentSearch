<?php

	//require 'ip.php';

?>


<html>
	<head>
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
         a:link {text-decoration:none;color:#007d9a;}      /* unvisited link */
         a:visited {text-decoration:none;color:#007d9a;}  /* visited link */
         a:hover {text-decoration:none;color:#007d9a;}  /* mouse over link */
         a:active {text-decoration:none;color:#007d9a;}  /* selected link */ 
	</style>
	<script type="text/javascript">
		 function focusOnInput()
			{
		 		document.getElementById("sname").focus();
		 	}
 </script>	
</head>
<?php


	include 'connect.inc.php';
	include 'header.php';

	if (isset($_POST['submitforface'])) 
	{
	
		$name = strtolower($_POST['sname']);
		$roll = strtolower($_POST['roll']);
		$city = strtolower($_POST['city']);
		$gender = strtolower($_POST['gender']);
		$batch = strtolower($_POST['batch']);
		$program = strtolower($_POST['program']);
		$dept = strtolower($_POST['dept']);
		$hall = strtolower($_POST['hall']);
		$blood = strtolower($_POST['blood']);
		$email = strtolower($_POST['email']);

		echo $gender."-".$batch."-".$program."-".$dept."-".$hall."-".$blood;

		$bigData = file_get_contents("data.txt");
		$bigDataArr = explode("\n", $bigData);
		$results = array();

		foreach($bigDataArr as $singleData)
		{	
			$singleDataArr = explode("***", $singleData);

			if($roll != "" && strlen($roll) == 7)
			{
				if($singleDataArr[0] == $roll)
				{
					array_push($results, $singleDataArr);
				}
			}
			elseif($name != "")
			{
				if($name == strtolower($singleDataArr[1]))
				{
					array_push($results, $singleDataArr);
				}
			}
			elseif($city != "")
			{
				if($city == strtolower(@$singleDataArr[12]))
				{
					array_push($results, $singleDataArr);
				}	
			}
			elseif($email != "")
			{
				if($email == $singleDataArr[7])
				{
					array_push($results, $singleDataArr);
				}	
			}
			else
			{
				$track = 0;

				if($dept != "")
				{
					if($dept == strtolower($singleDataArr[5]))
					{
						array_push($results, $singleData);
						$track = 1;
					}
					else
					{
						continue;
					}
				}
				if($hall != "")
				{
					if($hall == strtolower(substr($singleDataArr[6], 0, strpos($singleDataArr[6], ','))))
					{
						if($track != 1)
						{
							array_push($results, $singleData);
							$track = 1;
						}
					}
					else
					{
						if($track == 1)
						{
							array_pop($results);
						}
						continue;
					}
				}
				if($batch != "")
				{
					if($batch == "y".substr($singleDataArr[0], 0, 2))
					{
						if($track != 1)
						{
							array_push($results, $singleData);
							$track = 1;
						}
					}
					else
					{
						if($track == 1)
						{
							array_pop($results);
						}
						continue;
					}
				}
				if($gender != "")
				{
					if($gender == strtolower($singleDataArr[9]))
					{
						if($track != 1)
						{
							array_push($results, $singleData);
							$track = 1;
						}
					}
					else
					{
						if($track == 1)
						{
							array_pop($results);
						}
						continue;
					}
				}
				if($program != "")
				{
					if($program == strtolower($singleDataArr[4]))
					{
						if($track != 1)
						{
							array_push($results, $singleData);
							$track = 1;
						}
					}
					else
					{
						if($track == 1)
						{
							array_pop($results);
						}
						continue;
					}
				}
				if($blood != "")
				{
					if($blood == strtolower($singleDataArr[8]))
					{
						if($track != 1)
						{
							array_push($results, $singleData);
							$track = 1;
						}
					}
					else
					{
						if($track == 1)
						{
							array_pop($results);
						}
						continue;
					}
				}
			}
		}
	}

			$num = count($results);	
	
			echo "<div id='serres' style='' align='center' >";
					
					if($num == 1)
					{
						$rowdet = explode("***", $results[0]);
						echo "<script>
								window.location = 'profile.php?view=$rowdet[0]'
							  </script>";
					
					}
					
					else if($num!=0 and $num !=1)
					{
					
						echo "<div align='center' style='margin:50px;'>
                  				<h3 style='margin-top:20px;padding:10px;background:#003399;opacity:0.6;color:white;font-size:28px;'>$num Results</h3>";

						foreach($results as $result)
						{
						
							$row = explode("***", $result);
							$batch = "y".substr($row[0], 0, 2);

							$title = "$row[1]\n$batch\n$row[3]";
							
							$url = getImageGroup($row[0]);
							
							$namelength = strlen($row[1]);
							
							echo 
										"<div id='singleimage'  style='display:inline-block;margin:10px;margin-bottom:0px;background:white;box-shadow:0px 0px 2px grey;border:5px solid white;'>
											<a href='profile.php?view=$row[0]'  title='$title' style='color:black;text-decoration:none;'>
												$url
												<div style='margin:0px auto;text-align:center;background:white;font-size:13px;font-weight:bold;'>$row[1]<br>$batch&nbsp;&nbsp;$row[5]</div>
											</a>
										 </div>";
						}
				
						echo "</div><br>";
					}
					// elseif ($num==0 and $name!="") 
					// {
					// 	$string1 = $name;
				
					// 	$substr = substr($string1,0,1);
						
					// 	$querysug = "SELECT * FROM fellowdata WHERE name LIKE '$substr%'";
					// 	$results = mysql_query($querysug);
					// 	$numres = mysql_num_rows($results);
					// 	$namesarray = array();
					// 	$similarityarray = array();
					// 	$idarray = array();
						
					// 	for($i=0;$i<$numres;$i++)
					// 	{
					// 		$row = mysql_fetch_row($results);
					// 		$names = explode(' ', $row[1]);
					// 		$firstname = $names[0];
					// 		$namesarray[$i] = $row[1];
					// 		$idarray[$i] = $row[0];
					// 		$similarity = similar_text($string1,$firstname,$result);
					// 		$similarityarray[$i] = $result;
					// 	}
						
						
					// 	array_multisort($similarityarray,$namesarray,$idarray);
						
					// 	echo "<p style='margin:30px;font:bold 20px arial;'>Sorry No results were found</p><br>
					// 			<p style='margin-left:30px;color:blue;font-size:24px;'>Were you looking for one of these?</p>
					// 		<hr><br><br>";
						
					// 	echo "<div style='margin:30px;'>";
						
						
					// 	for($i=$numres,$j=0;$j<11;$i--,$j++)
					// 	{
						
					// 		if(isset($idarray[$i]) and isset($namesarray[$i]))
					// 		{
					// 			echo "<div style='margin:6px;'><a href='profile.php?view=$idarray[$i]'  style='margin:15px;font-size:18px;'>$namesarray[$i]</a></div>";
						
					// 		}
					// 	}
					// }	
?>