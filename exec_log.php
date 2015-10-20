<?php
   if(isset($_POST['payload']))
		$act="Git_trigger";
	else
		$act="root_user";

	$response=shell_exec("cd ".$LOCAL_DIR." && git pull ".$str);

	$ts= date("Y-m-d H:i:s");
	$report= $ts." Page-".$flname." Invoker-".
			 $act." ".$response."\n";
	file_put_contents ( "_HOOK_LOG.txt",$report,FILE_APPEND);

	echo "Push Recieved Successfully";
?>