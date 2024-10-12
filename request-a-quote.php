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
      <!-- <div class="main-wrapper" id="fullpage"> -->
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
                                 <a class="nav-link active f-semibold border-0" data-bs-toggle="tab" href="#first-tab" role="tab"><span>1</span> <p>Personal Details</p></a>
                              </li>
                              <li class="nav-item" role="presentation">
                                 <a class="nav-link f-semibold border-0" data-bs-toggle="tab" href="#second-tab" role="tab"><span>2</span> <p>Select Service Category</p></a>
                              </li>
                              <li class="nav-item" role="presentation">
                                 <a class="nav-link f-semibold border-0" data-bs-toggle="tab" href="#third-tab" role="tab"><span>3</span> <p>Transportation Details</p></a>
                              </li>
                           </ul>
                           <form action="" method="post">
                              <div class="tab-content" id="myTabContent">
                                 <div class="tab-pane show active" id="first-tab" role="tabpanel">
                                    <h5>Personal Details</h5>
                                    <div class="row mx-0">
                                       <div class="col-md-6">
                                          <div class="form-group">
                                             <input type="text" name="name" class="form-control" placeholder="Name">
                                          </div>
                                       </div>
                                       <div class="col-md-6">
                                          <div class="form-group">
                                             <input type="text" name="name" class="form-control" placeholder="Email Id">
                                          </div>
                                       </div>
                                       <div class="col-md-6">
                                          <div class="form-group">
                                             <input type="text" name="name" class="form-control" placeholder="Mobile Number">
                                          </div>
                                       </div>
                                       <div class="col-md-6">
                                          <div class="form-group">
                                             <input type="text" name="name" class="form-control" placeholder="Organization">
                                          </div>
                                       </div>
                                       <a class="common-btn" data-bs-toggle="tab" href="#second-tab" role="tab" id="proceedtosecond">Proceed</a>
                                    </div>
                                 </div>
                                 <div class="tab-pane" id="second-tab" role="tabpanel">
                                    <h5>Select a Service</h5>
                                    <div class="row mx-0">
                                       <label class="checkbox-container col-md-4">
                                          <input type="checkbox">
                                          <span>Road way Transportation</span>
                                          <img src="images/check-tick.svg" alt="tick" class="img-fluid check-icon">
                                       </label>
                                       <label class="checkbox-container col-md-4">
                                          <input type="checkbox">
                                          <span>Logistics Consultancy</span>
                                          <img src="images/check-tick.svg" alt="tick" class="img-fluid check-icon">
                                       </label>
                                       <label class="checkbox-container col-md-4">
                                          <input type="checkbox">
                                          <span>Man Power Supply</span>
                                          <img src="images/check-tick.svg" alt="tick" class="img-fluid check-icon">
                                       </label>
                                       <label class="checkbox-container col-md-4">
                                          <input type="checkbox">
                                          <span>Import & Export</span>
                                          <img src="images/check-tick.svg" alt="tick" class="img-fluid check-icon">
                                       </label>
                                       <label class="checkbox-container col-md-4">
                                          <input type="checkbox">
                                          <span>Infra Projects Transportation <br>& Consultancy</span>
                                          <img src="images/check-tick.svg" alt="tick" class="img-fluid check-icon">
                                       </label>
                                       <label class="checkbox-container col-md-4">
                                          <input type="checkbox">
                                          <span>Container freight station (CFS)</span>
                                          <img src="images/check-tick.svg" alt="tick" class="img-fluid check-icon">
                                       </label>
                                       <label class="checkbox-container col-md-4">
                                          <input type="checkbox">
                                          <span>Logistic Management</span>
                                          <img src="images/check-tick.svg" alt="tick" class="img-fluid check-icon">
                                       </label>
                                       <label class="checkbox-container col-md-4">
                                          <input type="checkbox">
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
                                             <textarea name="name" class="form-control" placeholder="Description" id="message" rows="4"></textarea>
                                          </div>
                                       </div>
                                       <div class="col-md-12">
                                          <div class="form-group">
                                             <div class="upload-box" id="upload-box">
                                                <img src="images/upload-file.svg" alt="file icon" class="img-fluid file-icon">
                                                <p>Click to upload files</p>
                                             </div>
                                             <input type="file" name="files" id="file-input">
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
      <!-- </div> -->
      <?php include("footer.php"); ?>
      <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.6.6/jquery.fullPage.min.js"></script> -->
      <script type="text/javascript">
         $(document).ready(function(){
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
               var targetTab = $(this).data('next') || '#second-tab';
               $('.nav-link[href="' + targetTab + '"]').tab('show');
            });
            $('#proceedtothird').on('click', function() {
               var targetTab = $(this).data('next') || '#third-tab';
               $('.nav-link[href="' + targetTab + '"]').tab('show');
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
      </script>