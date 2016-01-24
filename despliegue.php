<?php 
$hora='Actualización del servidor a las '.getdate()['hours'].':'.getdate()['minutes'].':'.getdate()['seconds'];
echo $hora;
//if(json_decode($_POST['payload'])->ref=='refs/heads/master'){

	$file = fopen("log.txt", "a");
	fwrite($file, $hora . PHP_EOL);
	fclose($file);

	shell_exec('touch log.txt');
	shell_exec('echo'.$hora.'  >> log.txt');
	shell_exec('echo '.print_r($_POST).'  >> despliegue.php');
//}
?>