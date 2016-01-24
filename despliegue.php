<?php 
$hora='Actualización del servidor a las '.getdate()['hours'].':'.getdate()['minutes'].':'.getdate()['seconds'];
//$payload = json_decode($POST['payload']);
$payload= $_REQUEST;
echo $hora;

foreach($payload as $p){
$file = fopen("log.txt", "a");
	fwrite($file, $p . PHP_EOL);
	
}
fclose($file); 

/*if($payload->ref=='refs/heads/master'){
	$file = fopen("log.txt", "a");
	fwrite($file, $hora . PHP_EOL);
	fwrite($file, $payload->ref . PHP_EOL);

	fclose($file);
}else{
	$file = fopen("log.txt", "a");
	fwrite($file, $payload->ref . PHP_EOL);
	fclose($file);
}*/
	
?>