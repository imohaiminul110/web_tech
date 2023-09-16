<?php
	
	$f = fopen("data.json", 'r');

	$s = fread($f, filesize("data.json"));

	$data = json_decode($s);
	var_dump($s);

	echo "<hr><hr>";
	var_dump($data);

	echo "<hr><hr>";

	echo $data->firstname . ' ' . $data->lastname;

	echo "<table border=1>";
	echo "<tr>";
	echo "<th>Firstname</th>";
	echo "<th>LastName</th>";
	echo "</tr>";
	
	echo "<tr>";
	echo "<td>" . $data->firstname . "</td>";
	echo "<td>" . $data->lastname . "</td>";
	echo "</tr>";
	echo "</table>";
	

	fclose($f);
?>