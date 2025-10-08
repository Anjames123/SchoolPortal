<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars(trim($_POST['name']));
    $email = trim($_POST['email']);
    $subject = htmlspecialchars(trim($_POST['subject']));
    $message = htmlspecialchars(trim($_POST['message']));
    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: index.php?status=invalid_email");
        exit();
    }
    
    $name = str_replace(["\r", "\n"], '', $name);
    $email = str_replace(["\r", "\n"], '', $email);
    $subject = str_replace(["\r", "\n"], '', $subject);
    $message = str_replace(["\r", "\n"], ' ', $message);
    
    $to = "info@greaterseedsacademy.edu.ng";
    $email_subject = "Contact Form: " . $subject;
    $email_body = "Name: $name\n";
    $email_body .= "Email: $email\n\n";
    $email_body .= "Message:\n$message\n";
    
    $headers = "From: noreply@greaterseedsacademy.edu.ng\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();
    
    if (mail($to, $email_subject, $email_body, $headers)) {
        header("Location: index.php?status=success");
    } else {
        header("Location: index.php?status=error");
    }
    exit();
}
?>
