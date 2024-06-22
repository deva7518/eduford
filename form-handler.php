<?php
$name = $-post['name'];
$visitor-email = $_post['email'];
$subject = $_post['subject'];
$message = $_post['message'];

$email_form = 'jdfhsifus@gmail.com';

$email_subject = 'New Form Submission';

$emial_body = "User Name: $name.\n".
              "User Email: $visitor_email.\n".
               "Subject: $subject.\n".
                "User Message: $message.\n";

$to = 'ds7518241575@gmail.com';

$header = "From: $email_from \r\n";

$header .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("LOcation: contact.html");


?> 
