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

<?php
     $dico_key='watermirror';
     // retrieves the dictionnary to get access to paints
     $dico= $ALL_GALLERIES->paint_dictionnaries[$dico_key];

  $oil= $ALL_GALLERIES->paint_dictionnaries["oil"];
  $pastel= $ALL_GALLERIES->paint_dictionnaries["pastel"];
  $acrylic= $ALL_GALLERIES->paint_dictionnaries["acrylic"];
  $other= $ALL_GALLERIES->paint_dictionnaries["other"];
?>

  <title><?= Translator::t($dico->key); ?> | Gisele Eisenmann Montagné</title>
  
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
  
      <div class="w3-container w3-padding-16 w3-animate-opacity gem-animate">
        
	<!-- Ensure centering -->
	<div class="w3-row">
          <div class="w3-col s12 w3-center" >
            
	    <!-- Text Part -->
	    <div class="w3-container w3-left-align">
              <h1>Water Mirror</h1>
	      
              <p>Laius about water mirror</p>
              <p>Some text.. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Laius aabout water mirror</p>
              <p>Some text.. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Laius aabout water mirror</p>
              <p>Laius about water mirror</p>
	    </div>
            
	    <!-- Galerie/Exposition photo -->
	    <div class="w3-container w3-center">
	      <img src="/public/images/web/expo-seillans.png" alt="" style="width:100%">
	    </div>
	  </div>
	  
          <div class="w3-col s12 w3-center" >


<?php
 // Collects all the paints that we want to display.
 // This gives us access to the sizes and the status (sold or not..)

 $paints["20230708_ClairDeSoleil"]= $oil->paints["Huile/20230708_ClairDeSoleil_Huile_30P.jpg"];
 $paints["20241225_LeTorrent"]= $oil->paints["Huile/20241225_LeTorrent_HU41x33.jpg"];
 $paints["20220601_Terranora creek-Sunset-Egret"]= $oil->paints["Huile/20220601_Terranora creek-Sunset-Egret-Huile.jpg"];
 $paints["20221128_Reve de tropiques"]= $oil->paints["Huile/20221128_Reve de tropiques_Huile53x70.jpg"];
 $paints["20230216_LesDanseuses"]= $oil->paints["Huile/20230216_LesDanseuses_Huile.jpg"];
 $paints["20230809_IlotMangrove"]= $oil->paints["Huile/20230809_IlotMangrove_40x80.jpg"];
 $paints["20240130_Zenitude"]= $oil->paints["Huile/20240130_Zenitude_Huile_F4.jpg"];
 $paints["20230921_TheRiverBank_Vlaminck"]= $oil->paints["Huile/20230921_TheRiverBank_Vlaminck_38x46.jpg"];

?>

	    
	    <!-- Paintings -->
	    <div class="w3-container">

	      <img src="images/<?= $paints["20230708_ClairDeSoleil"]->file ?>" alt="" style="width:100%">
	      <img src="images/<?= $paints["20241225_LeTorrent"]->file ?>" alt="" style="width:100%">
	      <img src="images/<?= $paints["20220601_Terranora creek-Sunset-Egret"]->file ?>" alt="" style="width:100%">
	      <img src="images/<?= $paints["20221128_Reve de tropiques"]->file ?>" alt="" style="width:100%">
	      <img src="images/<?= $paints["20230216_LesDanseuses"]->file ?>" alt="" style="width:100%">
	      <img src="images/<?= $paints["20230809_IlotMangrove"]->file ?>" alt="" style="width:100%">
	      <img src="images/<?= $paints["20240130_Zenitude"]->file ?>" alt="" style="width:100%">
	      <img src="images/<?= $paints["20230921_TheRiverBank_Vlaminck"]->file ?>" alt="" style="width:100%">

	    </div>
	    

	  </div>
	</div>
      </div>      
      
      <!-- Footer -->
      <?php include("../public/copyright.php"); ?>
      
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
