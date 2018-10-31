<?php

include 'ip.php';

function getImageUrl($roll)
{
	return $file = "<img src='http://oa.cc.iitk.ac.in:8181/Oa/Jsp/Photo/".$roll."_0.jpg' width='200px' height='245px'>";
}
	
function getImageUrlFront($fbid,$roll)
{
	return $file = "<img src='http://oa.cc.iitk.ac.in:8181/Oa/Jsp/Photo/".$roll."_0.jpg' width='60px' height='60px'>";
}	 

function getImageGroup($roll)
{
	return $file = "<img src='http://oa.cc.iitk.ac.in:8181/Oa/Jsp/Photo/".$roll."_0.jpg' width='120px' height='154px'>";
}	 

function getImageGrps($fbid,$roll)
{
	return $file = 	"<img src='http://oa.cc.iitk.ac.in:8181/Oa/Jsp/Photo/".$roll."_0.jpg' width='120px' height='120px'>";
}	 

function getImageSuggest($roll)
{
	return $file = "<img src='http://oa.cc.iitk.ac.in:8181/Oa/Jsp/Photo/".$roll."_0.jpg' width='100px' height='100px'>";
}


?>
