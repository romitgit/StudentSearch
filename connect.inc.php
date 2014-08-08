<?php

// $mysql_host = "mysql.hostinger.in";
// $mysql_user = "u936162527_ss";
// $mysql_pass = "12345678romit";

// $mysql_db = "u936162527_ss";

// mysql_connect($mysql_host,$mysql_user,$mysql_pass) or die("Could not connect to MySQL : ".mysql_error());
// mysql_select_db($mysql_db) or die("Could not connect to Database : ".mysql_error());



function getImageUrl($roll)
{
	return $url = 	"<img src='http://oa.cc.iitk.ac.in:8181/Oa/Jsp/Photo/".$roll."_0.jpg' width='140px' height='180px'>";	
}
	
function getImageUrlFront($fbid,$roll)
{
	return $url = 	"<img src='http://oa.cc.iitk.ac.in:8181/Oa/Jsp/Photo/".$roll."_0.jpg' width='60px' height='60px'>";
}	 

function getImageGroup($roll)
{
	return $url = 	"<img src='http://oa.cc.iitk.ac.in:8181/Oa/Jsp/Photo/".$roll."_0.jpg' width='120px' height='154px'>";
}	 

function getImageGrps($fbid,$roll)
{
	return $url = 	"<img src='http://oa.cc.iitk.ac.in:8181/Oa/Jsp/Photo/".$roll."_0.jpg' width='120px' height='120px'>";
}	 

function getImageSuggest($roll)
{
	return $url = 	"<img src='http://oa.cc.iitk.ac.in:8181/Oa/Jsp/Photo/".$roll."_0.jpg' width='100px' height='100px'>";
}


?>