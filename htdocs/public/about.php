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

  <title><?= Translator::t("Biography"); ?></title>
  
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

  .grid {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 10px;
      align-items: center;
      justify-items: center;
      margin: auto;
  }
  .grid img {
      border: 1px solid #ccc;
      box-shadow: 2px 2px 6px 0px  rgba(0,0,0,0.3);
      max-width: 100%;
  }
  .grid img:nth-child(2) {
      grid-column: span 4;
  }


    .limited {
      height: 100px;
    }

    .gem-cliping { height: 100%; width: 200px; overflow: hidden; }


  </style>
  
  <body>

    <!-- Header -->
    <?php include("../public/navbar.php"); ?>
    
    <!-- Page Content -->
    <div class="w3-container">

      <!-- Theme grid -->
      <div class="w3-content w3-container " id="grid_theme">
        <main class="grid">
	  <div>
	     <a href="<?= Translator::url('/index.php') ?>">
		 <img class="artiste to-be-signed" src="../public/images/web/gisele.jpg" alt="Artist's photo" /></a>
   	  </div>
      
	  
	  <div></div>
	  <div>
<!--	    <a href="<?= Translator::url('../public/contenu_d_une_galerie.php?key=oil&file=Huile/20230708_ClairDeSoleil_Huile_30P.jpg') ?>">
              <img class="australie_theme to-be-signed" src="../public/images/Huile/20230708_ClairDeSoleil_Huile_30P_small.jpg" alt="Australie" />
	    </a>
-->
	  </div>
          
	  <div>
<!--
      <a href="<?= Translator::url('../public/contenu_d_une_galerie.php?key=acrylic&file=Acrylique/20230530_Contemplation_A100x73.jpg') ?>">
              <img class="paysage_theme to-be-signed" src="../public/images/Acrylique/20230530_Contemplation_A100x73_small.jpg" alt="Paysage" />
	    </a>
-->
	  </div>
	</main>
      </div>
    </div>

    
    <!-- common part -->
    <div class="w3-content w3-container" id="">
      
      <?= Translator::t('Introduction'); ?>
      <div class="visible-on-computer">
	<div class="w3-content w3-container " id="grid">
	  <p/>
	  <main class="grid">
	    <div class="gem-cliping">
	      <a href="<?= Translator::url('../public/contenu_d_une_galerie.php?key=oil&file=Huile/20250314_AirMarin_HU50x50.jpg') ?>">
		<!--   <img class="limited to-be-signed" src="../public/images/Huile/20230216_LesDanseuses_Huile_small.jpg" alt="<?= Translator::t("oil") ?>" />  -->
			    <img class="limited to-be-signed" src="../public/images/Huile/20250314_AirMarin_HU50x50.jpg" alt="<?= Translator::t("oil") ?>" />
			    <br><?= Translator::t("oil") ?></br>
	      </a>
	    </div>
	    
	    <div class="gem-cliping">
	      <a href="<?= Translator::url('../public/contenu_d_une_galerie.php?key=acrylic&file=Acrylique/20240822_Aigrette_AC50x76.jpg') ?>">
		<img class="limited to-be-signed" src="../public/images/Acrylique/20240822_Aigrette_AC50x76_small.jpg" alt="<?= Translator::t("acrylic") ?>" />
		<br><?= Translator::t("acrylic") ?></br>
	      </a>
	    </div>
	    
	    <div class="gem-cliping">
 	      <a href="<?= Translator::url('../public/contenu_d_une_galerie.php?key=pastel&file=Pastels/20240119_Corentin2Mois.jpg') ?>">
		<img class="limited to-be-signed" src="../public/images/Pastels/20240119_Corentin2Mois_small.jpg" alt="<?= Translator::t("pastel") ?>" >
                <br><?= Translator::t("pastel") ?></br>			
	      </a>
            </div>
	    
            <div class="gem-cliping">
	      <a href="<?= Translator::url('../public/contenu_d_une_galerie.php?key=other&file=Autres/20200920_SanguinePascaleGuillaume.jpg') ?>">
		<img class="limited to-be-signed" src="../public/images/Autres/20200920_SanguinePascaleGuillaume_small.jpg" alt="<?= Translator::t("other") ?>" />
                <br><?= Translator::t("other") ?></br>
	      </a>
	    </div>
	  </main>
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

