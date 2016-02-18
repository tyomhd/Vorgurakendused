<?php
	
		$file = 'count.txt';
		// Open the file to get existing content
		$current = file_get_contents($file);
		

		//print $current;

		$current = $current + 1;
		
		//print $current;


		// Write the contents back to the file
		file_put_contents($file, $current);

		echo "Lehe külastuse arv on: " . $current;
?>
