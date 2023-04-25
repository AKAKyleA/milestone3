<?php
header("Content-Type: application/json");
$response = array();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "marmorahardware@truevalue.net";
    $subject = "New Contact Form Submission";
    $body = "First Name: " . $first_name . "\n";
    $body .= "Last Name: " . $last_name . "\n";
    $body .= "Email: " . $email . "\n\n";
    $body .= "Message:\n" . $message;

    $headers = "From: " . $email . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();

    if (mail($to, $subject, $body, $headers)) {
        $response["status"] = "success";
        $response["message"] = "Thank you! Your message has been sent.";
    } else {
        $response["status"] = "error";
        $response["message"] = "Oops! Something went wrong. Please try again.";
    }
    echo json_encode($response);
}
?>
