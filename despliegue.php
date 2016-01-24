<?php 
$hora='Actualización del servidor a las '.getdate()['hours'].':'.getdate()['minutes'].':'.getdate()['seconds'];
$payload = json_decode($_POST)[0];
echo $hora;
if($payload->ref && $payload->ref=='refs/heads/master'){
	$file = fopen("log.txt", "a");
	fwrite($file, $hora . PHP_EOL);
	fwrite($file, $payload . PHP_EOL);
	fclose($file);
	shell_exec('./PUESTA_EN_PRODUCCION.sh');
}else{
	$file = fopen("log.txt", "a");
	fwrite($file, $hora . PHP_EOL);
	fwrite($file, $payload . PHP_EOL);
	fclose($file);
}
	
?>