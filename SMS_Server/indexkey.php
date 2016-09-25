<?php
if($_POST["key"]){
	$myfile = fopen("sessionKey.txt", "w+");
	fwrite($myfile, $_POST["key"]);
	fclose($myfile);
	//composer require guzzlehttp/guzzle
	//
	$cmd='echo "your code is '.$_POST["key"].'" | gammu-smsd-inject TEXT +841227527247';
	exec($cmd);
}

?>
