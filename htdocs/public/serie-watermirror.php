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
// ce dictionnaire servira lorsqu'on voudra parcourir la serie sur la page qui montre les peintures une par une
$serie_key='watermirror';
$serie= $ALL_GALLERIES->paint_dictionnaries[$serie_key];

// ces dictionnaires sont les dictionnaires standard
$oil= $ALL_GALLERIES->paint_dictionnaries["oil"];
$pastel= $ALL_GALLERIES->paint_dictionnaries["pastel"];
$acrylic= $ALL_GALLERIES->paint_dictionnaries["acrylic"];
$other= $ALL_GALLERIES->paint_dictionnaries["other"];

// On recupere toutes les peintures qu'on veut voir dans cette serie
// On les stocke dans "$paints" et on leur donne un ID qui doit etre sans caractere special.
// Cet ID servira a les designer le moment venu.
// Oils
$paints["EgretYellowSunset"]= $oil->paints["Huile/20220601_EgretYellowSunset-HU90x65.jpg"];
$paints["ReveDeTropiques"]= $oil->paints["Huile/20221128_ReveDeTropiques_HU53x70.jpg"];
$paints["IlotMangrove"]= $oil->paints["Huile/20230809_IlotMangrove_HU40x80.jpg"];
$paints["Zenitude"]= $oil->paints["Huile/20240130_Zenitude_HU33x24.jpg"];

// Acrylics
$paints["JeuxDeVagues"]= $acrylic->paints["Acrylique/20211127_JeuxDeVagues_AC45x55.jpg"];
$paints["LesZebres"]= $acrylic->paints["Acrylique/20220317_LesZebres_AC80x40.jpg"];
$paints["ParisQuaiSeine"]= $acrylic->paints["Acrylique/20220312_ParisQuaiDeSeine_AC40x80.jpg"];
$paints["AustralianPelican"]= $acrylic->paints["Acrylique/20220601_CreekAustralianPelican_AC35x24.jpg"];
$paints["PinkSunsetTerranoraCreek"]= $acrylic->paints["Acrylique/20221103_PinkSunsetTerranoraCreek_AC50x76.jpg"];
$paints["BlueTerranoraSunset"]= $acrylic->paints["Acrylique/20221210_BlueSunsetTerranoraCreek_AC53x70.jpg"];
$paints["MangroveSulfurCockatoo"]= $acrylic->paints["Acrylique/20230504_Mangrove-SulfurCockatoo_AC53x71.jpg"];
$paints["LaVague"]= $acrylic->paints["Acrylique/20230629_LaVague_AC33x41.jpg"];
$paints["MarinaKeithCurran"]= $acrylic->paints["Acrylique/20231211_MarinaKeithCurran_AC46x91.jpg"];

// Pastels
$paints["LaBrague"]= $pastel->paints["Pastels/20220714_LaBrague_PA21x28.jpg"];
$paints["BrisbaneNorthBank"]= $pastel->paints["Pastels/20240628_BrisbaneNorthBank_PA21x27.jpg"];
$paints["BordDeSiagne"]= $pastel->paints["Pastels/20240428_BordDeSiagne_PA32x24.jpg"];

$line_generator= new LineGenerator();
$line_generator->paints= $paints; // may contain paints that are not in serie
$line_generator->serie_dico= $serie;  // will be used to browse exclusively amongst serie
?>
  

  <title><?= Translator::t($serie_key); ?> | Gisele Eisenmann Montagné</title>
  
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

    .gem-background-left {margin-top: 10px;}
    .gem-background-right {margin-top: 10px; margin-left: 10px;}
    .gem-background-single {margin-top: 10px;}
    .gem-inline { display:inline-block; vertical-align: text-top}

    .gem-hover {
        display: none;
        font-weight: 900;
    }

    /* On doit utiliser un des ID qu'on a defini plus haut */
    /* Chaque peinture va s'afficher dans une zone definie plus loin */
    /* Cette zone va "clipper" la peinture */
    /* La partie visible de la peinture est definie par les deux valeurs */
    /* Elles definissent quel point de la peinture sera affiche au centre de la zone */
    /* Par ex: 50, 50 veut dire que le milieu de la peinture (50%, 50%) est au centre de la zone */
    /* Le dernier parametre est la couleur du texte qui apparait quand la souris se deplace sur l image */
    
    <?php
$line_generator->generate_style("EgretYellowSunset", 50, 100, "noir");
$line_generator->generate_style("ReveDeTropiques", 25, 50, "white");
$line_generator->generate_style("IlotMangrove", 50, 50, "white");
$line_generator->generate_style("Zenitude", 50, 50, "white");
$line_generator->generate_style("JeuxDeVagues", 0, 50, "white");
$line_generator->generate_style("LesZebres", 50, 50, "white");
$line_generator->generate_style("ParisQuaiSeine", 50, 50, "white");
$line_generator->generate_style("AustralianPelican", 50, 50, "white");
$line_generator->generate_style("PinkSunsetTerranoraCreek", 50, 50, "white");
$line_generator->generate_style("BlueTerranoraSunset", 0, 50, "white");
$line_generator->generate_style("MangroveSulfurCockatoo", 50, 50, "white");
$line_generator->generate_style("LaVague", 50, 50, "white");
$line_generator->generate_style("MarinaKeithCurran", 50, 50, "white");
$line_generator->generate_style("LaBrague", 50, 50, "white");
$line_generator->generate_style("BrisbaneNorthBank", 50, 50, "white");
$line_generator->generate_style("BordDeSiagne", 50, 50, "white");
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
       <?= Translator::t("IntroWaterMirror"); ?>
      </div>
      
      <!-- Galerie/Exposition photo -->
<!--      <div class="w3-container w3-center">
	<img src="/public/images/web/expo-seillans.png" alt="" style="width:100%">
      </div>
	  -->
      
      
      <!-- Paintings -->
      <!--   Pick the height you want for the row -->
      <!--   The second number is the width for the first paint (out of 885 px) -->
	  	 <div class="w3-container">
<?= $line_generator->generate_single_line( 400, "ParisQuaiSeine" ); ?>
      </div>
      <div class="w3-container">
<?= $line_generator->generate_double_line( 500, "EgretYellowSunset", 500, "MangroveSulfurCockatoo" ); ?>
      </div>

      <div class="w3-container">
<?= $line_generator->generate_double_line( 300, "LaVague", 400, "JeuxDeVagues" ); ?>
      </div>
	       <div class="w3-container">
<?= $line_generator->generate_double_line( 400, "ReveDeTropiques", 500, "AustralianPelican" ); ?>
      </div> 
	  	 <div class="w3-container">
<?= $line_generator->generate_single_line( 300, "MarinaKeithCurran" ); ?>
      </div>	  
      <div class="w3-container">
<?= $line_generator->generate_single_line( 300, "IlotMangrove" ); ?>
      </div>

      <div class="w3-container">
<?= $line_generator->generate_double_line( 300, "PinkSunsetTerranoraCreek", 485, "BordDeSiagne" ); ?>
      </div>
	 <div class="w3-container">
<?= $line_generator->generate_single_line( 300, "LesZebres" ); ?>
      </div> 
	 <div class="w3-container">
<?= $line_generator->generate_double_line( 300, "Zenitude", 485, "BlueTerranoraSunset" ); ?>
      </div> 
     <div class="w3-container">
<?= $line_generator->generate_double_line( 300, "BrisbaneNorthBank", 485, "LaBrague" ); ?>
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
