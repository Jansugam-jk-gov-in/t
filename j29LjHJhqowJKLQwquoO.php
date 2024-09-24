<?php
$val =$_GET['JK-REV-INC_2024_75883'] ;
$Files = $JK-REV-INC_2024_75883.".pdf ;
header('Content-Disposition: attachment; filename="' .urldecode($files). ' " ');
$fl =fopen($files, r);
while(!feof($fl)){
	echo fread($f1, 8192);
	flush();
}
fclose($f1);
?>
