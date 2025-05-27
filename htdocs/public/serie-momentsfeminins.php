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
$serie_key='momentsfeminins';
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
$paints["LesDanseuses"]= $oil->paints["Huile/20230216_LesDanseuses_Huile.jpg"];
$paints["ClairDeSoleil"]= $oil->paints["Huile/20230708_ClairDeSoleil_Huile_30P.jpg"];
$paints["TheRiverBankVlaminck"]= $oil->paints["Huile/20230921_TheRiverBank_Vlaminck_38x46.jpg"];
$paints["BaigneursRiviere"]= $oil->paints["Huile/20240204_Baigneurs_Huile_50x100.jpg"];
$paints["SakuraNenuphars"]= $oil->paints["Huile/20240613_Sakura-nenuphars_HU54x73.jpg"];
$paints["BrumesDuSoir"]= $oil->paints["Huile/20240728_Brume_HU73x54.jpg"];
$paints["LeTorrent"]= $oil->paints["Huile/20241225_LeTorrent_HU41x33.jpg"];
$paints["AirMarin"]= $oil->paints["Huile/20250314_AirMarin_HU50x50.jpg"];
$paints["PortraitPascale"]= $oil->paints["Huile/20250319_PortraitPascale_HU50x50.jpg"];

// Acrylics
$paints["JeuDeRegards"]= $acrylic->paints["Acrylique/20220821_Regards.jpg"];
$paints["Contemplation"]= $acrylic->paints["Acrylique/20230530_Contemplation_A100x73.jpg"];
$paints["Aigrette"]= $acrylic->paints["Acrylique/20240822_Aigrette_AC50x76.jpg"];
$paints["PelicanSeul"]= $acrylic->paints["Acrylique/20240915_Pelican_AC55x38.jpg"];
$paints["LaLectrice"]= $acrylic->paints["Acrylique/20250421_Lectrice_AC50x50.jpg"];
$paints["LaPiscine"]= $acrylic->paints["Acrylique/20250504_La piscine-AC50x50.jpg"];

// Autres
$paints["SanguinePascaleGui"]= $other->paints["Autres/20200920_SanguinePascaleGuillaume.jpg"];

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
$line_generator->generate_style("AirMarin", 50, 50, "white");
$line_generator->generate_style("PortraitPascale", 50, 50, "white");
$line_generator->generate_style("PelicanSeul", 50, 50, "white");
$line_generator->generate_style("ClairDeSoleil", 50, 50, "white");
$line_generator->generate_style("BaigneursRiviere", 0, 100, "white");
$line_generator->generate_style("Contemplation", 50, 50, "black");
$line_generator->generate_style("LeTorrent", 0, 50, "black");
$line_generator->generate_style("TheRiverBankVlaminck", 50, 50, "white");
$line_generator->generate_style("LesDanseuses", 50, 50, "white");
$line_generator->generate_style("SunsetonTerranoraCreek", 50, 50, "white");
$line_generator->generate_style("BrumesDuSoir", 50, 50, "white");
$line_generator->generate_style("LaPiscine", 50, 50, "white");
$line_generator->generate_style("Aigrette", 50, 50, "white");
$line_generator->generate_style("SanguinePascaleGui", 50, 50, "white");
$line_generator->generate_style("SakuraNenuphars", 50, 50, "white");
$line_generator->generate_style("JeuDeRegards", 50, 50, "white");
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
        <?= Translator::t("IntroMomentsFem"); ?>
	
        
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
<?= $line_generator->generate_double_line( 500, "AirMarin", 485, "PortraitPascale" ); ?>
      </div>

	 <div class="w3-container">
<?= $line_generator->generate_single_line( 400, "BaigneursRiviere" ); ?>
      </div>

      <div class="w3-container">
<?= $line_generator->generate_double_line( 500, "ClairDeSoleil", 500, "PelicanSeul" ); ?>
      </div>
      <div class="w3-container">
<?= $line_generator->generate_double_line( 500, "LeTorrent", 500, "TheRiverBankVlaminck" ); ?>
      </div>	  

	 <div class="w3-container">
<?= $line_generator->generate_single_line( 400, "LesDanseuses" ); ?>
      </div>
 
    <div class="w3-container">
<?= $line_generator->generate_double_line( 600, "Contemplation", 500, "LaPiscine" ); ?>
    </div>
	  


	  <div class="w3-container">
<?= $line_generator->generate_double_line( 285, "SanguinePascaleGui", 400, "Aigrette" ); ?>
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
