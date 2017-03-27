<?php
    try{
        $file = "/monitor/status.txt";
        $fh = fopen($file,"w");
	foreach($_POST as $k=>$p){
	        fwrite($fh,"$k:$p\n");
	}
        fclose($fh);
    }
    catch Exception($e){
        echo "Unable to complete the operation. Sorry about that.";
    }
?>
