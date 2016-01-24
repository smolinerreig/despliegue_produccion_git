<?php 
$hora='Actualización del servidor a las '.getdate()['hours'].':'.getdate()['minutes'].':'.getdate()['seconds'];
echo $hora;

if(json_decode($_POST['payload'])->ref=='refs/heads/master'){
	$file = fopen("log.txt", "a");
	fwrite($file, $hora . PHP_EOL);
	fclose($file);
}else{
	$file = fopen("log.txt", "a");
	fwrite($file, 'El webhook ha fallado.' . PHP_EOL);
	fclose($file);
}
	
?>