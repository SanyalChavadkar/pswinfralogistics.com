<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the form data
    $honeypot = $_POST['honeypot'];
    $form_type = $_POST['form_type'];
    
    if($form_type == 'contact_form' || $form_type == 'home_form') {
        if (empty($honeypot)) {
            // Gather the form fields
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $service = $_POST['service'];
            $message = $_POST['message'];
    
            // Validate required fields
            if (empty($name) || empty($email) || empty($phone) || empty($service)) {
                echo "error"; // Validation failure
            } else {
                // Construct the email content
                $to = "laynasart27la@gmail.com";
                if($form_type == 'contact_form') {
                    $subject = "PSW Infra Logictics - Contact Form";
                } elseif ($form_type == 'home_form') {
                    $subject = "PSW Infra Logictics - Home Page Form";
                }
    
                $emailContent = '<table border="0"><tr><td><b>Name  :</b></td><td>' . $name . "</td></tr>";
                $emailContent .= '<tr><td><b>Email Id :</b></td><td>' . $email . "</td></tr>";
                $emailContent .= '<tr><td><b>Service :</b></td><td>' . $service . "</td></tr>";
                $emailContent .= '<tr><td><b>Contact Number :</b></td><td>' . $phone . "</td></tr>";
                $emailContent .= '<tr><td><b>Message :</b></td><td>' . $message . "</td></tr></table>";
    
                // Set the email headers
                $headers = "From: PSW Infra Logistics <noreply@pswinfralogistics.com>\r\n";
                $headers .= "CC: pswinfralogistics@gmail.com\r\n";
                $headers .= "MIME-Version: 1.0\r\n";
                $headers .= "Content-type: text/html\r\n";
    
                // Attempt to send the email
                if (mail($to, $subject, $emailContent, $headers)) {
                    echo "success"; // Email sent successfully
                } else {
                    echo "error"; // Email sending failed
                }
            }
        }
    }
}
?>
