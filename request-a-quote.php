<!DOCTYPE html>
<html lang="en">
   <head>
      <?php include("head.php"); ?>
      <title>Request A Quote | PSW</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta property="og:title" content="Request A Quote | PSW">
      <meta property="og:description" content="">
      <meta property="og:url" content="">
      <meta property="og:image" content="https://uat.pswinfralogistics.com/images/favicon.jpg">
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.6.6/jquery.fullPage.css">
   </head>
   <body class="about-page">
      <?php include("header.php"); ?>
      <div class="main-wrapper" id="request">
         <section class="page-container">
            <div class="container-fluid">
               <div class="row flex-nowrap">
                  <div class="sidebar" id="sidebar">
                     <div id="sticky-sidebar">
                        <a href="index.php">
                           <img src="images/arrow_circle_left.svg" class="img-fluid" alt="back arrow">
                           Request A Quote
                        </a>
                     </div>
                  </div>
                  <div class="req-form-wrapper mid-line">
                     <div class="section vh-100">
                        <div class="section-title">
                           <h4 class="f-semibold">Need a quote for the services!</h4>
                        </div>
                        <div id="request-content">
                           <p>Need dependable, cost effective transportation of your commodities? Fill out our easy Quote Request <br>Form below to get a fast quote.</p>
                           <div class="req-top-btns">
                              <p>Connect with us directly on</p>
                              <a href="mailto:pswinfralogistics@gmail.com"><img src="images/req-email-icon.svg" class="img-fluid" alt="email icon">pswinfralogistics@gmail.com</a>
                              <a href="tel:+91 74000 66629"><img src="images/req-call-icon.svg" class="img-fluid" alt="call icon">+91 74000 66629</a>
                           </div>
                        </div>
                        <div class="req-form-wrapp">
                           <ul class="nav nav-tabs d-flex justify-content-between border-0" id="myTab" role="tablist">
                              <li class="nav-item" role="presentation">
                                 <a class="nav-link active f-semibold border-0" href="#first-tab" role="tab"><span>1</span> <p>Personal Details</p></a>
                              </li>
                              <li class="nav-item" role="presentation">
                                 <a class="nav-link f-semibold border-0" href="#second-tab" role="tab"><span>2</span> <p>Select Service Category</p></a>
                              </li>
                              <li class="nav-item" role="presentation">
                                 <a class="nav-link f-semibold border-0" href="#third-tab" role="tab"><span>3</span> <p>Transportation Details</p></a>
                              </li>
                           </ul>
                           <form action="" method="post" id="contact-form" enctype="multipart/form-data">
                              <input type="text" name="honeypot" hidden value="" class="d-none">
                              <div class="tab-content" id="myTabContent">
                                 <div class="tab-pane show active" id="first-tab" role="tabpanel">
                                    <h5>Personal Details</h5>
                                    <div class="row mx-0">
                                       <div class="col-md-6">
                                          <div class="form-group">
                                             <input type="text" name="name" class="form-control" placeholder="Name" pattern="[A-Za-z A-Za-z]{1,}" title="Please enter only letters" maxlength="40" id="txtName" required>
                                          </div>
                                       </div>
                                       <div class="col-md-6">
                                          <div class="form-group">
                                             <input type="email" name="email" class="form-control" placeholder="Email Id" id="email" required>
                                             <p class="errors" id="email-error">Please Enter Valid Email Address</p>
                                          </div>
                                       </div>
                                       <div class="col-md-6">
                                          <div class="form-group">
                                             <input type="tel" name="phone" class="form-control" placeholder="Mobile Number" minlength="10" maxlength="15" pattern="\d{10,15}" onkeypress="return event.charCode >= 48 &amp;&amp; event.charCode <= 57" title="Please enter 10-15 digits number">
                                          </div>
                                       </div>
                                       <div class="col-md-6">
                                          <div class="form-group">
                                             <input type="text" name="organization" class="form-control" placeholder="Organization" pattern="[A-Za-z0-9\-]+" id="txtOrganization" title="Only letters, numbers and '-' are allowed" required>
                                          </div>
                                       </div>
                                       <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
  Open modal
</button>

                                       <a class="common-btn" data-bs-toggle="tab" href="#second-tab" role="tab" id="proceedtosecond">Proceed</a>
                                    </div>
                                 </div>
                                 <div class="tab-pane" id="second-tab" role="tabpanel">
                                    <h5>Select a Service</h5>
                                    <div class="row mx-0">
                                       <label class="checkbox-container col-md-4">
                                          <input type="checkbox" name="services[]" value="Road way Transportation">
                                          <span>Road way Transportation</span>
                                          <img src="images/check-tick.svg" alt="tick" class="img-fluid check-icon">
                                       </label>
                                       <label class="checkbox-container col-md-4">
                                          <input type="checkbox" name="services[]" value="Logistics Consultancy">
                                          <span>Logistics Consultancy</span>
                                          <img src="images/check-tick.svg" alt="tick" class="img-fluid check-icon">
                                       </label>
                                       <label class="checkbox-container col-md-4">
                                          <input type="checkbox" name="services[]" value="Man Power Supply">
                                          <span>Man Power Supply</span>
                                          <img src="images/check-tick.svg" alt="tick" class="img-fluid check-icon">
                                       </label>
                                       <label class="checkbox-container col-md-4">
                                          <input type="checkbox" name="services[]" value="Import & Export">
                                          <span>Import & Export</span>
                                          <img src="images/check-tick.svg" alt="tick" class="img-fluid check-icon">
                                       </label>
                                       <label class="checkbox-container col-md-4">
                                          <input type="checkbox" name="services[]" value="Infra Projects Transportation & Consultancy">
                                          <span>Infra Projects Transportation <br>& Consultancy</span>
                                          <img src="images/check-tick.svg" alt="tick" class="img-fluid check-icon">
                                       </label>
                                       <label class="checkbox-container col-md-4">
                                          <input type="checkbox" name="services[]" value="Container freight station (CFS)">
                                          <span>Container freight station (CFS)</span>
                                          <img src="images/check-tick.svg" alt="tick" class="img-fluid check-icon">
                                       </label>
                                       <label class="checkbox-container col-md-4">
                                          <input type="checkbox" name="services[]" value="Logistic Management">
                                          <span>Logistic Management</span>
                                          <img src="images/check-tick.svg" alt="tick" class="img-fluid check-icon">
                                       </label>
                                       <label class="checkbox-container col-md-4">
                                          <input type="checkbox" name="services[]" value="Port Handling">
                                          <span>Port Handling</span>
                                          <img src="images/check-tick.svg" alt="tick" class="img-fluid check-icon">
                                       </label>
                                       <!-- <label class="checkbox-container col-md-4">
                                          <input type="checkbox">
                                          <span>NVOCC</span>
                                          <img src="images/check-tick.svg" alt="tick" class="img-fluid check-icon">
                                       </label> -->
                                    </div>
                                    <div class="form-btns">
                                       <a class="common-btn" data-bs-toggle="tab" href="#third-tab" role="tab" id="proceedtothird">Proceed</a>
                                       <a class="common-btn btn-outline-blue" data-bs-toggle="tab" href="#first-tab" role="tab" id="backtofirst">Back</a>
                                    </div>
                                 </div>
                                 <div class="tab-pane" id="third-tab" role="tabpanel">
                                    <h5>Transportation Details</h5>
                                    <div class="row mx-0">
                                       <div class="col-md-12">
                                          <div class="form-group">
                                             <textarea name="message" class="form-control" placeholder="Description*" id="message" rows="4" maxlength="250" required></textarea>
                                             <p class="errors" id="msg-error">Emails, URLs & Special characters are not allowed</p>
                                          </div>
                                       </div>
                                       <div class="col-md-12">
                                          <div class="form-group">
                                             <div class="upload-box" id="upload-box">
                                                <img src="images/upload-file.svg" alt="file icon" class="img-fluid file-icon">
                                                <p>Click to upload files</p>
                                             </div>
                                             <input type="file" name="files" id="file-input" multiple accept=".doc,.docx,.docs,.pdf">
                                          </div>
                                       </div>
                                    </div>
                                    <div class="form-btns">
                                       <button class="common-btn" id="form-submit">submit</button>
                                       <a class="common-btn btn-outline-blue" data-bs-toggle="tab" href="#second-tab" role="tab" id="backtosecond">Back</a>
                                    </div>
                                 </div>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
      </div>
      <div class="modal fade" id="myModal">
         <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">

               <!-- Modal body -->
               <div class="modal-body">
                  <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                  <div class="img-box">
                     <iframe src="quote-submit.html" class="w-100" style="transform:scale(1);"></iframe>
                  </div>
               </div>

            </div>
         </div>
      </div>
      <?php include("footer.php"); ?>
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>     
      <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'></link> 
      <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.6.6/jquery.fullPage.min.js"></script> -->
      <script type="text/javascript">
         $(document).ready(function(){

            function runiframe() {
               $('#myModal').find('iframe').each(function() {
                  const iframeWindow = $(this)[0].contentWindow;
                  if (iframeWindow && iframeWindow.lottie) {
                     iframeWindow.lottie.play(); // Play the animation
                  }
               });
            }

            var $links = $('#sticky-sidebar li a');
            $(window).on('scroll', function() {
               var scrollPosition = $(window).scrollTop();
               var windowHeight = $(window).height();

               $links.each(function() {
                  var target = $(this).attr('href');
                  var $target = $(target);
                  var targetTop = $target.offset().top;
                  var targetHeight = $target.outerHeight();

                  if (targetTop < scrollPosition + windowHeight / 2 && targetTop + targetHeight > scrollPosition + windowHeight / 2) {
                     $links.removeClass('active');
                     $(this).addClass('active');
                  }
               });
            });
            // $('#fullpage').fullpage({

            // });
            $('#backtofirst').on('click', function() {
               var targetTab = $(this).data('next') || '#first-tab';
               $('.nav-link[href="' + targetTab + '"]').tab('show');
            });
            $('#backtosecond').on('click', function() {
               var targetTab = $(this).data('next') || '#second-tab';
               $('.nav-link[href="' + targetTab + '"]').tab('show');
            });
            $('#proceedtosecond').on('click', function() {
               $('.req-form-wrapp ul li.nav-item').removeClass('active');
               var parent = $(this).parent();
               var allFilled = true;
               var isPhoneValid = true;

               parent.find('input[type="text"]').each(function() {
                  if ($(this).val() === '') {
                        allFilled = false;
                        return false;
                     }
                  });

                  var phoneInput = parent.find('input[name="phone"]');
                  if (phoneInput.length) {
                  var phonePattern = new RegExp(phoneInput.attr('pattern'));
                  isPhoneValid = phonePattern.test(phoneInput.val());
               }

               if (allFilled && isPhoneValid) {
                  var targetTab = $(this).data('next') || '#second-tab';
                  var activeTab = $('.nav-link[href="' + targetTab + '"]').tab('show');
                  activeTab.parent().addClass('active');
                  $('.nav-link[href="#first-tab"]').parent().addClass('done');
               } else {
                  if (!allFilled) {
                     sweetAlert('Please fill out all fields before proceeding.');
                  } else if (!isPhoneValid) {
                     sweetAlert('Please enter a valid phone number (10-15 digits).');
                  }
               }
            });
            $('#proceedtothird').on('click', function() {
               $('.req-form-wrapp ul li.nav-item').removeClass('active');
               var isChecked = $('.checkbox-container input[type="checkbox"]:checked').length > 0;

               if (isChecked) {
                  var targetTab = $(this).data('next') || '#third-tab';
                  $('.nav-link[href="' + targetTab + '"]').tab('show');
                  var activeTab = $('.nav-link[href="' + targetTab + '"]').tab('show');
                  activeTab.parent().addClass('active');
                  $('.nav-link[href="#second-tab"]').parent().addClass('done');
               } else {
                  sweetAlert('Please check at least one service before proceeding.');
               }
            });

            $('.checkbox-container').on('click', function() {
               var checkbox = $(this).find('input[type="checkbox"]');
               checkbox.prop('checked', !checkbox.prop('checked'));
               $(this).toggleClass('checked', checkbox.prop('checked'));
            });

            $('#upload-box').on('click', function() {
               $('#file-input').click();
            });


         });
         $(function () {
            $('#txtName, #txtOrganization').keydown(function (e) {
               if (e.ctrlKey || e.altKey) {
                  e.preventDefault();
               } else {
                  var key = e.keyCode;
                  if (!((key == 8) || (key == 9) || (key == 32) || (key == 46) || (key >= 35 && key <= 40) || (key >= 65 && key <= 90))) {
                     e.preventDefault();
                  }
               }
            });
         });
      </script>
      <script type="text/javascript">
         window.emailstatus = '';
         window.msgstatus = '';
         $("#email").on('input', function() {
            var emailFilter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z]{2,10})+$/;   
            var emailText = $("#email").val();
            if (emailFilter.test(emailText)) {
               window.emailstatus = true; 
               $("#email-error").hide(); 
               $("#email").removeClass('error');
            }
            else {
               window.emailstatus = false; 
               $("#email-error").show();
               $("#email").addClass('error');
            }
            valfield();
         });

         // textarea validation
         $(".errors").hide();
         var allowed = 0; // how many times url can be allowed
         var urlregex = /(https?:\/\/(?:www\.|(?!www))[a-zA-Z0-9][a-zA-Z0-9-]+[a-zA-Z0-9]\.[^\s]{2,}|www\.[a-zA-Z0-9][a-zA-Z0-9-]+[a-zA-Z0-9]\.[^\s]{2,}|https?:\/\/(?:www\.|(?!www))[a-zA-Z0-9]+\.[^\s]{2,}|www\.[a-zA-Z0-9]+\.[^\s]{2,})/g; //match urls
         var emailregex = /\b[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,6}\b/ig; //match emails
         var specialregex = /[\'^Â£$%&*(){}@#~><>|=_+Â¬]/g; //match special characters

         $('#message').on('input', function() {
            var textUrl = $(this).val().match(urlregex); // search url
            var textArea = $(this).val().match(emailregex); // search email
            var textChar = $(this).val().match(specialregex); // search special character
            if((textUrl && textUrl.length > allowed)||(textArea && textArea.length > allowed)||(textChar && textChar.length > allowed)){
               window.msgstatus = false;
               $("#msg-error").show();
               $("#message").addClass('error');
            } else {
               window.msgstatus = true;
               $("#msg-error").hide();
               $("#message").removeClass('error');
            }
            valfield();
         });

         function valfield(){
            if(window.msgstatus !== '') {
               if (window.emailstatus && window.msgstatus) {
                  $("#form-submit").prop("disabled", false);
               } else {
                  $("#form-submit").prop("disabled", true);
               }
            } else {
               if (window.emailstatus) {
                  $("#form-submit").prop("disabled", false);
               } else {
                  $("#form-submit").prop("disabled", true);
               }
            }        
         }

         $('#contact-form').on('submit', function(e) {
            // var contactForm1=$('#captcha_render1').val();
            // if(contactForm1 == "") {
            //    e.preventDefault();
            //    $("#captcha-error").show();
            //    $("#captcha1 iframe").css('border','1px solid red');
            // }
            var msgval = $('#message').val();
            if (msgval == '') {
               if (window.emailstatus) {
                  $("#form-submit").prop("disabled", false);
                  // $('form .formload').show();
               } else {
                  e.preventDefault();
                  if(window.emailstatus == "" || window.emailstatus == false) {
                     $("#email-error").show();
                     $("#email").addClass('error');
                     $("#form-submit").prop("disabled", true);
                  }
               }
            } else if (msgval !== '') {
               if (window.msgstatus && window.emailstatus) {
                  $("#form-submit").prop("disabled", false);
               } else {
                  e.preventDefault();
                  if(window.msgstatus == "" || window.msgstatus == false) {
                     $("#msg-error").show();
                     $("#message").addClass('error');
                     $("#form-submit").prop("disabled", true);
                  }
                  if(window.emailstatus == "" || window.emailstatus == false) {
                     $("#email-error").show();
                     $("#email").addClass('error');
                     $("#form-submit").prop("disabled", true);
                  }
               }
            }
         });
      </script>
      <?php
      if (isset($_POST['submit'])) {
         if (empty($_POST['honeypot'])) {
            $name = htmlspecialchars($_POST['name']);
            $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
            $phone = htmlspecialchars($_POST['phone']);
            $organization = htmlspecialchars($_POST['organization']);
            $message_content = htmlspecialchars($_POST['message']);
            $services = isset($_POST['services']) ? $_POST['services'] : [];
            $services_list = implode(", ", $services);

            // Check if the required fields are filled
            if (empty($name) || empty($email) || empty($phone) || empty($organization) || empty($services) || empty($message_content)) {
               echo "<script>sweetAlert('All Fields are required...!');</script>";
            } else {
               $to = "laynasart27la@gmail.com";
               $subject = "PSW Infra Logistics - Request a Quote Form";
               $boundary = md5("sanwebe");
               $headers = "From: Request a Quote <noreply@pswinfralogistics.com>\r\n";
               $headers .= "MIME-Version: 1.0\r\n";
               $headers .= "Content-Type: multipart/mixed; boundary = $boundary\r\n\r\n";

               // Prepare the email content
               $message = "--$boundary\r\n";
               $message .= "Content-Type: text/html; charset=UTF-8\r\n\r\n";
               $message .= "<table border='0'>
               <tr><td><b>Name: </b></td><td>$name</td></tr>
               <tr><td><b>Email Id: </b></td><td>$email</td></tr>
               <tr><td><b>Contact Number: </b></td><td>$phone</td></tr>
               <tr><td><b>Organization: </b></td><td>$organization</td></tr>
               <tr><td><b>Service request for: </b></td><td>$services_list</td></tr>
               <tr><td><b>Message: </b></td><td>$message_content</td></tr>
               </table>\r\n";

               // Handle file attachment
               if (!empty($_FILES['files']['name'][0])) {
                  $file_tmp_name = $_FILES['files']['tmp_name'][0];
                  $file_name = $_FILES['files']['name'][0];
                  $file_type = $_FILES['files']['type'][0];
                  $file_size = $_FILES['files']['size'][0];

                  $content = chunk_split(base64_encode(file_get_contents($file_tmp_name)));
                  $message .= "--$boundary\r\n";
                  $message .= "Content-Type: $file_type; name=\"$file_name\"\r\n";
                  $message .= "Content-Disposition: attachment; filename=\"$file_name\"\r\n";
                  $message .= "Content-Transfer-Encoding: base64\r\n\r\n";
                  $message .= "$content\r\n";
               }

               $message .= "--$boundary--";

               // Send email
               if (mail($to, $subject, $message, $headers)) {
                  // echo "<script>sweetAlert('Thank you! <br> We will get back to you soon.'); runiframe();</script>";
                  echo "<script>
                     $('#myModal').modal('show');
                     runiframe();
                  </script>";
                  exit();
               } else {
                  echo "<script>sweetAlert('Message could not be sent...');</script>";
               }
            }
         } else {
            header("Location: " . $_SERVER['PHP_SELF']);
         }
      }
      // if (isset($_POST['submit'])) {
      //    if (empty($_POST['honeypot'])) {
      //       $name = $_POST['name'];
      //       $email = $_POST['email'];
      //       $phone = $_POST['phone'];
      //       $organization = $_POST['organization'];
      //       $files = $_POST['files'];
      //       $message = $_POST['message'];
      //       $services = isset($_POST['services']) ? $_POST['services'] : [];
      //       $services_list = implode(", ", $services);

      //       // Check if the required fields are filled
      //       if (empty($name) || empty($email) || empty($phone) || empty($organization) || empty($services) || empty($message) || empty($files) ) {
      //          echo "<script>sweetAlert('All Fields are required...!');</script>";
      //       } else {
      //          $to = "laynasart27la@gmail.com";
      //          $subject = "PSW Infra Logistics - Request a Quote Form";

      //          if (!empty($files)) {
      //             // File details
      //             $file_tmp_name = $_FILES['files']['tmp_name'];
      //             $file_name = $_FILES['files']['name'];
      //             $file_size = $_FILES['files']['size'];
      //             $file_type = $_FILES['files']['type'];

      //             // Read the file content into a string
      //             $handle = fopen($file_tmp_name, "r");
      //             $content = fread($handle, $file_size);
      //             fclose($handle);
      //             $encoded_content = chunk_split(base64_encode($content));

      //             // Boundary 
      //             $boundary = md5("sanwebe");

      //             // Headers
      //             $headers = "From: Request a Quote <noreply@pswinfralogistics.com>\r\n";
      //             // $headers .= "CC: diksha@gordinateur.com\r\n";
      //             $headers .= "MIME-Version: 1.0\r\n";
      //             $headers .= "Content-Type: multipart/mixed; boundary = $boundary\r\n\r\n";

      //             // Plain message
      //             $message = "--$boundary\r\n";
      //             $message .= "Content-Type: text/html; charset=UTF-8\r\n";
      //             $message .= "Content-Transfer-Encoding: 7bit\r\n\r\n";
      //             $message .= "<table border='0'>
      //             <tr><td><b>Name: </b></td><td>$name</td></tr>
      //             <tr><td><b>Email Id: </b></td><td>$email</td></tr>
      //             <tr><td><b>Contact Number: </b></td><td>$phone</td></tr>
      //             <tr><td><b>Organization: </b></td><td>$organization</td></tr>
      //             <tr><td><b>Service request for: </b></td><td>$services</td></tr>
      //             <tr><td><b>Message: </b></td><td>$message</td></tr>
      //             </table>\r\n";

      //             // Attachment
      //             $message .= "--$boundary\r\n";
      //             $message .= "Content-Type: $file_type; name=\"$file_name\"\r\n";
      //             $message .= "Content-Disposition: attachment; filename=\"$file_name\"\r\n";
      //             $message .= "Content-Transfer-Encoding: base64\r\n";
      //             $message .= "X-Attachment-Id: " . rand(1000, 99999) . "\r\n\r\n";
      //             $message .= "$encoded_content\r\n";
      //             $message .= "--$boundary--";
      //          } else {
      //             $message .= "<table border='0'>
      //             <tr><td><b>Name: </b></td><td>".$name."</td></tr>
      //             <tr><td><b>Email Id: </b></td><td>".$email."</td></tr>
      //             <tr><td><b>Contact Number: </b></td><td>".$phone."</td></tr>
      //             <tr><td><b>Organization: </b></td><td>".$organization."</td></tr>
      //             <tr><td><b>Service request for: </b></td><td>".$services."</td></tr>
      //             <tr><td><b>Message: </b></td><td>".$message."</td></tr>
      //             </table>\r\n";

      //             $header = "From: Request a Quote <noreply@pswinfralogistics.com> \r\n";
      //             // $header .= "CC:diksha@gordinateur.com \r\n";
      //             $header .= "MIME-Version: 1.0\r\n";
      //             $header .= "Content-type: text/html\r\n";
      //          }

      //          // Send email
      //          if (mail($to, $subject, $message, $headers)) {
      //             echo "<script>
      //                $('#myModal').modal('show');
      //                runiframe();
      //             </script>";
      //             exit();
      //          } else {
      //             echo "<script>sweetAlert('Message could not be sent...');</script>";
      //          }
      //       } 
      //    }
      //    else {
      //       header("Location: " . $_SERVER['PHP_SELF']);
      //    }
      // }
      ?>
   </body>
</html>