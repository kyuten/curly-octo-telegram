<?php
    try{
        $file = "/monitor/status.txt";
        $fh = fopen($file,"w");
#	foreach($_REQUEST as $k=>$p){
#	        fwrite($fh,"$k:$p\n");
#	}
#	$headers = getallheaders();
	fwrite($fh, $_SERVER['HTTP_X-Hub-Signature']);
        fclose($fh);
    }
    catch(Exception $e){
        echo "Unable to complete the operation. Sorry about that.";
    }
?>
