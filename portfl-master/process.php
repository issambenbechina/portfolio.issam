<?php

   if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST["nom"];
    $email = $_POST["mail"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];
    $header="MIME-Version: 1.0\r\n";
		$header.='From:"PrimFX.com"<support@primfx.com>'."\n";
		$header.='Content-Type:text/html; charset="uft-8"'."\n";
		$header.='Content-Transfer-Encoding: 8bit';

    $to = "issam.benbechina11@gmail.com";
    $subject = "You have a message.";
    $body = "Here is what was sent:\r\n";
    mail($to, $subject, $body,$header);
}

    

    foreach($fields as $a => $b){$body .= $b." : ".$_REQUEST[$a]."\r\n"; }
     

    
    // $from = $_REQUEST['email'];
    // $name = $_REQUEST['name'];
    // $headers = "From: $from";
    


    

?>