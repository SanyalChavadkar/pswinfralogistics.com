<!DOCTYPE html>
<html lang="en">
   <head>
      <?php include("head.php"); ?>
      <title>Home | PSW</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
   </head>
   <body>
      <?php include("header.php"); ?>
      <div class="main-wrapper position-relative">
         <section class="sectionf" id="banner">
            
         </section>
         <section class="sectionf" id="services">
            
         </section>
         <section class="sectionf" id="about">
            
         </section>
         <section class="sectionf" id="why">
            
         </section>
         <section class="sectionf" id="testimonials">
            <div class="container-fluid">
               <div class="row p-0">
                  <div class="col-md-12 p-0">
                     <div class="section-fifty">
                        <div class="left-sec">
                           <div class="section-title">
                              <h3 class="subheading">what our client says!</h3>
                              <h2 class="heading">Testimonials</h2>
                           </div>
                        </div>
                        <div class="testimonial-sec mid-line">
                           <div class="owl-carousel owl-theme testimonial-slider">
                              <div class="item">
                                 <img src="images/quote.svg" class="quote-ico img-fluid" alt="quote icon">
                                 <p class="f-reqular">"Lorem ipsum dolor sit amet, consectetur adipiscing elit,<br>sed do eiusmod tempor incididunt ut labore et dolore<br>magna aliqua. Ut enim ad minim veniam,<br>quis nostrud</p>
                                 <div class="testimonail-wrapp d-flex justify-content-start align-items-center">
                                    <img src="images/avatar.jpg" class="img-fluid" alt="avatar">
                                    <div class="testimonail-wrapp">
                                       <h4>Name Surname</h4>
                                       <p class="f-semibold">Company Name</p>
                                    </div>
                                 </div>
                              </div>
                              <div class="item">
                                 <img src="images/quote.svg" class="quote-ico img-fluid" alt="quote icon">
                                 <p class="f-reqular">"Lorem ipsum dolor sit amet, consectetur adipiscing elit,<br>sed do eiusmod tempor incididunt ut labore et dolore<br>magna aliqua. Ut enim ad minim veniam,<br>quis nostrud</p>
                                 <div class="testimonail-wrapp d-flex justify-content-start align-items-center">
                                    <img src="images/avatar.jpg" class="img-fluid" alt="avatar">
                                    <div class="testimonail-wrapp">
                                       <h4>Name Surname</h4>
                                       <p class="f-semibold">Company Name</p>
                                    </div>
                                 </div>
                              </div>
                              <div class="item">
                                 <img src="images/quote.svg" class="quote-ico img-fluid" alt="quote icon">
                                 <p class="f-reqular">"Lorem ipsum dolor sit amet, consectetur adipiscing elit,<br>sed do eiusmod tempor incididunt ut labore et dolore<br>magna aliqua. Ut enim ad minim veniam,<br>quis nostrud</p>
                                 <div class="testimonail-wrapp d-flex justify-content-start align-items-center">
                                    <img src="images/avatar.jpg" class="img-fluid" alt="avatar">
                                    <div class="testimonail-wrapp">
                                       <h4>Name Surname</h4>
                                       <p class="f-semibold">Company Name</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-12 p-0">                     
                     <div class="bg-lightgrey" id="clients">
                        <h3 class="subheading text-center">our client</h3>
                        <div class="owl-carousel owl-theme client-slider">
                           <div class="item">
                              <img src="images/jsw.jpg" class="img-fluid" alt="JSW">
                           </div>
                           <div class="item">
                              <img src="images/mmrda.jpg" class="img-fluid" alt="MMRDA">
                           </div>
                           <div class="item">
                              <img src="images/ncc.jpg" class="img-fluid" alt="NCC">
                           </div>
                           <div class="item">
                              <img src="images/efc.jpg" class="img-fluid" alt="EFC">
                           </div>
                           <div class="item">
                              <img src="images/jmbaxi.jpg" class="img-fluid" alt="J M BAXI">
                           </div>
                           <div class="item">
                              <img src="images/tata.jpg" class="img-fluid" alt="TATA">
                           </div>
                           <div class="item">
                              <img src="images/lnt.jpg" class="img-fluid" alt="L&T">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section class="sectionf" id="message">
            
         </section>
      </div>
      <div id="cta" class="bg-grey">
         <div class="container">
            <div class="row">
               <div class="col-md-12 d-flex justify-content-center align-items-center">
                  <p class="accentblue f-medium">Need a quote for our services!</p>
                  <a href="#" class="common-btn btn-outline-blue">request a quote</a>
               </div>
            </div>
         </div>
      </div>
      <?php include("footer.php"); ?>
      <script type="text/javascript">
         $(document).ready(function(){
            $('.client-slider').owlCarousel({
               items:5,
               margin:24,
               nav:true,
               navText: ['<img src="images/arrow_circle_left.svg">','<img src="images/arrow_circle_right.svg">'],
               dots:false,
               loop:true,
               autoplay:false,
               smartSpeed:1000,
               autoplayTimeout:3000,
               responsive:{
                  0:{items:1, smartSpeed:1000},
                  375:{items:2},
                  600:{items:4},
                  1024:{items:5},
                  1366:{items:6}
               }
            });
            $('.testimonial-slider').owlCarousel({
               items:1,
               margin:0,
               nav:true,
               navText: ['<img src="images/arrow_circle_left.svg">','<img src="images/arrow_circle_right.svg">'],
               dots:false,
               loop:true,
               autoplay:false,
               smartSpeed:1000,
               autoplayTimeout:3000
            });
         });
      </script>
   </body>
</html>