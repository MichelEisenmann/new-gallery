<!DOCTYPE html>
<html lang="en">
  <meta charset="UTF-8">
  
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-R9KWX3PWND"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-R9KWX3PWND');
  </script>

  <?php include ('../private/initialize.php'); ?>
  <?php include ('../private/initialize_translator.php'); ?>
  <?php include ('../private/initialize_galleries.php'); ?>

  <title><?= Translator::t("Work"); ?></title>
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/5/w3.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <style>
    body {font-family:"Arial,Helvetica", sans-serif}
    h1,h2,h3,h4,h5,h6 {font-family:sans-serif; letter-spacing:5px}    

    .gem-name {font-family:"Arial,Helvetica", sans-serif; letter-spacing:6px; color:grey}
    .gem-menu {font-family:"Arial,Helvetica", sans-serif; color:grey; background-color:white}
    .gem-footer {font-family:"Arial,Helvetica", sans-serif; color:grey}
    .gem-animate {animation-duration: 3s}

  </style>
  
  <body>

      <!-- Header -->
      <?php include("../public/navbar.php"); ?>
      
      <!-- Page Content -->
  
      <div class="w3-container w3-padding-64 w3-animate-opacity gem-animate">
	
        <div class="w3-row">
          <div class="w3-col s12 w3-center" >
	    <img class="" src="/public/images/Huile/20250314_AirMarin_HU50x50_small.jpg" alt="<?= Translator::t('AirMarin') ?>" />
	    <div class="">
              <a href="<?= Translator::url('/public/serie-momentsfeminins.php') ?>" class="gem-link"><?= Translator::t("momentsfeminins"); ?></a>
	    </div>
	  </div>
	</div>
	<div class="w3-row">
          <div class="w3-col s12 w3-center" >
	    <img class="" src="/public/images/Huile/20250314_AirMarin_HU50x50_small.jpg" alt="<?= Translator::t('AirMarin') ?>" />
	    <div class="">
	      <a href="<?= Translator::url('/public/serie-watermirror.php') ?>" class="gem-link"><?= Translator::t("watermirror"); ?></a>
	    </div>
	  </div>
	</div>	    
      </div>      
      
      <!-- Footer -->
      
      <script>
      // add the "alt" attribute to all "to-be-signed" images
      function signImages() {
        var gemSignature= "Gisele Eisenmann (gem)";
        let images= document.querySelectorAll(".to-be-signed");
        for ( let i= 0; i < images.length; i++ ) {
	  images[i].setAttribute( 'alt', gemSignature );
        }
      }
      document.addEventListener('DOMContentLoaded', function() { signImages(); }, false);  
    </script>
    
  </body>
</html>
