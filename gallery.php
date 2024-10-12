<!DOCTYPE html>
<html lang="en">
   <head>
      <?php include("head.php"); ?>
      <title>Gallery | PSW</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta property="og:title" content="Gallery | PSW">
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
                        Gallery
                     </a>
                  </div>
               </div>
               <div class="req-form-wrapper mid-line">
                  <div class="section">
                     <div class="section-title">
                        <h4 class="f-semibold">Gallery</h4>
                     </div>
                     <div id="gallery-wrapper" class="lightgallery">
                        <div class="gallery-wrapper">
                           <div class="inner-wrapper1">
                              <div class="gallery-single">
                                 <a href="images/gallery1.webp" class="img-box">
                                    <div class="img-wrapp">
                                       <img src="images/gallery1.webp" alt="gallery" class="img-fluid">
                                       <p>Picture Label</p>
                                    </div>
                                 </a>
                              </div>
                           </div>
                           <div class="inner-wrapper2">
                              <div class="gallery-single">
                                 <a href="images/gallery2.webp" class="img-box">
                                    <div class="img-wrapp">
                                       <img src="images/gallery2.webp" alt="gallery" class="img-fluid">
                                       <p>Picture Label</p>
                                    </div>
                                 </a>
                              </div>
                              <div class="gallery-single">
                                 <a href="images/gallery3.webp" class="img-box">
                                    <div class="img-wrapp">
                                       <img src="images/gallery3.webp" alt="gallery" class="img-fluid">
                                       <p>Picture Label</p>
                                    </div>
                                 </a>
                              </div>
                           </div>
                        </div>
                        <div class="gallery-wrapper2">
                           <div class="inner-wrapper2">
                              <div class="gallery-single">
                                 <a href="images/gallery4.webp" class="img-box">
                                    <div class="img-wrapp">
                                       <img src="images/gallery4.webp" alt="gallery" class="img-fluid">
                                       <p>Picture Label</p>
                                    </div>
                                 </a>
                              </div>
                              <div class="gallery-single">
                                 <a href="images/gallery5.webp" class="img-box">
                                    <div class="img-wrapp">
                                       <img src="images/gallery5.webp" alt="gallery" class="img-fluid">
                                       <p>Picture Label</p>
                                    </div>
                                 </a>
                              </div>
                           </div>
                           <div class="inner-wrapper1">
                              <div class="gallery-single">
                                 <a href="images/gallery6.webp" class="img-box">
                                    <div class="img-wrapp">
                                       <img src="images/gallery6.webp" alt="gallery" class="img-fluid">
                                       <p>Picture Label</p>
                                    </div>
                                 </a>
                              </div>
                           </div>
                        </div>
                        <div class="gallery-wrapper d-none">
                           <div class="inner-wrapper1">
                              <div class="gallery-single">
                                 <a href="images/gallery1.webp" class="img-box">
                                    <div class="img-wrapp">
                                       <img src="images/gallery1.webp" alt="gallery" class="img-fluid">
                                       <p>Picture Label</p>
                                    </div>
                                 </a>
                              </div>
                           </div>
                           <div class="inner-wrapper2">
                              <div class="gallery-single">
                                 <a href="images/gallery2.webp" class="img-box">
                                    <div class="img-wrapp">
                                       <img src="images/gallery2.webp" alt="gallery" class="img-fluid">
                                       <p>Picture Label</p>
                                    </div>
                                 </a>
                              </div>
                              <div class="gallery-single">
                                 <a href="images/gallery3.webp" class="img-box">
                                    <div class="img-wrapp">
                                       <img src="images/gallery3.webp" alt="gallery" class="img-fluid">
                                       <p>Picture Label</p>
                                    </div>
                                 </a>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-12 text-center">
                           <button class="common-btn mx-auto" id="viewmore">view more <img src="images/arrow_down.svg" class="img-fluid"></button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <?php include("footer.php"); ?>
      <link rel="stylesheet" type="text/css" href="css/lightgallery.css">
      <script type="text/javascript" src="js/lightgallery.js"></script>
      <script type="text/javascript">
         $(document).ready(function(){
            $('.lightgallery').lightGallery({
               selector:'.img-box',
               thumbnail:false,
               autoplay:false,
               fullScreen:false,
               autoplayFirstVideo:false,
               progressBar:false,
               share:false,
               download: false,
               autoplayControls:false,
               zoom:false,
               hash:false,
            });
            $('#viewmore').on('click', function(){
               $('#gallery-wrapper .d-none').removeClass('d-none');
            });
         });
      </script>
   </body>
</html>