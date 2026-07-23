<?php

$file = "php/contador/count_data.txt";

$EXPIRE_DATE = 86400;

if (file_exists($file)) {

	$fp = fopen("$file", "r+");
	flock($fp, 1);
	$count = fgets($fp, 4096);
	if ($visited == "") {
		$count += 1; 
		setcookie("visited", $count, time()+$EXPIRE_DATE , "/", $SERVER_NAME);
		fseek($fp,0);
		fputs($fp, $count);
	}
	flock($fp, 3);
	fclose($fp);
} else {

	echo "Can't find file, check '\$file' var...<BR>";
}

?>
<?php echo $count ?>