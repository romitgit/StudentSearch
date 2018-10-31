<!DOCTYPE html>
<html>
<body>

<?php
	
	ini_set('max_execution_time', 250);

	for ($i = 11001; $i < 11999; $i++) 
	{ 

		$content = file_get_contents("http://oa.cc.iitk.ac.in:8181/Oa/Jsp/OAServices/IITk_SrchRes.jsp?typ=stud&numtxt=".$i."&sbm=Y");
		$content = preg_replace( '/\s+/', ' ', $content );


		if (strpos($content,'Sorry No data found !') !== false) 
		{
			continue;
		}

		$startIndex = strripos($content, '<td class="TableContent');
		$endIndex = strripos($content, '-->');

		$finalContent = substr($content, $startIndex + 67, $endIndex-$startIndex);
		$finalContent = str_replace("<!--", "", $finalContent);
		$finalContent = str_replace("-->", "", $finalContent);
		$finalContent = str_replace("<P>", "<p>", $finalContent);
		$finalContent = str_replace("</P>", "</p>", $finalContent);

		$finalData = substr($finalContent, 0, strpos($finalContent, '</td>'));
		$finalData = substr($finalData, 0, strripos($finalData, '<p>'));

		$dataArr = explode("<p>", $finalData);

		$preRoll = $dataArr[0];
		$roll = substr($preRoll, strpos($preRoll, "</b>"), strpos($preRoll, "<br>") - strpos($preRoll, "</b>"));
		$roll = str_replace("</b>", "", $roll);
		$roll = trim($roll);

		$preName = $dataArr[1];
		$name = substr($preName, strpos($preName, "</b>"), strpos($preName, "</p>") - strpos($preName, "</b>"));
		$name = str_replace("</b>", "", $name);
		$name = ucwords(strtolower(trim($name)));

		$names = explode(" ", $name);
		$fname = $names[0];
		$lname = $names[count($names)-1];

		$preProgram = $dataArr[2];
		$program = substr($preProgram, strpos($preProgram, "</b>"), strpos($preProgram, "</p>") - strpos($preProgram, "</b>"));
		$program = str_replace("</b>", "", $program);
		$program = ucfirst(strtolower(trim($program)));

		$preDept = $dataArr[3];
		$predept = substr($preDept, strpos($preDept, "</b>"), strpos($preDept, "</p>") - strpos($preDept, "</b>"));
		$predept = str_replace("</b>", "", $predept);
		$predept = ucfirst(strtolower(trim($predept)));
		if($predept == "Material science & engineering"){$dept = "MSE";}
		elseif($predept == "Civil engg."){$dept = "CE";}
		elseif($predept == "Biol.sci. and bio.engg."){$dept = "BSBE";}
		elseif($predept == "Physics"){$dept = "PHY";}
		elseif($predept == "Mathematics"){$dept = "MTH";}
		elseif($predept == "Mechanical engg."){$dept = "ME";}
		elseif($predept == "Economics"){$dept = "ECO";}
		elseif($predept == "Computer sci. and engg."){$dept = "CSE";}
		elseif($predept == "Chemical engg."){$dept = "CHE";}
		elseif($predept == "Electrical engg."){$dept = "EE";}
		elseif($predept == "Chemistry"){$dept = "CHM";}
		elseif($predept == "Aerospace engg."){$dept = "AE";}


		$preHostel = $dataArr[4];
		$hostel = substr($preHostel, strpos($preHostel, "</b>"), strpos($preHostel, "</p>") - strpos($preHostel, "</b>"));
		$hostel = str_replace("<br>", "", $hostel);
		$hostel = str_replace("</b>", "", $hostel);
		$hostel = ucfirst(strtolower(trim($hostel)));

		$preEmail = $dataArr[5];
		if (strpos($preEmail,'.com') !== false) 
		{
			$premail = substr($preEmail, strpos($preEmail, ".com") + 6, strpos($preEmail, "</a>") - strpos($preEmail, ".com") - 6);
		}
		else
		{
			$premail = substr($preEmail, strpos($preEmail, "ac.in") + 7, strpos($preEmail, "</a>") - strpos($preEmail, "ac.in") - 7);	
		}
		$premail2 = str_replace("</b>", "", $premail);
		$premail2 = trim($premail2);

		if(strpos($premail2, "iitk.ac.in") === false)
		{
			$email = "Not Available";
		}
		else
		{
			$email = substr($premail2, 0, strpos($premail2, "@"));
		}

		$preBlood = $dataArr[6];
		$blood = substr($preBlood, strpos($preBlood, "</b>"), strripos($preBlood, "<b>") - strpos($preBlood, "</b>"));	
		$blood = str_replace("</b>", "", $blood);
		$blood = ucfirst(strtolower(trim($blood)));

		$preGender = $dataArr[7];
		$gender = substr($preGender, strpos($preGender, "</b>"), strripos($preGender, "<b>") - strpos($preGender, "</b>"));
		$gender = str_replace("</b>", "", $gender);
		$gender = trim($gender);

		if($gender == "M"){$gend = "Male";}
		if($gender == "F"){$gend = "Female";}

		$preAddress = $dataArr[9];
		$address = substr($preAddress, strpos($preAddress, "</b>"), strpos($preAddress, "</p>") - strpos($preAddress, "</b>"));		
		$address = str_replace("</b>", "", $address);
		$address = trim($address);
		$addressOnly = explode("<br>", $address);
		$gName = ucfirst(strtolower($addressOnly[0]));
		$paddress = ucfirst(strtolower(str_replace(",", ", ", str_replace(" ,", ",", $addressOnly[1]))));

		if($paddress == "Not available")
		{
			$city = "Not Available";
		}
		else
		{
			$towns = explode(", ", $paddress);
			$city = ucfirst($towns[count($towns) - 3]);
		}

		if(strpos($city, "(") !== false)
		{
			$city = substr($city, 0, strpos($city, "("));
		}

		$singleData = $roll."***".$name."***".$fname."***".$lname."***".$program."***".$dept."***".$hostel."***".$email."***".$blood."***".$gender."***".$gName."***".$paddress."***".$city."\n";

		echo $singleData."<br>";

		file_put_contents("data.txt", $singleData, FILE_APPEND | LOCK_EX);
	}	
?>

</body>
</html>	