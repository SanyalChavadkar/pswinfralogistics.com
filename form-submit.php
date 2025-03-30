<?php
ini_set('log_errors', 1);
ini_set('error_log', 'php-error.log');  // Log errors to this file


// Check if the form is submitted
if (isset($_POST['homesubmit'])) {

    // Debug: Output the POST data to ensure it's being sent correctly
    error_log("Form Submitted. POST Data: " . print_r($_POST, true));  // Log POST data

    // Initialize the honeypot field
    $honeypot = isset($_POST['honeypot']) ? $_POST['honeypot'] : '';

    // Ensure honeypot is empty (prevents bot submissions)
    if (empty($honeypot)) {

        // Retrieve and sanitize each POST value to ensure they are properly assigned
        $name = isset($_POST['name']) ? htmlspecialchars(trim($_POST['name'])) : '';
        $email = isset($_POST['email']) ? filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL) : '';
        $phone = isset($_POST['phone']) ? htmlspecialchars(trim($_POST['phone'])) : '';
        $service = isset($_POST['service']) ? htmlspecialchars(trim($_POST['service'])) : '';
        $message = isset($_POST['message']) ? htmlspecialchars(trim($_POST['message'])) : '';

        // Debug: Check the sanitized values of variables
        error_log("Name: " . $name);
        error_log("Email: " . $email);
        error_log("Phone: " . $phone);
        error_log("Service: " . $service);
        error_log("Message: " . $message);

        // Validate the required fields
        if (empty($name) || empty($email) || empty($phone) || empty($service)) {
            // If any required field is empty, return a JSON response with failure message
            echo json_encode(['status' => 'failure', 'message' => 'All fields are required.']);
            exit; // Ensure script stops execution after sending the response
        } else {
            // Send the email if the form is valid
            $to = "laynasart27la@gmail.com";
            $subject = "PSW Infra Logistics - Leave Us a Message Form";

            $email_message = '<table border="0"><tr><td><b>Name  :</b></td><td>' . $name . "</td></tr>";
            $email_message .= '<tr><td><b>Email Id :</b></td><td>' . $email . "</td></tr>";
            $email_message .= '<tr><td><b>Service :</b></td><td>' . $service . "</td></tr>";
            $email_message .= '<tr><td><b>Contact Number :</b></td><td>' . $phone . "</td></tr>";
            $email_message .= '<tr><td><b>Message :</b></td><td>' . $message . "</td></tr></table>";

            $headers = "From: Leave us a Message - PSW Infra Logistics <noreply@uat.pswinfralogistics.com> \r\n";
            $headers .= "CC:pswinfralogistics@gmail.com \r\n";
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-type: text/html\r\n";

            // Attempt to send the email and check if it's successful
            if (mail($to, $subject, $email_message, $headers)) {
                echo json_encode(['status' => 'success', 'message' => 'Thank you! Your message has been sent successfully.']);
            } else {
                error_log("Mail sending failed.");  // Log the mail failure
                echo json_encode(['status' => 'failure', 'message' => 'Message could not be sent. Please try again later.']);
            }
        }
    } else {
        // If honeypot is not empty, prevent the form from being processed (possible bot submission)
        echo json_encode(['status' => 'failure', 'message' => 'Honeypot field detected, form submission prevented.']);
    }

    exit; // End the script here
}
?>