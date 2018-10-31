<?php // search.php 

//require 'ip.php';
include_once 'connect.inc.php';




if (isset($_POST['search'])) 
{    
	$search = $_POST['search'];  

	$data = file_get_contents("data.txt");
	$dataArr = explode("\n", $data);
	$hints = "";

	foreach($dataArr as $singleData)
	{
		$singleDataArr = explode("***", $singleData);
		if(strtolower($search) === strtolower(substr(@$singleDataArr[2], 0, strlen($search))) || strtolower($search) === strtolower(substr(@$singleDataArr[3], 0, strlen($search))) || strtolower($search) === strtolower(substr(@$singleDataArr[1], 0, strlen($search))))
		{
			if($hints == "")
			{
				$hints.=$singleData;	
			}
			else
			{
				$hints = $hints."\n".$singleData;
			}
			
		}
	}		
		
		
		
	if($hints != "")
	{
		$hintData = explode("\n", $hints);
		echo "<h1 style='background:white;color:black;margin-bottom:20px;box-shadow:0px 0px 1px grey;'>Search Suggestions</h1>";
		for($j=0;$j<count($hintData);++$j)
		{
			$singleHintData = explode("***", $hintData[$j]);
			$url = getImageSuggest($singleHintData[0]);
			$batch = "y".substr($singleHintData[0], 0, 2);
					
			echo 	
				"<div id='singleimage'  style='display:inline-block;margin:10px;background:white;box-shadow:0px 0px 2px grey;border:5px solid white;'>
						<a href='profile.php?view=$singleHintData[0]'  title='$singleHintData[1]\n$singleHintData[0]' style='color:black;text-decoration:none;'>
							$url<hr style='margin-top:0px;'>
							<div style='margin:0px auto;background:white;font-size:13px;'>$singleHintData[1]<br>$batch&nbsp;&nbsp;$singleHintData[5]</div>
						</a>
				</div>";
				   
		}
}

}				   
?>