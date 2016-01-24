<?php 
$hora='Actualización del servidor a las '.getdate()['hours'].':'.getdate()['minutes'].':'.getdate()['seconds'];
$payload = json_decode($_POST['payload']);

echo $hora;

if($payload->ref && $payload->ref=='refs/heads/master'){
	$file = fopen("log.txt", "a");
	fwrite($file, $hora . PHP_EOL);
	fwrite($file, $payload->ref . PHP_EOL);
	fclose($file);
}else{
	$file = fopen("log.txt", "a");
	fwrite($file, $payload->ref . PHP_EOL);
	fclose($file);
}
	
?>