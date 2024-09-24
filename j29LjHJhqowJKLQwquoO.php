<?php
$val =$_GET['JK-REV-INC-2024-75883'] ;
$Files = $JK-REV-INC-2024-75883.".pdf ;
header('Content-Disposition: attachment; filename="' .urldecode($files). ' " ');
$fl =fopen($files, r);
while(!feof($fl)){
	echo fread($f1, 8192);
	flush();
}
fclose($f1);
?>
