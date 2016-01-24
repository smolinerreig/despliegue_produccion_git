<?php 
$pay=json_decode($_POST['payload']);
if($pay && $pay->ref=='refs/heads/master'){
	
	shell_exec('touch log.txt');
}
?>