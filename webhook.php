<?php
    try{
        $file = "/monitor/status.txt";
        $fh = fopen($file,"w");
	foreach($_SERVER as $k=>$p){
	        fwrite($fh,"$k:$p\n");
	}
#	$headers = getallheaders();
#	fwrite($fh, $_SERVER['HTTP_X-Hub-Signature']);
	print_r($_SERVER);
        fclose($fh);
    }
    catch(Exception $e){
        echo "Unable to complete the operation. Sorry about that.";
    }
?>
