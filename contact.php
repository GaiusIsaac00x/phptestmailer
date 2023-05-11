<?php
    if (isset ($_POST['submit'])) {
        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $subject = trim($_POST['subject']);
        $message = trim($_POST['message']);

        $myMail = "isaacgaius1999@gmail.com";
        $header = "From: Admin@Drive Equity.com" ;
        $message2 = "You have received a message from " . "Admin@Drive Equity" . ". \n\n" . $message;

        //email has some parameters
        //1. E-mail you're sending to
        //2. Subject
        //3. Message
        mail($myMail, $subject, $message2, $header);
        header("Location: index.php?mailsend");
    }

    // trim removes all the whitespaces

?>