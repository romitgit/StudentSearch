<?php

include 'ip.php';

function getImageUrl($roll)
{
	$file = 'http://oa.cc.iitk.ac.in:8181/Oa/Jsp/Photo/".$roll."_0.jpg';

	$handle = @fopen($file,'r');
	if($handle !== false)
	{
	   return $file = "<img src='http://oa.cc.iitk.ac.in:8181/Oa/Jsp/Photo/".$roll."_0.jpg' width='120px' height='154px'>";
	}
	else
	{
	   return $file = "<img src='http://home.iitk.ac.in/~romit/studentsearch/na.gif' width='140px' height='180px'>";
	}
}
	
function getImageUrlFront($fbid,$roll)
{
	$file = 'http://oa.cc.iitk.ac.in:8181/Oa/Jsp/Photo/".$roll."_0.jpg';

	$handle = @fopen($file,'r');
	if($handle !== false)
	{
	   return $file = "<img src='http://oa.cc.iitk.ac.in:8181/Oa/Jsp/Photo/".$roll."_0.jpg' width='60px' height='60px'>";
	}
	else
	{
	   return $file = "<img src='http://home.iitk.ac.in/~romit/studentsearch/na.gif' width='60px' height='60px'>";
	}
}	 

function getImageGroup($roll)
{
	$file = 'http://oa.cc.iitk.ac.in:8181/Oa/Jsp/Photo/".$roll."_0.jpg';

	$handle = @fopen($file,'r');
	if($handle !== false)
	{
	   return $file = "<img src='http://oa.cc.iitk.ac.in:8181/Oa/Jsp/Photo/".$roll."_0.jpg' width='120px' height='154px'>";
	}
	else
	{
	   return $file = "<img src='http://home.iitk.ac.in/~romit/studentsearch/na.gif' width='120px' height='154px'>";
	}
}	 

function getImageGrps($fbid,$roll)
{
	return $file = 	"<img src='http://oa.cc.iitk.ac.in:8181/Oa/Jsp/Photo/".$roll."_0.jpg' width='120px' height='120px'>";
}	 

function getImageSuggest($roll)
{
	$file = 'http://oa.cc.iitk.ac.in:8181/Oa/Jsp/Photo/".$roll."_0.jpg';

	$handle = @fopen($file,'r');
	if($handle !== false)
	{
	   return $file = "<img src='http://oa.cc.iitk.ac.in:8181/Oa/Jsp/Photo/".$roll."_0.jpg' width='100px' height='100px'>";
	}
	else
	{
	   return $file = "<img src='http://home.iitk.ac.in/~romit/studentsearch/na.gif' width='100px' height='100px'>";
	}
}


?>
