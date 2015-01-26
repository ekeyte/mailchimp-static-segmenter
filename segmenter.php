<?php
ini_set('auto_detect_line_endings',TRUE);

/* List Combination Script */
if (isset($argv[1]) && is_writable($argv[1])) {
	$filename = $argv[1];
} else {
	exit("Please supply a filename on the CLI.");
}

$fh = fopen($filename, "r");

// 1. Get columns
$columns = fgetcsv($fh);

// 2. Setup buffer
$emails = array();

// 3. Loop array and buffer names.
while ($row = fgetcsv($fh)) {	
	array_push($emails, $row[0]);
}

// 4. Generate text.
$text = implode(",", $emails);

// 5. Output to a file.
file_put_contents($filename.".txt", $text);

// 6. Tell user it's done if in CLI.
if (defined("STDIN")) echo "\nDone!\n";

// 7. Close file resource.
fclose($fh);
?>