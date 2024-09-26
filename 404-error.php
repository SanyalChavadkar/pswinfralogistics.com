<!DOCTYPE html>
<html lang="en">
   <head>
      <?php include("head.php"); ?>
      <title>404 Error | PSW</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
   </head>
   <body class="about-page">
      <?php include("header.php"); ?>
      <section class="breadcum">
         <img src="images/banner-img.jpg" class="img-fluid w-100 main-img" alt="404-banner">
         <div class="container breadcum_container">
            <div class="caption-heading">
               <h1 class="f-semibold">404 Error</h1>
            </div>
            <div class="container breadcum-container">
               <div class="breadcum_list">
                  <a href="index.php" class="f-regular text-white">Home</a>
                  <span class="slash text-white">></span>
                  <span class="text-white f-regular">404 Error</span>
               </div>
            </div>
         </div>
      </section>
      <section class="common-page error-page">
         <div class="container text-center" data-aos="fade-up">
            <img src="images/oops.png" class="img-fluid" alt="oops">
            <h2 class="text-center heading f-bold green">404 Not Found</h2>
            <p class="f-regular  text-center subheading">Sorry, an error has occurred, Requested page not found !</p>
            <div class="error-btns">
               <a href="index.php" class="common-btn">Home</a>
               <a href="contact-us.php" class="common-btn">Contact</a>
            </div>
         </div>
      </section>
      <?php include("footer.php"); ?>
   </body>
</html>