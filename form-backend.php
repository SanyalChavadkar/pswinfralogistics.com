
   <?php
    //   if(isset($_POST['homesubmit'])) {
    //      $honeypot = $_POST['honeypot'];
    //      if (empty($honeypot)) {
    //         $name = $_POST['name'];
    //         $email = $_POST['email'];
    //         $phone = $_POST['phone'];
    //         $service = $_POST['service'];
    //         // $enquiry = $_POST['enq_for'];
    //         $message = $_POST['message'];

    //         //if ((empty($_POST['name'])) || (empty($_POST['email'])) || (empty($_POST['contact'])) || (empty($_POST['message'])))
    //         if ((empty($_POST['name'])) || (empty($_POST['email'])) || (empty($_POST['phone'])) || (empty($_POST['service']))) {
    //           echo "<script>sweetAlert('All Fields are required...!');</script>";
    //         } else {
    //           $to = "laynasart27la@gmail.com";
    //           $subject = "PSW Infra Logictics - Leave Us a Message Form";

    //           $message = '<table border="0"><tr><td><b>Name  :</b></td><td>' .$_POST['name']."</td></tr>";
    //           $message .= '<tr><td><b>Email Id :</b></td><td>' .$_POST['email'] ."</td></tr>";
    //           $message .= '<tr><td><b>Service :</b></td><td>' .$_POST['service'] ."</td></tr>";
    //           $message .= '<tr><td><b>Contact Number :</b></td><td>' .$_POST['phone'] ."</td></tr>";
    //           $message .= '<tr><td><b>Message :</b></td><td>' .$_POST['message'] ."</td></tr></table>";

    //           $header = "From: Leave us a Message - PSW Infra Logistics <noreply@uat.pswinfralogistics.com> \r\n";
    //         //   $header .= "CC:pswinfralogistics@gmail.com \r\n";
    //           $header .= "MIME-Version: 1.0\r\n";
    //           $header .= "Content-type: text/html\r\n";

    //           if(mail ($to,$subject,$message,$header)) {
    //               // echo "<script>sweetAlert('Thank you ! <br> Message sent successfully.<br>We will get back to you soon.');</script>";
    //               // echo "<script>alert('Thank you ! <br> We will get back to you soon.');</script>";
    //               echo '<script>
    //                  var container_video = $("#container-vid")[0];
    //                  container_video.play();
    //               </script>';
    //           } else {
    //               echo "<script>sweetAlert('Message could not be sent...');</script>";
    //               //header("location:contact-us.php");
    //               // echo "<script>alert('Message could not be sent...');</script>";
    //           }
    //         }
    //      }
    //   }
    
    
    // if(isset($_POST['homesubmit'])) {
    //     $honeypot = $_POST['honeypot'];
    //     if (empty($honeypot)) {
    //         $name = $_POST['name'];
    //         $email = $_POST['email'];
    //         $phone = $_POST['phone'];
    //         $service = $_POST['service'];
    //         $message = $_POST['message'];
    
    //         if (empty($name) || empty($email) || empty($phone) || empty($service)) {
    //             echo "error";
    //         } else {
    //             // Email preparation
    //             $to = "laynasart27la@gmail.com";
    //             $subject = "PSW Infra Logistics - Leave Us a Message Form";
    
    //             $htmlMessage = '<table border="0"><tr><td><b>Name  :</b></td><td>' . $_POST['name'] . "</td></tr>";
    //             $htmlMessage .= '<tr><td><b>Email Id :</b></td><td>' . $_POST['email'] . "</td></tr>";
    //             $htmlMessage .= '<tr><td><b>Service :</b></td><td>' . $_POST['service'] . "</td></tr>";
    //             $htmlMessage .= '<tr><td><b>Contact Number :</b></td><td>' . $_POST['phone'] . "</td></tr>";
    //             $htmlMessage .= '<tr><td><b>Message :</b></td><td>' . $_POST['message'] . "</td></tr></table>";
    
    //             $header = "From: Leave us a Message - PSW Infra Logistics <noreply@uat.pswinfralogistics.com> \r\n";
    //             $header .= "MIME-Version: 1.0\r\n";
    //             $header .= "Content-type: text/html\r\n";
    
    //             // Send email
    //             if (mail($to, $subject, $htmlMessage, $header)) {
    //                 echo "success";  // Send a success response to the AJAX request
    //             } else {
    //                 echo "error";  // Send an error response if the mail didn't send
    //             }
    //         }
    //     }
    // }
   ?>