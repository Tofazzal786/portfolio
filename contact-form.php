<?php

    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];


    $email_from = "wevdesign@gmail.com";
    $email_Subject = "Email from my website";

    $email_body = "User Name: $name.\n".
                    "User Email: $visitor_email.\n".
                            "User Message: $message.\n";

    
    $to = "tusartofazzal@gmail.com";

    $headers = "From: $email_from \r\n";

    $headers = "Reply_To: $visitor_email \r\n";

    mail($to, $email_Subject, $email_body, $headers);

    header("Location: index.html");




?> 