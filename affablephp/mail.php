<?php
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Headers: *");
    header("Access-Control-Allow-Methods: GET, POST, OPTIONS");

    $postdata = file_get_contents("php://input", true);
    $req = json_decode($postdata);
    echo $_POST['fname'];
    // print $req;
    $from = $_POST['email'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $contact = $_POST['phone'];
    $company = $_POST['company'];
    $subject = 'Web Enquiry';
    $message = $_POST['message'];
    
    $eol = "\r\n";
    $separator = md5(time());

    $to = "innovizqatar@gmail.com";
    $body = "";
    $body .= "Content-Type: text/plain; charset=\"iso-8859-1\"" . $eol;
    $body .= "Content-Transfer-Encoding: 8bit" . $eol;
    $body .= "Name:- ".$fname." ".$lname."\r\n\n";
    $body .= "Contact Number:- ".$contact."\r\n\n";
    $body .= "Email:- ".$from."\r\n\n";
    $body .= "Message: ".$message."\r\n\n";

    $fromname ="Innoviz Systems";
    $fromemail = 'enquiry@innovizqatar.com';
    
    $headers = "From: ".$fromname." <".$fromemail.">" . $eol;
    $headers .= "(This is an enquiry mail)." . $eol;
     
    if (mail($to, $subject, $body, $headers)) {
        echo "Thank you for reaching out to Affable Infotech. "; // do what you want after sending the email
        $replybody = "";
        $replybody .= "Dear ".$fname." ".$lname.",\r\n\n";
        $replybody .= "Greetings! \r\n\n";
        $replybody .= "Thank you for reaching out to Affable Infotech.. \r\n\n"; 
        $replybody .= "This is a confirmation that we have received your enquiry for ".$service.".\r\n\n"; 
        $replybody .= "We will review your enquiry shortly and will be in touch no time.\r\n\n"; 
        $replybody .= "Regards, \r\n\n";
        $replybody .= "Affable Infotech\r\n\n"; 

        $replyfrom ="Affable Infotech";
        $replymail = 'noreply@innovizqatar.com';

        $headers = "From: ".$replyfrom." <".$replymail.">" . $eol;
        $headers .= "(This is an auto-generated mail. Please do not reply)." . $eol;
        mail($from, $subject, $replybody, $headers);
        header('Location: contact.in.php?msg=sent successfully');
    } else {
        echo "Something went wrong!";
        header('Location: contact.in.php');
    }
?>