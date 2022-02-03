<?php

    include("config.php");

    $client = $_POST['client'];
    $message = $_POST['mailtext'];
 
    $subject = "Your query related to Shree cottages!!";

    // Always set content-type when sending HTML email
    $headers =  'MIME-Version: 1.0' . "\r\n"; 
    $headers .= 'From: jonsnow@150601@gmail.com' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";        

    if(mail($client,$subject,$message,$headers)){
        echo "Mail sent successfully!!";        
    }else{
        echo "Error while sending mail";
    }

?>