<?php 
if(isset($POST['submit'])){
    $to = "williamsjpoms.6a@gmail.com"; // this is your Email address
    $from = $POST['email']; // this is the sender's Email address
    $first_name = "Ryley";
    $last_name = "Jenkins";
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $POST['message'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    echo "Mail Sent. Thank you " . $first_name . ", I'll contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.
    }
?>
