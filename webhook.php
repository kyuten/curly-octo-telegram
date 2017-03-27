<?php
    try{
        $file = "/monitor/status.txt";
        $fh = fopen($file,"w");
	foreach($_REQUEST as $k=>$p){
	        fwrite($fh,"$k:$p\n");
	}
#	$headers = getallheaders();
#	fwrite($fh, $headers['X-Hub-Signature']);
        fclose($fh);
    }
    catch(Exception $e){
        echo "Unable to complete the operation. Sorry about that.";
    }
?>
