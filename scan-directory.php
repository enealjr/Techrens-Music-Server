<?PHP

	/* Scan the directory and print out the files */

	//Directory to be scanned
	$directory = '/var/www/html/Techrens-Music-Server';

	//Results put into a array excluding ..
	$scanned_directory = array_diff(scandir($directory), array('..', '.'));

	//Output the array for debugging purposes
	//print_r($scanned_directory);

	//Loop through the array and output the name of the files
	foreach ($scanned_directory as $value) {
     echo $value . "<br />";
	}

?>
