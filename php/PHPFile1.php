<?php 
	
	$f = fopen("data.txt", "a");
	var_dump($f);

	fwrite($f, "abc");

	fclose($f);

	$f = fopen("data.txt", "r");
	$fr = fread($f, 6);
	echo $fr;
	fclose($f);

?>