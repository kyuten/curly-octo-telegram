<?php
    try{
        $file = "/monitor/status.txt";
        $fh = fopen($file,"w");
        fwrite($fh,microtime());
        fclose($fh);
    }
    catch Exception($e){
        echo "Unable to complete the operation. Sorry about that.";
    }
?>
