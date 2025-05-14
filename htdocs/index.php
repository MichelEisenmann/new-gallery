<!DOCTYPE html>
<html lang="en">
  <meta charset="UTF-8">
  <title>GEM</title>
  
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-R9KWX3PWND"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-R9KWX3PWND');
  </script>
  
  <?php include ('private/initialize.php'); ?>
  <?php include ('private/initialize_translator.php'); ?>
  <?php include ('private/initialize_galleries.php'); ?>
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/5/w3.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <style>
    body {font-family:"Arial,Helvetica", sans-serif}
    h1,h2,h3,h4,h5,h6 {font-family:sans-serif; letter-spacing:5px}    

    .name {font-family:"Arial,Helvetica", sans-serif; letter-spacing:10px}

  </style>
  
  <body>

    <div class="">

      <div class="w3-bar">
	<a href="#home" class="name w3-bar-item w3-button">GISÈLE EISENMANN MONTAGNÉ</a>
	
	<div class="w3-right">
	  <div class="w3-dropdown-hover">
	    <button class="w3-button">Work</button>
	    <div class="w3-dropdown-content w3-bar-block w3-card-4">
	      <a href="#" class="w3-bar-item w3-button">Link 1</a>
	      <a href="#" class="w3-bar-item w3-button">Link 2</a>
	      <a href="#" class="w3-bar-item w3-button">Link 3</a>
	    </div>
	  </div>
	  <a href="#" class="w3-bar-item w3-button">News</a>
	  <a href="#" class="w3-bar-item w3-button">Collect</a>
	  <a href="#" class="w3-bar-item w3-button">About</a>
	<a href="#" class="w3-bar-item w3-button">Contact</a>
      </div>
      </div>
      
      <div>
	View Eisenmann Montagné's recent exhibition
	<a href="">Water mirrors</a>
      </div>
      <p><i class="fa fa-copyright"></i>2025 by Gisele Eisenmann Montagné</p>
      <p>Valbonne 06, France </p>
      

    </div>
    
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
