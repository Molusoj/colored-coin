<?php


if (isset($_POST['submit'])) {
    $name = $_POST['contact-name'];
    $subject = $_POST['contact-subject'];
    $emailFrom = $_POST['contact-email'];
    $message = $_POST['contact-message'];


    $mailTo = "hello@ColouredKoin.com";
    $headers = "From:".$emailFrom;
    $txt = "You have received an email from ".$name.".\n\n".$message;



    mail($mailTo, $subject,  $txt, $headers);

    header("Location:index.html");

}

?>