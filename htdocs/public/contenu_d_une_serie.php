<html>
  <head>
    
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

// ---- retrieve all the variables coming with the URL
$serie_key="watermirror";
if (array_key_exists("serie", $_GET) ) {
  $serie_key=htmlspecialchars($_GET["serie"]);
} 
$serie_dico= $ALL_GALLERIES->paint_dictionnaries[$serie_key];

// the rank of current selected paint in our gallery
// OPTIONAL. If not given, the image variable must be set
$rank_in_gallery=0;
if (array_key_exists("rank", $_GET) ) {
  $rank_in_gallery=htmlspecialchars($_GET["rank"]);
 }

// the file of the paint. If given, it is used to compute
//   the rank in gallery
// OPTIONAL. Should be provided if the rank is unknown (see index.html)

$file_in_gallery="";
if (array_key_exists("file", $_GET) ) {
  $file_in_gallery=htmlspecialchars($_GET["file"]);
  $rank_in_gallery=$serie_dico->get_file_rank($file_in_gallery);
 }

// the rank of the first paint shown in the pagination
$pagination_start=0;
if (array_key_exists("pagination", $_GET) ) {
  $pagination_start=htmlspecialchars($_GET["pagination"]);
 }
    ?>
    
    <script>
      // Transfer the PHP variables into script global variables
      // Paint information
      
      var total_number= <?= count($serie_dico->sortedList) ?>;

      // the rank of current selected paint in our gallery
      var rank_in_gallery= <?= $rank_in_gallery ?>;

      var dicoKey= "<?= $serie_key ?>";
      var paintFiles= [];
      var paintTitles= [];
      var paintDescriptions= [];
      var paintStatus= [];
      var paintStatusTranslated= [];
      var gemSignature= "<?= $GEM_SIGNATURE ?>";
 <?php
  foreach( $serie_dico->sortedList as $paint ) {
 ?>
      paintFiles.push( "images/<?= $paint->file ?>" );
      paintTitles.push( "<?= $paint->full_title() ?>" );
      paintDescriptions.push( "<?= $paint->get_description() ?>" );
      paintStatus.push("<?= $paint->get_status() ?>" );
      paintStatusTranslated.push("<?= Translator::t($paint->get_status()) ?>" );
 <?php
 }
 ?>
    </script>
    
    <title><?= Translator::t($serie_dico->key); ?> | Gisele Eisenmann Montagné</title>
    
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

      <!-- ------------------------------------------------------- -->
      <!-- the central selected paint -->
      <!-- this will be updated via updateCentralPaint() function -->

      <button class="w3-button w3-round "
              onClick="showPrevious();">
	<i class="fa fa-step-backward"></i>
      </button>
      
      <button class="w3-button w3-round "
              onClick="showNext();">
	<i class="fa fa-step-forward"></i>
      </button>

      <div class="w3-container center-paint">
	<a id="central-paint-href" href="">
	  <img id="central-paint-img" class="w3-image"/>
	</a>
      </div>
      
      <div class="w3-container">
	<span id="central-paint-title"></span>
	<span id="central-paint-description"></span>
      </div>
      
      <!-- ------------------------------------------------------- -->
      
      <script>
	
	// used to intialize the pagination bar
	updateDocument();

	// Used to toggle the menu on small screens when clicking on the menu button
	function toggleFunction() {
	    var x = document.getElementById("navDemo");
	    if (x.className.indexOf("w3-show") == -1) {
		x.className += " w3-show";
	    } else {
		x.className = x.className.replace(" w3-show", "");
	    }
	}
	
	function showPrevious() {
	    var x = dicoKey;
	    //    var x = document.getElementById("gallery_selector").value;
	    rank_in_gallery= rank_in_gallery-1;
	    updateDocument();
	}

	function showNext() {
	    var x= dicoKey;
	    //    var x = document.getElementById("gallery_selector").value;
	    rank_in_gallery= rank_in_gallery+1;
	    updateDocument();
	}

	function updateDocument() {
	    // loops when arriving at the extremities
	    if ( rank_in_gallery < 0 ) {
		rank_in_gallery= total_number-1;
	    }
	    if ( rank_in_gallery >= total_number ) {
		rank_in_gallery= 0;
	    }
	    updateCentralPaint();
	}

	function updateCentralPaint() {
	    var img = document.getElementById("central-paint-img");
	    img.src= paintFiles[rank_in_gallery];
	    img.alt= paintTitles[rank_in_gallery] + " " + gemSignature;

	    // retrieve current language
	    const queryString= window.location.search;
	    const params= new URLSearchParams(queryString);
	    var language= params.get('lang');

	    var a= document.getElementById("central-paint-href");
//	    a.href="../public/affichage_peinture.php?key=" + dicoKey + "&rank=" + rank_in_gallery + "&lang=" + language;
	    //        
	    var b= document.getElementById("central-paint-title");
	    b.textContent= paintTitles[rank_in_gallery];
	    var b= document.getElementById("central-paint-description");
	    b.textContent= paintDescriptions[rank_in_gallery];

	    // status part
	    var st= document.getElementById("status");
	    var status= paintStatus[rank_in_gallery];
	    st.textContent= "";
	    if ( status.length != 0 ) {
		st.textContent= paintStatusTranslated[rank_in_gallery];
	    }
	}

      </script>
      
    </body>
</html>
