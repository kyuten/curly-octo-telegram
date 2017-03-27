<?php
    $secret = "Test1";
    try{
	$signature = $_SERVER['HTTP_X-HUB-SIGNATURE'];
        $payload = file_get_contents('php://input');
        list($algo, $hash) = explode('=', $signature, 2);
        $file = "/monitor/status/status.txt";
        $fh = fopen($file,"w");
        fwrite($fh, microtime());
        fclose($fh);
        $file = "/monitor/sig.txt";
        $fh = fopen($file,"w");
        fwrite($fh, $signature);
        fclose($fh);
        $file = "/monitor/payload.txt";
        $fh = fopen($file,"w");
        fwrite($fh, $payload);
        fclose($fh);
        $file = "/monitor/algo.txt";
        $fh = fopen($file,"w");
        fwrite($fh, $algo);
        fclose($fh);
    }
    catch(Exception $e){
        echo "Unable to complete the operation. Sorry about that.";
    }
?>
