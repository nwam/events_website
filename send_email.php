Thanks, 
<?php
@extract($_POST);
$sub="New Client from Webform";
$firstname = stripslashes($firstname);
$lastname = stripslashes($lastname);
$email = stripslashes($email);  
$phone = stripslashes($phone);
$message = stripslashes($message);

mail('noahmurad@hotmail.com', $sub, "$message", "From $firstname $lastname <noahmurad@hotmail.com>");
/*
    "Someone has sent you a message via your website's form.\n\n
    Name=$firstname $lastname\n
    Email=$email\n
    Phone=$phone\n
    Message=$message", 
      "From: $name <noahmurad@hotmail.com>");
 */
?>
your message has been sent to us.
