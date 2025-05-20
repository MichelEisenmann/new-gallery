<div class="w3-bar w3-padding-16">
  <a href="<?= Translator::url('/index.php') ?>" class="gem-name w3-bar-item w3-button">GISÈLE EISENMANN MONTAGNÉ</a>
  
  <!-- the three bars that give access to the menu if we are on a mobile -->
  <a class="w3-bar-item w3-button w3-hover-black w3-hide-large w3-right"
     href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
    <i class="fa fa-bars"></i>
  </a>

  <!-- the menu for large screens -->
  <div class="w3-right w3-hide-medium w3-hide-small">
    <div class="w3-dropdown-hover">
      <a href="<?= Translator::url('/public/work.php') ?>"
	 class="w3-button gem-menu"><?= Translator::t('Work') ?> <i class="fa fa-caret-down"></i></a>
      <div class="w3-dropdown-content w3-bar-block w3-card-4">
<?php
foreach ( $ALL_GALLERIES->paint_dictionnaries as $navdico ) {
  // skip empty dictionaries and dictionaries that are not supposed to be shown
  if ( count($navdico->paints) == 0 || !$navdico->is_by_serie() ) {
    continue;
  }
?>
         <a href="<?= Translator::url('/public/serie-' .$navdico->key .'.php') ?>"
            class="w3-bar-item w3-button gem-menu"><?= Translator::t($navdico->key); ?></a>
<?php
}
?>
      </div>
    </div>
    <a href="<?= Translator::url('/public/news.php') ?>" class="w3-bar-item w3-button gem-menu"><?= Translator::t('News') ?></a>
    <a href="<?= Translator::url('/public/collect.php') ?>" class="w3-bar-item w3-button gem-menu"><?= Translator::t('Collect') ?></a>
    <a href="<?= Translator::url('/public/about.php') ?>" class="w3-bar-item w3-button gem-menu"><?= Translator::t('About') ?></a>
    <a href="<?= Translator::url('/public/contact.php') ?>" class="w3-bar-item w3-button gem-menu"><?= Translator::t('Contact') ?></a>
  </div>
</div>

<!-- the menu for small screens (accessed through the 3 bars) -->
<div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large  w3-right">

  <div class="w3-dropdown-hover">
    <a href="<?= Translator::url('/public/work.php') ?>"
       class="w3-button gem-menu" onclick="toggleFunction()"><?= Translator::t('Work') ?> <i class="fa fa-caret-right"></i></a>
    <div class="w3-dropdown-content" style="right:0">
<?php
foreach ( $ALL_GALLERIES->paint_dictionnaries as $navdico ) {
  // skip empty dictionaries and dictionaries that are not supposed to be shown
  if ( count($navdico->paints) == 0 || !$navdico->is_by_serie() ) {
    continue;
  }
?>

      <a href="<?= Translator::url('/public/serie-' .$navdico->key .'.php') ?>"
         class="w3-bar-item w3-button gem-menu" onclick="toggleFunction()"><?= Translator::t($navdico->key); ?></a>

<?php
}
?>
   </div>
  </div>
  <a href="<?= Translator::url('/public/news.php') ?>"
     class="w3-bar-item w3-button gem-menu" onclick="toggleFunction()"><?= Translator::t('News') ?></a>
  <a href="<?= Translator::url('/public/collect.php') ?>"
     class="w3-bar-item w3-button gem-menu" onclick="toggleFunction()"><?= Translator::t('Collect') ?></a>
  <a href="<?= Translator::url('/public/about.php') ?>"
     class="w3-bar-item w3-button gem-menu" onclick="toggleFunction()"><?= Translator::t('About') ?></a>
  <a href="<?= Translator::url('/public/contact.php') ?>"
     class="w3-bar-item w3-button gem-menu" onclick="toggleFunction()"><?= Translator::t('Contact') ?></a>
  
</div>

<script>
// Used to toggle the menu on small screens when clicking on the menu button
function toggleFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}

function useEnglish() {
    use('en');
}

function useFrench() {
    use('fr');
}

// change the lang parameter in the URL and reloads
function use( lang ) {
    const url= new URL(window.location.href);
    //    console.log(url);
    const queryString= window.location.search;
    //    console.log(queryString);
    const params= new URLSearchParams(queryString);
    params.set('lang', lang );
    //    console.log(params.toString());
    url.search=params.toString();
    //    console.log(url);
    location.replace(url.toString());
}
</script>
