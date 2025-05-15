<div class="w3-bar w3-padding-16">
  <a href="<?= Translator::url('/index.php') ?>" class="gem-name w3-bar-item w3-button">GISÈLE EISENMANN MONTAGNÉ</a>
  
  <!-- the three bars that give access to the menu if we are on a mobile -->
  <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right"
     href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
    <i class="fa fa-bars"></i>
  </a>

  <!-- this is hidden if we are on a mobile -->
  <div class="w3-right w3-hide-small">
    <div class="w3-dropdown-hover">
      <button class="w3-button gem-menu"><?= Translator::t('Work') ?> <i class="fa fa-caret-down"></i></button>
      <div class="w3-dropdown-content w3-bar-block w3-card-4">
	<a href="#" class="w3-bar-item w3-button gem-menu">Link 1</a>
	<a href="#" class="w3-bar-item w3-button gem-menu">Link 2</a>
	<a href="#" class="w3-bar-item w3-button gem-menu">Link 3</a>
      </div>
    </div>
    <a href="<?= Translator::url('/public/news.php') ?>" class="w3-bar-item w3-button gem-menu"><?= Translator::t('News') ?></a>
    <a href="<?= Translator::url('/public/collect.php') ?>" class="w3-bar-item w3-button gem-menu"><?= Translator::t('Collect') ?></a>
    <a href="<?= Translator::url('/public/about.php') ?>" class="w3-bar-item w3-button gem-menu"><?= Translator::t('About') ?></a>
    <a href="<?= Translator::url('/public/contact.php') ?>" class="w3-bar-item w3-button gem-menu"><?= Translator::t('Contact') ?></a>
  </div>
</div>

<!-- this is the menu that will be displayed when not enough space is available (accessed through the 3 bars) -->
<div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-right">
  <a href="<?= Translator::url('/public/work.php') ?>"
     class="w3-bar-item w3-button" onclick="toggleFunction()"><?= Translator::t('Work') ?></a>
  <a href="<?= Translator::url('/public/news.php') ?>"
     class="w3-bar-item w3-button" onclick="toggleFunction()"><?= Translator::t('News') ?></a>
  <a href="<?= Translator::url('/public/collect.php') ?>"
     class="w3-bar-item w3-button" onclick="toggleFunction()"><?= Translator::t('Collect') ?></a>
  <a href="<?= Translator::url('/public/about.php') ?>"
     class="w3-bar-item w3-button" onclick="toggleFunction()"><?= Translator::t('About') ?></a>
  <a href="<?= Translator::url('/public/contact.php') ?>"
     class="w3-bar-item w3-button" onclick="toggleFunction()"><?= Translator::t('Contact') ?></a>
  
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
