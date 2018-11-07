<?php
$user = $_POST['userName'];
$pass = $_POST['pass'];
if($user=='root'){
	echo json_encode('oj8k');
}else{
	echo json_encode('666');
}
exit;
?>