<!doctype html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Void Trader</title>
    <meta name="description" content="Informational site for Void Trader.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style/style.css">
  </head>
<body>

<a href="#main" class="skip-link" id="skip-to-main">Skip to main content</a>
<div id="home"></div>
<header id="header" class="header">
  <div class="header-content">
    <h1 class="site-title"><a class="site-title-link" href="#home">Void Trader</a></h1>
    <div class="navigation-toggle"><a href="#">Menu</a></div>
    <div class="header-navigation hidden">
      <ul class="header-navigation-list">
        <li class="header-navigation-item"><a class="header-navigation-link" href="#home">Introduction</a></li>
        <li class="header-navigation-item"><a class="header-navigation-link" href="#article-two">The Story</a></li>
        <li class="header-navigation-item"><a class="header-navigation-link" href="#article-three">The Game</a></li>
        <li class="header-navigation-item"><a class="header-navigation-link" href="#article-four">The Music</a></li>
      </ul>
    </div>
  </div>
</header>

<main id="main" class="main">

  <article id="article-one" class="article-one article">
    <div class="article-content">
      <?php include('includes/introduction.php'); ?>
      <h2 class="article-title"><?php print $title; ?></h2>
      <div class="article-text"><?php print $text; ?></div>
    </div>
  </article>

  <div class="article-divider"></div>

  <article id="article-two" class="article-two article">
    <div class="article-content">
      <?php include('includes/story.php'); ?>
      <h2 class="article-title"><?php print $title; ?></h2>
      <div class="article-text"><?php print $text; ?></div>
    </div>
  </article>

  <div class="article-divider"></div>

  <article id="article-three" class="article-three article">
    <div class="article-content">
      <?php include('includes/game.php'); ?>
      <h2 class="article-title"><?php print $title; ?></h2>
      <div class="article-text"><?php print $text; ?></div>
    </div>
  </article>

  <div class="article-divider"></div>

  <article id="article-four" class="article-four article">
    <div class="article-content">
      <?php include('includes/music.php'); ?>
      <h2 class="article-title"><?php print $title; ?></h2>
      <div class="article-text"><?php print $text; ?></div>
    </div>
  </article>

</main>

<footer id="footer" class="footer">
  <div class="footer-content">
    <p class="footer-copyright">Copyright &copy; <?php print date('Y'); ?> Mitchell R.K. Shelton</p>
  </div>
</footer>

<script src="js/vendor/jquery.min.js"></script>
<script src="js/vendor/modernizr.min.js"></script>
<script src="js/script.js"></script>

</body>
</html>