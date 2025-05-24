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
  <?php include ('../private/line_generator.php'); ?>

<?php
$dico_key='watermirror';
// retrieves the dictionnary to get access to paints
$dico= $ALL_GALLERIES->paint_dictionnaries[$dico_key];

$oil= $ALL_GALLERIES->paint_dictionnaries["oil"];
$pastel= $ALL_GALLERIES->paint_dictionnaries["pastel"];
$acrylic= $ALL_GALLERIES->paint_dictionnaries["acrylic"];
$other= $ALL_GALLERIES->paint_dictionnaries["other"];

// Collects all the paints that we want to display.
// This gives us access to the sizes and the status (sold or not..)

// Oils
$paints["ClairDeSoleil"]= $oil->paints["Huile/20230708_ClairDeSoleil_Huile_30P.jpg"];
$paints["LeTorrent"]= $oil->paints["Huile/20241225_LeTorrent_HU41x33.jpg"];
$paints["Terranora creek-Sunset-Egret"]= $oil->paints["Huile/20220601_Terranora creek-Sunset-Egret-Huile.jpg"];
$paints["Revedetropiques"]= $oil->paints["Huile/20221128_Reve de tropiques_Huile53x70.jpg"];
$paints["LesDanseuses"]= $oil->paints["Huile/20230216_LesDanseuses_Huile.jpg"];
$paints["IlotMangrove"]= $oil->paints["Huile/20230809_IlotMangrove_40x80.jpg"];
$paints["Zenitude"]= $oil->paints["Huile/20240130_Zenitude_Huile_F4.jpg"];
$paints["TheRiverBankVlaminck"]= $oil->paints["Huile/20230921_TheRiverBank_Vlaminck_38x46.jpg"];

// Acrylics
$paints["SunsetonTerranoraCreek"]= $acrylic->paints["Acrylique/20221103_Sunset on Terranora Creek-Acrylic 50x76.jpg"];
$paints["TerranoraCreek"]= $acrylic->paints["Acrylique/20221210_TerranoraCreek_Acrylique-53x70.jpg"];
$paints["LaMangroveSulfurCockatoo"]= $acrylic->paints["Acrylique/20230504_La-Mangrove-SulfurCockatoo_Acryl-53x71.jpg"];
$paints["Contemplation"]= $acrylic->paints["Acrylique/20230530_Contemplation_A100x73.jpg"];
$paints["LaVague"]= $acrylic->paints["Acrylique/20230629_La-Vague_AcF6_33x41.jpg"];
$paints["Pelagos"]= $acrylic->paints["Acrylique/20231109_Pelagos_Acrylic-41x61.jpg"];
$paints["MarinaKeithCurran"]= $acrylic->paints["Acrylique/20231211_MarinaKeithCurran_Acry18x36pouces.jpg"];
$paints["LeFicus"]= $acrylic->paints["Acrylique/20220609_Le Ficus_Acrylique.jpg"];

// Pastels
$paints["BrisbaneNorthBank"]= $pastel->paints["Pastels/20240628_BrisbaneNorthBank_Pa-21x27.jpg"];
$paints["LaBrague"]= $pastel->paints["Pastels/20220714_LaBrague.jpg"];

$line_generator= new LineGenerator();
$line_generator->paints= $paints;
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

    .gem-image-fit {object-fit: cover; clip-path: inset(5% 5% 5% 5%)}
    
    .gem-background-left {margin-top: 10px;}
    .gem-background-right {margin-top: 10px; margin-left: 10px;}
    .gem-inline { display:inline-block; vertical-align: text-top}

    .gem-hover {
    display: none;
    }

    /* background-position tells which part of the image is centered in the box where it is diplayed */
    
    <?php
     $line_generator->generate_style("IlotMangrove", 50, 50);
     $line_generator->generate_style("LeFicus", 50, 50);
     $line_generator->generate_style("Contemplation", 50, 50);
     $line_generator->generate_style("ClairDeSoleil", 50, 50);
     $line_generator->generate_style("BrisbaneNorthBank", 50, 50);
     $line_generator->generate_style("LaBrague", 50, 50);
    ?>

    /* remains centered with fixed width when resizing the browser */
    .gem-fixed-width { width: 964px; margin-left: auto; margin-right: auto}


  </style>
  
  <body>

    <!-- Header -->
    <?php include("../public/navbar.php"); ?>
    
    <!-- Page Content -->
    <div class="w3-container w3-padding-16 w3-animate-opacity gem-animate gem-fixed-width">
      
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
      
      
      <!-- Paintings -->
      <!--   Pick the height you want for the row -->
      <!--   The sum of the two paint width must be 885px -->

      <div class="w3-container">
<?= $line_generator->generate_double_line( 500, "IlotMangrove", 485, "LeFicus" ); ?>
      </div>

      <div class="w3-container">
<?= $line_generator->generate_double_line( 500, "ClairDeSoleil", 485, "BrisbaneNorthBank" ); ?>
      </div>
      
      <div class="w3-container">
<?= $line_generator->generate_double_line( 500, "Contemplation", 485, "LaBrague" ); ?>
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
