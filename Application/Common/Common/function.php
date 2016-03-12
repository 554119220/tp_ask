<?php
function password($passwd){
 return md5($passwd);   
}

function addlog($log,$name=false){
	$Model = M('log');
	if(!$name){
		$user = cookie('ask_user');
		$data['user_name'] = $user['user'];
	}else{
		$data['user_name'] = $name;
	}
	$data['t'] = time();
	$data['ip'] = $_SERVER["REMOTE_ADDR"];
	$data['log'] = $log;
	$Model->data($data)->add();
}
?>
