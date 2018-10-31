<html>
<head>
	<title>Student Search</title>
</head>
<body>
<?php

	$content = file_get_contents("data.txt");

	$singledata = explode("\n", $content);

	for($i=0; $i<count($singledata); $i++)
	{
		$data = explode("***", $singledata[$i]);
		
		$roll = $data[0];
		$name = $data[1];
		$program = $data[2];
		$predept = $data[3];
		
		if($predept == "Materials science & engineerin"){$dept = "MSE";}
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

		$address = $data[4];
		$premail = $data[5];
		if(strpos($premail, "iitk.ac.in") === false)
		{
			$email = "Not Available";
		}
		else
		{
			$email = substr($premail, 0, strpos($premail, "@"));
		}
		$blood = $data[6];
		$pregender = $data[7];
		if($pregender == "M"){$gender = "Male";}
		if($pregender == "F"){$gender = "Female";}
		$townaddr = $data[9];
		if($townaddr == "Not available")
	{
		$city = "Not Available";
	}
	else
	{
		$towns = explode(", ", $townaddr);
		$city = ucfirst($towns[count($towns) - 3]);
	}
		
		echo $name."-".$roll."-".$program."-".$dept."-".$address."-".$email."-".$blood."-".$gender."-".$city."<br>";
}

?>

</body>

</html>