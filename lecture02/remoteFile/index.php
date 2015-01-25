<?php
	$file = fopen("https://wordpress.org/plugins/about/readme.txt", "r");
	$data = '';
	if (!$file) {
		echo "<p>Unable to open remote file.\n";
		exit;
	}
	//while (!feof ($file)) {
		$line = fgets ($file, 1024);
		$data .= $line . '<br>';
	//}
	echo 'The first line of readme.txt: <br><br>';
	echo $data;
	fclose($file);