<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include("head.php"); ?>
    <title>Contact Us | PSW</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
  </head>
  <body>
    <?php include("header.php"); ?>
    <section class="breadcum">
      <img src="images/contact-banner.webp" class="img-fluid w-100 main-img" alt="contact-breadcum">
      <div class="container breadcum_container">
        <div class="caption-heading">
          <h1 class="f-black">Contact Us</h1>
        </div>
        <div class="container breadcum-container">
          <div class="breadcum_list">
            <a href="index.php" class="f-regular text-white">Home</a>
            <span class="slash text-white">></span>
            <span class="text-white f-regular">Contact Us</span>
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