<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include("head.php"); ?>
    <title>Contact Us | PSW</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta property="og:title" content="Contact Us | PSW">
    <meta property="og:description" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="https://uat.pswinfralogistics.com/images/favicon.jpg">
  </head>
  <body>
    <?php include("header.php"); ?>
    <section class="page-container">
      <div class="container-fluid">
        <div class="row flex-nowrap">
          <div class="sidebar" id="sidebar">
            <a href="index.php">
              <img src="images/arrow_circle_left.svg" class="img-fluid" alt="back arrow">
              Contact Us
            </a>
          </div>
          <div class="contact-wrapper mid-line">
            <div class="d-flex map-form">
              <div class="map-wrapper">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7543.237037126189!2d72.86832109470754!3d19.036524495648795!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7cf33605539bf%3A0xefeec1461c47f386!2sTruck%20Terminal%20Rd%2C%20Sion%2C%20Mumbai%2C%20Maharashtra%20400037!5e0!3m2!1sen!2sin!4v1727871722363!5m2!1sen!2sin" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
              <div class="form-wrapper">
                <div class="section-title">
                  <h1 class="heading">Leave us a message</h1>
                </div>
                <div class="message-div">
                  <form>
                    <div class="form-group">
                      <input type="text" name="name" class="form-control f-light" id="txtFirstName1" required pattern="[A-Za-z A-Za-z]{1,}" title="Please enter only letters" maxlength="50" placeholder="Name">
                    </div>
                    <div class="form-group">
                      <input type="text" name="phone" class="form-control f-light" required minlength="10" maxlength="10" pattern="[0-9]{10}" title="Please enter only digits" onkeypress="return event.charCode >= 48 &amp;&amp; event.charCode <= 57" placeholder="Contact Number"> 
                    </div>
                    <div class="form-group">
                      <input type="email" name="email" class="form-control f-light emailid" required placeholder="Email Id">
                      <p class="errors">Please Enter Valid Email Address</p>
                    </div>
                    <div class="form-group select">
                      <select name="service" class="form-control" required>
                        <option value="" hidden>Services</option>
                        <option>Road Transportation</option>
                        <option>Logistics Consultancy</option>
                        <option>Man Power Supply</option>
                        <option>Import & Export</option>
                        <option>Infra Projects - Transportation & Consultancy</option>
                        <option>Container freight station (CFS)</option>
                        <option>Logistic Management</option>
                        <option>Port Handling</option>
                        <option>NVOCC</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <textarea class="form-control msg" name="message" rows="2" id="contactmsg" placeholder="Message" onpaste="return false;" maxlength="140"></textarea>
                      <p class="errors" id="msg-error">Emails, URLs &amp; Special characters are not allowed</p>
                    </div>
                    <div class="form-group">
                      <button type="submit" class="common-btn w-100" id="form-submit">Send Message</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="d-flex address-wrapp">
              <div class="single-addrs">
                <div class="cont-icon">
                  <img src="images/marker.svg" class="img-fluid" alt="address marker">
                </div>
                <div class="cont-icon">
                  <h3 class="f-semibold">locate us</h3>
                  <p class="f-regular">PSW Infra Logistics, Near Wadala RTO, <br>Wadala East, Mumbai 400037</p>
                </div>
              </div>
              <div class="single-addrs">
                <div class="cont-icon">
                  <img src="images/phone.svg" class="img-fluid" alt="phone icon">
                </div>
                <div class="cont-icon">
                  <h3 class="f-semibold">contact number</h3>
                  <a href="tel:+91 74000 66629" class="f-semibold">+91 74000 66629</a>
                </div>
              </div>
              <div class="single-addrs">
                <div class="cont-icon">
                  <img src="images/email.svg" class="img-fluid" alt="email icon">
                </div>
                <div class="cont-icon">
                  <h3 class="f-semibold">email address</h3>
                  <a href="mailto:pswinfralogistics@gmail.com" class="f-semibold">pswinfralogistics@gmail.com</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <?php include("footer.php"); ?>
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <script type="text/javascript">
       $(document).ready(function(){
           $('#contact_form').on('submit', function(e) {
               if(grecaptcha.getResponse() == "") {
                   e.preventDefault();
                   alert("Please check the captcha");
               }
           });
       });
    </script>
    <script type="text/javascript">
    // input type name field script
    $(function () {
    $('#txtFirstName1').keydown(function (e) {
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
         $(document).ready(function(){
            $('#contact-form').on('submit', function(e) {
               if(grecaptcha.getResponse() == "") {
                  e.preventDefault();
                  alert("Please check the captcha");
               } 
            });
         
            // $.validate({
            //     form: ".quote-validation",
            // });
         });
      </script>
      <script type="text/javascript">
         $(document).ready(function(){
          emailstatus = '';
          msgstatus = '';
          $('.emailid').on('input', function() {
            var emailFilter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z]{2,10})+$/;   
            var emailText = $(".emailid").val();
            if (emailFilter.test(emailText)) {
              // $(".email").css({
              //   "color" : "#609D29"
              // });
              window.emailstatus = true; 
              $(".email-error").hide();
            }
            else {
              // $(".email").css({
              //   "color" : "#CE3B46"
              // });
              window.emailstatus = false; 
              $(".email-error").show();
            }
            valfield();
          });
         
         // textarea validation
          $("#msg-error").hide();
          var allowed = 0; // how many times url can be allowed
          var urlregex = /(https?:\/\/(?:www\.|(?!www))[a-zA-Z0-9][a-zA-Z0-9-]+[a-zA-Z0-9]\.[^\s]{2,}|www\.[a-zA-Z0-9][a-zA-Z0-9-]+[a-zA-Z0-9]\.[^\s]{2,}|https?:\/\/(?:www\.|(?!www))[a-zA-Z0-9]+\.[^\s]{2,}|www\.[a-zA-Z0-9]+\.[^\s]{2,})/g; //match urls
          var emailregex = /\b[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,6}\b/ig; //match emails
          var specialregex = /[\'^Â£$%&*(){}@#~><>|=_+Â¬]/g; //match special characters
         
          $('#contactmsg').on('input', function() {
            var textUrl = $(this).val().match(urlregex); // search url
            var textArea = $(this).val().match(emailregex); // search email
            var textChar = $(this).val().match(specialregex); // search special character
            if((textUrl && textUrl.length > allowed)||(textArea && textArea.length > allowed)||(textChar && textChar.length > allowed)){
              window.msgstatus = false;
              $("#msg-error").show();
            } else {
              window.msgstatus = true;
              $("#msg-error").hide();
            }
            valfield();
          });
         
          // button
          function valfield(){
            if(msgstatus !== '') {
              if (emailstatus && msgstatus) {
                $("#form-submit").prop("disabled", false);
              } else {
                $("#form-submit").prop("disabled", true);
              }
            } else {
              if (emailstatus) {
                $("#form-submit").prop("disabled", false);
              } else {
                $("#form-submit").prop("disabled", true);
              }
            }        
          }
         }); 
      </script>
   </body>
</html>