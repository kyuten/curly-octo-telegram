<?php
    $secret = "Test1";
    try{
$signature = $_SERVER['HTTP_X-HUB-SIGNATURE'];
list($algo, $hash) = explode('=', $signature, 2);
$payload = file_get_contents('php://input');
$payloadHash = hash_hmac($algo, $payload, $secret);


        $file = "/monitor/status.txt";
        $fh = fopen($file,"w");
	fwrite($fh, $_SERVER['HTTP_X_HUB_SIGNATURE']."\n");
	fwrite($fh, $payloadHash);
        fclose($fh);
    }
    catch(Exception $e){
        echo "Unable to complete the operation. Sorry about that.";
    }
?>
