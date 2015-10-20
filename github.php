<?php
	require_once("./login.php");

	$LOCAL_DIR ="/var/www/your_dir";
	$str="https://".$USER.":".$PASS."@github.com/git_username/repo_name";
	$act="default_user";
	$flname=basename(__FILE__, '');
	
	include("./exec_log.php");	
?>
